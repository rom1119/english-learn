<?php
namespace App\Langs;

use App\Langs\levels\Fifth;
use App\Langs\levels\First;
use App\Langs\levels\Fourth;
use App\Langs\levels\Second;
use App\Langs\levels\Third;

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


        return [new First(), new Second, new Third(), new Fourth(), new Fifth()];
    }
}
