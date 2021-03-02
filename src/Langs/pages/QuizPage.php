<?php
namespace App\Langs\pages;

use App\Langs\AllLangs;
use App\Langs\Page;

class QuizPage extends Page {

    protected $method = null;
    protected $questionIndex = null;
    protected $questionText = null;
    protected $answer = null;
    protected $answerType = null;
    protected $levelType = null;
    protected $formSend = false;


    protected $randomElIndex = null;
    protected $randomLang = null;
    protected $randomLangIndex = null;
    protected $valid = null;
    protected $langs = ['en', 'pl'];

    public function __construct($levelType)
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->levelType = $levelType;

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

        $allModules = AllLangs::getAll();
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

        $this->randomElIndex = 103;
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
        if ($this->randomLang == 'pl') {
            $q = explode(',', $randomEl[1]);
        } else {
            $q = explode(',', $randomEl[0]);
            
        }
        $this->questionText = trim($q[rand(0, count($q) - 1)]);
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
            width: 500px;
        ">';  
        echo '<h1><a href="?levelType=">Wróć do wyboru działów</a></h1>';  

        echo '<form method="POST">';
        echo '<h2>Wpisz poprawną odpowiedź w polu</h2>';
        if ($this->randomLang == 'pl') {
            echo '<h2><b>" ' . $this->questionText . ' "<b></h2>';

            echo '<p>PO ANGIELSKU TO: <input type="text" name="answer" autofocus>';


        } else {
            echo '<h2><b>" ' . $this->questionText . ' "<b></h2>';
            echo '';
            echo '<p>PO POLSKU TO: <input type="text" name="answer" autofocus></p>';
        }

        if ($this->valid === false) {
            echo '<h2 style="color: red;">Odpowiedź niepoprawna ';

        } else if($this->valid === true) {
            echo '<h2 style="color: green;">Odpowiedź poprawna </h2>';
            echo '<p>Oto kolejne pytanie</p>';
        }
            echo '<p><button type="submit">Odpowiedz</button></p>';
        echo '<input type="hidden" name="answerType" value="' . $this->randomLangIndex . '" >';
        echo '<input type="hidden" name="questionIndex" value="' . $this->randomElIndex . '" >';
        echo '</p>';
        echo '</form>';
        echo '</div>';  


    }

    protected function validateAnswer(array $translateEl, $randomLang, $answer)
    {
        if ($answer === null) {
            return null;
        }
        $answer = trim(mb_strtolower($answer));
    
        if ($randomLang == 'pl') {
            $toCheck = trim(mb_strtolower($translateEl[0]));
            $toCheckArr = explode(',', $toCheck);
        //    dump($toCheckArr);
        //    dump($answer);
        //    dump(in_array($answer, $toCheckArr, true));
        //    die;
           foreach($toCheckArr as $el) {
                if ($answer === trim(mb_strtolower($el))) {
                    return true;
                }
            }
        return false;
            
        } else {
            $toCheck = trim(mb_strtolower($translateEl[1]));
            $toCheckArr = explode(',', $toCheck);
            // dump($toCheckArr);
            // dump($answer);
            // dump(in_array($answer, $toCheckArr, true));
            // die;
            foreach($toCheckArr as $el) {
                if ($answer === trim(mb_strtolower($el))) {
                    return true;
                }
            }
            return false;
        }
    
        return true;
    
    }

}