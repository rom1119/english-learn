<?php
namespace App\Langs\pages;

use App\Langs\AllLangs;
use App\Langs\Page;

class QuizPage extends Page {

    protected $method = null;
    protected $questionIndex = null;
    protected $questionText = null;
    protected $correctWordsAmount = 0;
    protected $answer = null;
    protected $answerCorrectText = null;
    protected $answerType = null;
    protected $levelType = null;
    protected $formSend = false;

    protected $currentLevel;
    protected $randomElIndex = null;
    protected $randomLang = null;
    protected $randomLangIndex = null;
    protected $valid = null;
    protected $langs = ['en', 'pl'];
    protected $allModules;

    public function __construct($levelType)
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->levelType = $levelType;
        $this->allModules = AllLangs::getAll();

        foreach($this->allModules as $mod) {
            if ($mod->slug === $levelType) {
                $this->currentLevel = $mod;
            }
        }

        switch($this->method)
        {
            case 'POST':
                $this->answer = $_POST['answer'];
                $this->answerType = $_POST['answerType'];
                $this->questionIndex = $_POST['questionIndex'];
                $this->formSend = true;
                break;

            default:
        }   
    }
    public function renderContent(){

        $allModules = $this->allModules;
        $data = null;
        foreach($allModules as $module) {
            if ($module->slug === $this->levelType) {
                $data = $module->data;
                break;
            }
        }
        if (!$data) {
            throw new \Exception('Can not find module type ' . $this->levelType);
        }
        $flatMap = [];
        array_map(function($el) use (& $flatMap) {$flatMap = array_merge($flatMap, $el) ;}, $data);


        if ($this->formSend) {

            $this->randomElIndex = $this->questionIndex;
            $this->randomLang = $this->langs[$this->answerType];
            $this->randomLangIndex = $this->answerType;
            $this->valid = $this->validateAnswer($flatMap[$this->randomElIndex], $this->randomLang, $this->answer);

            if ($this->valid === true) {
                $this->generateRandomQuestion($flatMap);
            }
        } else {
            $this->generateRandomQuestion($flatMap);
        }

        // $this->randomElIndex = 7;
        // foreach($flatMap as $k => $e){
        //     if ($e[0] == 'go with, suit') {
        //         dump($e);
        //         dump($k);
        //         die;

        //     }
        // }


        $randomEl = $flatMap[$this->randomElIndex];

        $this->generateQuestionText($randomEl);
        $this->generateHtml($randomEl);

    }


    protected function generateQuestionText(array $randomEl) {
        $q = null;
        $a = null;
        if ($this->randomLang == 'pl') {
            $q = explode(',', $randomEl[1]);
            $a = $randomEl[0];
        } else {
            $q = explode(',', $randomEl[0]);
            $a = $randomEl[1];

        }
        $this->questionText = trim($q[rand(0, count($q) - 1)]);
        $this->answerCorrectText = $a;
    }
    protected function generateRandomQuestion(array $flatMap) {
        $this->randomElIndex = rand(0, count($flatMap));
        $r = rand(0, 1);
        $this->randomLangIndex = $r;
        $this->randomLang = $this->langs[$r];
    }

    protected function generateHtml(array $randomEl){

        echo '<div style="
            margin-left: auto;
            margin-right: auto;
            width: 600px;
        ">';  
        echo '<p>Odpowiadasz w module  <span style="font-size: 1.3em; font-weight: bold;">"' . $this->currentLevel->title . '"</span></br><a href="?levelType=">Wróć do wyboru modułów</a></p>';  

        echo '<form method="POST">';
        if ($this->randomLang == 'pl') {
            echo '<h2>Tłumacz na ANGIELSKI</h2>';
            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';

            echo '<p><input style="width: 350px;" type="text" name="answer" autofocus></p>';


        } else {
            echo '<h2>Tłumacz na POLSKI</h2>';

            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';
            echo '';
            echo '<p> <input style="width: 350px;" type="text" name="answer" autofocus></p>';
        }

        if ($this->valid === false) {
            echo '<h2 style="color: red;">Odpowiedź niepoprawna </h2>';

            if ($this->correctWordsAmount > 0) {
                echo '<h5 style="color: green;">w towojej odpowiedzi jest <b>' . $this->correctWordsAmount . ' poprawnych słów</b></h5>';

            }

        } else if($this->valid === true) {
            echo '<h2 style="color: green;">Odpowiedź poprawna </h2>';
            echo '<p>Oto kolejne pytanie</p>';
        }
        echo '<div style="position:relative;"><button  type="submit">Odpowiedz</button>';
        echo '<div style="position:absolute; right: 0; display:inline; width: 60%;">';
        echo '<button style="position:absolute; right: 0;" onclick="document.getElementById(\'correct-answer\').style.display = \'block\';" id="correct-answer-btn" type="button">Sprawdź dostępne odpowiedzi</button>';
        echo '</br>';
        echo '<span style="display:none; margin-top: 30px;" id="correct-answer">' . $this->answerCorrectText .'</button>';
        echo '</div>';
        echo '</div>';
        echo '<input type="hidden" name="answerType" value="' . $this->randomLangIndex . '" >';
        echo '<input type="hidden" name="questionIndex" value="' . $this->randomElIndex . '" >';
        // echo '</p>';
        echo '</form>';
        echo '</div>';  


    }

    protected function detectAnswerCorrectWords($answer, $toCheckArr)
    {
        $answerCpArr = explode(' ', $answer);
        $answerCpArrSec = explode(' ', $answer);

        $correctWordsAmount = 0;
        // dump($toCheckArr);
        foreach($answerCpArr as $k => $word) {
            // dump($word);
            foreach($toCheckArr as $el) {
                $el = trim(mb_strtolower($el));
                $checkArr = explode(' ', $el);
                foreach($checkArr as $wordToCheck) {
                    $wordToCheck = trim(mb_strtolower($wordToCheck));

                    if ($word === $wordToCheck && isset($answerCpArrSec[$k])) {
                        $correctWordsAmount++;
                        // dump($k);
                        // dump($answerCpArrSec);
                        unset($answerCpArrSec[$k]);
                        // dump($answerCpArrSec);
                        // $skip = true;
                        continue;
                    }
                }
             }
        }

        $this->correctWordsAmount = $correctWordsAmount;
        // dump($this->correctWordsAmount);
    }

    protected function validateAnswer(array $translateEl, $randomLang, $answer)
    {
        if ($answer === null) {
            return null;
        }
        $answer = trim(mb_strtolower($answer));
        $answerCp = $answer;

        if ($randomLang == 'pl') {
            $toCheck = trim(mb_strtolower($translateEl[0]));
            $toCheckArr = explode(',', $toCheck);
        //    dump($toCheckArr);
        //    dump($answer);
        //    dump(in_array($answer, $toCheckArr, true));
           
           
           foreach($toCheckArr as $el) {
               $el = trim(mb_strtolower($el));
               if ($answer === $el) {
                   return true;
                }
            }
            $this->detectAnswerCorrectWords($answerCp, $toCheckArr);
            // die;
            return false;
            
        } else {
            $toCheck = trim(mb_strtolower($translateEl[1]));
            $toCheckArr = explode(',', $toCheck);
            // dump($toCheckArr);
            // dump($answer);
            // dump(in_array($answer, $toCheckArr, true));
            foreach($toCheckArr as $el) {
                if ($answer === trim(mb_strtolower($el))) {
                    return true;
                }
            }
            $this->detectAnswerCorrectWords($answerCp, $toCheckArr);
            
            // die;
            return false;
        }
    
        return true;
    
    }

}