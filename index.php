<?php
/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/27/21
 * Time: 9:12 PM
 */
declare(strict_types=1);

// use App\Langs\pages\MainPage;
// use App\Langs\pages\QuizPage;

interface  Animal {

     function sound(string $arg);
}

class Dog implements Animal {

    public $asd;

    public function __construct() {
        $this->asd = rand(0, 100);
    }
    

    public function sound(string $arg) {
        echo 0x42;
        echo '<br>';
        echo trim('123 123', 3);
        echo '<br>arg';
        echo $arg;
        // explode
        
    }

    public function __invoke() {
        echo 'Wykonano metode __invoke';
    }

    public function __call($name, $arguments)
    {
        echo 'Wywołano funckję '.$name.', z argumentami '.implode(', ', $arguments);
    }


}

$dog = new Dog();
$dogAsd = $dog;

// $dog->sound('test arg');
// $dog->ssss();
$a = 'asd';
$b = &$a;

// $b = 'wwww';

// unset($a);

// var_dump($a);
// echo '</br>';
// var_dump($b);
// print_r(is_string($b));

// function foo()
// {
//     static $bar;
//     $bar++;
//     echo "Before unset: $bar, ";
//     unset($bar);
//     $bar = 23;
//     echo "after unset: $bar<br>";
// }

// foo();
// foo();
// foo();

// die;












// Include 'Composer' autoloader.
include 'vendor/autoload.php';
use App\Langs\pages\MainPage;
use App\Langs\pages\QuizPage;

$levelType = null;

if (isset($_GET['levelType'])) {
    $levelType = $_GET['levelType'];

}

echo '<link rel="stylesheet" href="./assets/css/style.css" >';
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
//             if ($e[0] == 'go with, suit') {
//                 dump($e);
//                 dump($k);
//                 die;

//             }
//         }

        