<?php
/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/27/21
 * Time: 9:12 PM
 */

use App\Langs\pages\MainPage;
use App\Langs\pages\QuizPage;

// Include 'Composer' autoloader.
include 'vendor/autoload.php';

$levelType = null;

if (isset($_GET['levelType'])) {
    $levelType = $_GET['levelType'];

}
if ($levelType) {
    $p = new QuizPage($levelType);

    $p->renderContent();
} else {
    $p = new MainPage();

    $p->renderContent();
}

// dump($_REQUEST);
// dump($_SERVER);

// foreach($flatMap as $k => $e){
        //     if ($e[0] == 'go with, suit') {
        //         dump($e);
        //         dump($k);
        //         die;

        //     }
        // }