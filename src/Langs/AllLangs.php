<?php
namespace App\Langs;

use App\Langs\levels\Eighth;
use App\Langs\levels\Eleventh;
use App\Langs\levels\Fifth;
use App\Langs\levels\First;
use App\Langs\levels\Fiveteenth;
use App\Langs\levels\Fourth;
use App\Langs\levels\Fourtheenth;
use App\Langs\levels\Ninth;
use App\Langs\levels\Second;
use App\Langs\levels\Seventh;
use App\Langs\levels\Sixth;
use App\Langs\levels\Tenth;
use App\Langs\levels\Theerteenth;
use App\Langs\levels\Third;
use App\Langs\levels\Twelfth;
use App\Langs\levels\Sixteenth;
use App\Langs\levels\Seventeenth;
use App\Langs\levels\Eighteen;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:21 AM
 */

class AllLangs {


    public static function getFiveModule(): Fifth {

        return new Fifth();
    }
    
    public static function getAll(): array {


        return [
            new First(), 
            new Second, 
            new Third(),
            new Fourth(),
            new Fifth(),
            new Sixth(),
            new Seventh(),
            new Eighth(),
            new Ninth(),
            new Tenth(),
            new Eleventh(),
            new Twelfth(),
            new Theerteenth(),
            new Fourtheenth(),
            new Fiveteenth(),
            new Sixteenth(),
            new Seventeenth(),
            new Eighteen(),
        ];
    }
}
