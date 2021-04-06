<?php
namespace App\Langs\pages;

use App\Langs\AllLangs;
use App\Langs\Page;

class MainPage extends Page {

    public function renderContent(){

        $data = AllLangs::getAll();


        echo '<h1 class="kiwi-font">Narzędzie do nauki angielskiego, zapraszamy ...</h1>';

        echo '<p>Wybierz jeden z dotępnych działów dla sprawdzenia swojej wiedzy z angielskiego</p>';
        
        foreach($data as $el) {

            echo '<p><a href="?levelType='. $el->slug .'">' . $el->title . ' </a><span style="font-size: 1.3em;">' . $el->desc . '</span></p>';

        }


    }

}