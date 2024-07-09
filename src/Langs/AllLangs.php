<?php
namespace App\Langs;

use App\Langs\levels\SchoolBook\Eighth;
use App\Langs\levels\SchoolBook\Eleventh;
use App\Langs\levels\SchoolBook\Fifth;
use App\Langs\levels\SchoolBook\First;
use App\Langs\levels\SchoolBook\Fiveteenth;
use App\Langs\levels\SchoolBook\Fourth;
use App\Langs\levels\SchoolBook\Fourtheenth;
use App\Langs\levels\SchoolBook\Ninth;
use App\Langs\levels\SchoolBook\Second;
use App\Langs\levels\SchoolBook\Seventh;
use App\Langs\levels\SchoolBook\Sixth;
use App\Langs\levels\SchoolBook\Tenth;
use App\Langs\levels\SchoolBook\Theerteenth;
use App\Langs\levels\SchoolBook\Third;
use App\Langs\levels\SchoolBook\Twelfth;
use App\Langs\levels\Sixteenth;
use App\Langs\levels\Seventeenth;
use App\Langs\levels\Eighteen;
use App\Langs\levels\Nineteen;
use App\Langs\levels\Twentyth;
use App\Langs\levels\Twentyfirst;
use App\Langs\levels\Twentysecond;

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
            new Nineteen(),
            new Twentyth(),
            new Twentyfirst(),
            new Twentysecond(),
        ];
    }
}
