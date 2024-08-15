<?php
namespace App\Langs\pages;

use App\Langs\AllLangs;
use App\Langs\Page;

class MainPage extends Page {

    public function renderContent(){

        $data = AllLangs::getAll();


        echo '<h1 class="kiwi-font">Narzędzie do nauki angielskiego, zapraszamy ...</h1>';

        echo '<p>Wybierz jeden z dotępnych działów dla sprawdzenia swojej wiedzy z angielskiego</p>';
        
        foreach($data as $currentLevel) {
            $totalQuestions = 0;
            $htmlId = $currentLevel->slug .'-firstIndex';
            foreach ($currentLevel->data as $el) {
                $totalQuestions += count($el);
            }
            echo '<p>'
          . ' <form method="GET" style="border:1px solid;">'
                .'<h3 style="margin: 0px;">' . $currentLevel->title . '</h3>'
          . ' <input type="hidden" value="'. $currentLevel->slug .'" name="levelType" />'
          .' <br><label for="'. $htmlId .'">Od ktorego pytania zaczniesz ? </label><br><input type="number" id="'. $htmlId .'" min="1" value="1" name="firstIndex" />  / ' . $totalQuestions
          .' <input type="submit" value="Rozpocznij" />  '
          . ' </form>'
          
            . '</p>';

        }


    }

}