<?php
namespace App\Langs;

use App\Langs\levels\Fifth;

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
}
