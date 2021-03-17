<?php
namespace App\Langs\pages;

use App\Langs\AllLangs;
use App\Langs\Page;

class QuizPage extends Page {

    protected $method = null;
    protected $questionIndex = null;
    protected $questionText = null;
    protected $correctWordsAmount = 0;
    protected $firstAnswerError = true;
    protected $secondAnswerError = true;
    protected $thirdAnswerError = true;

    protected $answer = null;
    protected $answerSecond = null;
    protected $answerThird = null;

    protected $answerCorrectText = null;
    protected $answerType = null;
    protected $levelType = null;
    protected $formSend = false;

    protected $currentLevel;
    protected $randomElIndex = -1;
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
                if (isset($_POST['answerSecond'])) {
                    $this->answerSecond = $_POST['answerSecond'];
                    
                }
                if (isset($_POST['answerThird'])) {
                    $this->answerThird = $_POST['answerThird'];
                    
                }
                $this->answerType = $_POST['answerType'];
                $this->questionIndex = $_POST['questionIndex'];
                $this->formSend = true;
                break;

            default:
        }   
    }
    public function renderContent(){

        $allModules = $this->allModules;
        $data = $this->currentLevel->data;
        if (!$data) {
            throw new \Exception('Can not find module type ' . $this->levelType);
        }
        $flatMap = [];
        
        array_map(function($el) use (& $flatMap) {$flatMap = array_merge($flatMap, $el) ;}, $data);
        $flatMap = array_values($flatMap);
        // dump($flatMap);die;


        if ($this->formSend) {

            $this->randomElIndex = $this->questionIndex;
            $this->randomLang = $this->langs[$this->answerType];
            $this->randomLangIndex = $this->answerType;
            $this->valid = $this->validateAnswer($flatMap[$this->randomElIndex], $this->randomLang);

            if ($this->valid === true) {
                $this->generateRandomQuestion($flatMap);
            }
        } else {

            $this->generateRandomQuestion($flatMap);
        }

        // $this->randomElIndex = 146;
        // foreach($flatMap as $k => $e){
        //     if ($e[0] == 'plain') {
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
        if ($this->currentLevel->isBasicQuestion()) {
            if ($this->randomLang == 'pl') {
                $q = explode(',', $randomEl[1]);
                $a = $randomEl[0];
            } else {
                $q = explode(',', $randomEl[0]);
                $a = $randomEl[1];
            }
        
            $this->questionText = trim($q[rand(0, count($q) - 1)]);
            $this->answerCorrectText = $a;
        } else {
            if ($this->randomLang == 'pl') {
                $q = explode(',', $randomEl['polish']);
                // $a = $randomEl[0];
                $this->questionText = trim($q[rand(0, count($q) - 1)]);

            } else {
                $q = explode(',', $randomEl[0]);
                $a = $randomEl['polish'];
                $this->answerCorrectText = $a;

            }
        
        }


    }
    protected function generateRandomQuestion(array $flatMap) {
        $this->randomElIndex++;
        // $this->randomElIndex = rand(0, count($flatMap) - 1);
        $r = 1;
        $this->randomLangIndex = $r;
        $this->randomLang = $this->langs[$r];
    }

    protected function generateHtml(array $randomEl){

        if($this->currentLevel->isBasicQuestion()) {
            return $this->generateHtmlForBasicQuestion($randomEl);
        }
        
        return $this->generateHtmlForAdvanceQuestion($randomEl);


    }

    protected function generateHtmlForAdvanceQuestion( array $randomEl)
    {
        echo '<div style="
            margin-left: auto;
            margin-right: auto;
            width: 600px;
        ">';  
        echo '<p>Odpowiadasz w module  <span style="font-size: 1.3em; font-weight: bold;">"' . $this->currentLevel->title . '"</span>';  
        echo '<span style="font-size: 1.3em;">' . $this->currentLevel->desc . '</span></br>';  
        echo '<a href="?levelType=">Wróć do wyboru modułów</a>';  
        echo '</p>';  

        echo '<form method="POST">';
        if ($this->randomLang == 'pl') {
            echo '<h2>Tłumacz na ANGIELSKI</h2>';
            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';

            echo '<p><label style="display: inline-block; width: 180px;"> Infinitive </br> (Bezokolicznik)<input style="width: 100px;" type="text" name="answer" autofocus autocomplete="off">';
            // dump($this->firstAnswerError);die;
            if ($this->firstAnswerError) {
                echo  '<span style="font-size: .9em; font-weight: bold; color:red;">Niepoprawna odpowiedź</span>';

            }
            echo  '</label>';
            echo '<label style="display: inline-block; width: 180px;"> Past simple </br> (Czas przeszły) <input style="width: 100px;" type="text" name="answerSecond"  autocomplete="off">';
            if ($this->secondAnswerError) {
                echo  '<span style="font-size: .9em; font-weight: bold; color:red;">Niepoprawna odpowiedź</span>';

            }
            echo  '</label>';
            echo '<label style="display: inline-block; width: 180px;"> Past participle </br> (Imiesłów czasu przeszłego) <input style="width: 100px;" type="text" name="answerThird"  autocomplete="off">';
            if ($this->thirdAnswerError) {
                echo  '<span style="font-size: .9em; font-weight: bold; color:red;">Niepoprawna odpowiedź</span>';

            }
            echo  '</label>';
            echo '</p>';

        } else {
            echo '<h2>Tłumacz na POLSKI</h2>';

            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';
            echo '';
            echo '<p><label> Infinitive (Bezokolicznik) <input style="width: 350px;" type="text" name="answer" autofocus autocomplete="off"></label>';
            echo '<label> Past simple (Czas przeszły) <input style="width: 350px;" type="text" name="answerSecond"  autocomplete="off"></label>';
            echo '<label> Past participle (Imiesłów czasu przeszłego) <input style="width: 350px;" type="text" name="answerThird"  autocomplete="off"></label>';
            echo '</p>';
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

    protected function generateHtmlForBasicQuestion( $var)
    {
        echo '<div style="
            margin-left: auto;
            margin-right: auto;
            width: 600px;
        ">';  
        echo '<p>Odpowiadasz w module  <span style="font-size: 1.3em; font-weight: bold;">"' . $this->currentLevel->title . '"</span>';  
        echo '<span style="font-size: 1.3em;">' . $this->currentLevel->desc . '</span></br>';  
        echo '<a href="?levelType=">Wróć do wyboru modułów</a>';  
        echo '</p>';  

        echo '<form method="POST">';
        if ($this->randomLang == 'pl') {
            echo '<h2>Tłumacz na ANGIELSKI</h2>';
            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';

            echo '<p><input style="width: 350px;" type="text" name="answer" autofocus autocomplete="off"></p>';


        } else {
            echo '<h2>Tłumacz na POLSKI</h2>';

            echo '<h2><b>" ' . $this->questionText . ' "</b></h2>';
            echo '';
            echo '<p> <input style="width: 350px;" type="text" name="answer" autofocus autocomplete="off"></p>';
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

    protected function validateAnswer(array $translateEl, $randomLang)
    {
        
        if ($this->currentLevel->isBasicQuestion()) {
            $answer = $this->answer;
            if ($answer === null) {
                return null;
            }
            $answer = trim(mb_strtolower($answer));
            $answerCp = $answer;
    
            if ($randomLang == 'pl') {
                $toCheck = trim(mb_strtolower($translateEl[0]));
                $toCheckArr = explode(',', $toCheck);
                
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
        } else {
            $answer = trim(mb_strtolower($this->answer));
            $answerSecond = trim(mb_strtolower($this->answerSecond));
            $answerThird = trim(mb_strtolower($this->answerThird));
            if ($answer === null) {
                return null;
            }
            $answerCp = $answer;
    
            if ($randomLang == 'pl') {

                $toCheck = trim(mb_strtolower($translateEl['infinitive']));
                $toCheckArr = explode(',', $toCheck);
                
               foreach($toCheckArr as $el) {
                   $el = trim(mb_strtolower($el));
                   if ($answer === $el) {
                        $this->firstAnswerError = false;
                        break;
                    }
                }

                $toCheckS = trim(mb_strtolower($translateEl['past_simple']));
                $toCheckArrS = explode(',', $toCheckS);
                
               foreach($toCheckArrS as $el) {
                   $el = trim(mb_strtolower($el));
                   if ($answerSecond === $el) {
                        $this->secondAnswerError = false;
                        break;
                    }
                }

                $toCheckT = trim(mb_strtolower($translateEl['past_participle']));
                $toCheckArrT = explode(',', $toCheckT);
                
               foreach($toCheckArrT as $el) {
                   $el = trim(mb_strtolower($el));
                   if ($answerThird === $el) {
                        $this->thirdAnswerError = false;
                        break;
                    }
                }
                // $this->detectAnswerCorrectWords($answerCp, $toCheckArr);
                // die;
                return !$this->firstAnswerError && !$this->secondAnswerError && !$this->thirdAnswerError;
                
            } else {
                $toCheck = trim(mb_strtolower($translateEl['polish']));
                $toCheckArr = explode(',', $toCheck);
                // dump($toCheckArr);
                // dump($answer);
                // dump(in_array($answer, $toCheckArr, true));
                foreach($toCheckArr as $el) {
                    if ($answer === trim(mb_strtolower($el))) {
                        return true;
                    }
                }
                // $this->detectAnswerCorrectWords($answerCp, $toCheckArr);
                
                // die;
                return false;
            }
        
            return true;
        }
    
    }

}