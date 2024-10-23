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
use App\Langs\levels\Twentythird;
use App\Langs\levels\FromCourse\Twentyfourth;
use App\Langs\levels\FromCourse\Twentyfivth;
use App\Langs\levels\FromCourse\Twentysix;
use App\Langs\levels\FromCourse\Twentyseven;
use App\Langs\levels\FromCourse\Twentyeight;
use App\Langs\levels\FromCourse\Twentynine;
use App\Langs\levels\FromCourse\Thirty;
use App\Langs\levels\FromCourse\Thirtyone;
use App\Langs\levels\FromCourse\Thirtytwo;
use App\Langs\levels\FromCourse\Thirtythree;
use App\Langs\levels\FromCourse\Thirtyfour;
use App\Langs\levels\FromCourse\Thirtyfive;
use App\Langs\levels\FromCourse\Thirtysix;
use App\Langs\levels\FromCourse\Thirtyseven;
use App\Langs\levels\FromCourse\Thirtyeight;
use App\Langs\levels\FromCourse\Thirtynine;
use App\Langs\levels\Phrases\PhrasesB1;
use App\Langs\levels\Phrases\PhrasesB2;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:21 AM
 */

class AllLangs {
    
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
            new Twentythird(),
            new Twentyfourth(),
            new Twentyfivth(),
            new Twentysix(),
            new Twentyseven(),
            new Twentyeight(),
            new Twentynine(),
            new Thirty(),
            new Thirtyone(),
            new Thirtytwo(),
            new Thirtythree(),
            new Thirtyfour(),
            new Thirtyfive(),
            new Thirtysix(),
            new Thirtyseven(),
            new Thirtyeight(),
            new Thirtynine(),
            new PhrasesB2(),
            new PhrasesB1(),
        ];
    }
}
