<?php
/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/27/21
 * Time: 9:12 PM
 */

// Include 'Composer' autoloader.
include 'vendor/autoload.php';

use App\Langs\AllLangs;

$method = null;
$questionIndex = null;
$answer = null;
$answerType = null;
$levelType = null;
$formSend = false;

$method = $_SERVER['REQUEST_METHOD'];
switch($method)
{
    case 'POST':
        $answer = $_POST['answer'];
        $answerType = $_POST['answerType'];
        $questionIndex = $_POST['questionIndex'];
        $formSend = true;
        break;

    default:
}

$data = AllLangs::getFiveModule()->data;
$flatMap = [];
array_map(function($el) use (& $flatMap) {$flatMap = array_merge($flatMap, $el) ;}, $data);

$randomElIndex = null;
$randomLang = null;
$randomLangIndex = null;
$valid = null;
$langs = ['en', 'pl'];

if ($formSend) {
    $randomElIndex = $questionIndex;
    $randomLang = $langs[$answerType];
    $randomLangIndex = $answerType;
    $valid = validateAnswer($flatMap[$randomElIndex], $randomLang, $answer);
} else {
    $randomElIndex = rand(0, count($flatMap));
    $r = rand(0, 1);
    $randomLangIndex = $r;
    $randomLang = $langs[$r];

}
//$randomElIndex = 87;
//dump($data);
//dump($flatMap);
$randomEl = $flatMap[$randomElIndex];

generateHtml($randomLang, $randomLangIndex, $randomEl, $randomElIndex, $valid);

function validateAnswer(array $translateEl, $randomLang, $answer)
{
    if ($answer === null) {
        return null;
    }
    $answer = trim(mb_strtolower($answer));

    if ($randomLang == 'pl') {
        $toCheck = trim(mb_strtolower($translateEl[0]));
        $toCheckArr = explode(',', $toCheck);
//        dump($toCheckArr);
//        dump($answer);
//        dump(in_array($answer, $toCheckArr, true));
//        die;
        if (!in_array($answer, $toCheckArr, true)) {
            return false;
        }
    } else {
        $toCheck = trim(mb_strtolower($translateEl[1]));
        $toCheckArr = explode(',', $toCheck);

        if (!in_array($answer, $toCheckArr, true)) {
            return false;
        }
    }

    return true;

}

function generateHtml($randomLang, $randomLangIndex,  array $randomEl, $randomElIndex, $valid){



        echo '<form method="POST">';
        echo '<h2>Wpisz poprawną odpowiedź w polu</h2>';
        if ($randomLang == 'pl') {
            echo '<h2><b>' . $randomEl[1] . '<b></h2>';

            echo '<p>PO ANGIELSKU TO: <input type="text" name="answer" >';


        } else {
            echo '<h2><b>' . $randomEl[0] . '<b></h2>';
            echo '';
            echo '<p>PO POLSKU TO: <input type="text" name="answer" ></p>';
        }

        if ($valid === false) {
            echo '<h2 style="color: red;">Odpowiedź niepoprawna ';

        } else if($valid === true) {
            echo '<h2 style="color: green;">Odpowiedź poprawna </h2>';
            echo '<p>Oto kolejne pytanie</p>';
        }
            echo '<p><button type="submit">Odpowiedz</button></p>';
        echo '<input type="hidden" name="answerType" value="' . $randomLangIndex . '" >';
        echo '<input type="hidden" name="questionIndex" value="' . $randomElIndex . '" >';
        echo '</p>';
        echo '</form>';




}
