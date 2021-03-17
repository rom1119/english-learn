<?php

namespace App\Langs\levels;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Third extends BaseLevel
{
    public $title = 'Dom';
    public $desc = 'moduł trzeci';
    public $slug = 'house';
    public $data = [
        'types_of_homes' => [
            ['barge', 'barka'],
            ['bedsitter, studio flat, studio apartment', 'kawalerka'],
            ['block of flats', 'blok mieszkalny'],
            ['bungalow', 'dom parterowy'],
            ['caravan', 'przyczepa kempingowa'],
            ['castle', 'zamek'],
            ['chalet', 'szalet, toaleta, ubikacja '],
            ['summer house', 'dom letniskowy'],
            ['cottage', 'domek wiejski'],
            ['detached house', 'dom wolnostojący'],
            ['farmhouse', 'dom w gospodarstwie rolnym'],
            ['flat', 'mieszkanie'],
            ['house', 'dom'],
            ['houseboat', 'łódź mieszkalna'],
            ['mansion', 'luksusowa rezydencja'],
            ['palace', 'pałac'],
            ['skyscraper', 'drapacz chmur'],
            ['terraced house', 'dom szeregowy, dom z tarasem'],
            ['tower block', 'wieżowiec'],
            ['villa', 'willa'],

        ],
        'rooms_and_furnitures' => [
            ['bath', 'wanna'],
            ['bathroom', 'łazienka'],
            ['shower unit', 'kabina prysznicowa'],
            ['tap', 'kran'],
            ['tiles', 'kafelki'],
            ['toiled seat', 'sedes'],
            ['washbasin', 'umywalka'],
            ['washing machine', 'pralka'],
            ['bed', 'łóżko'],
            ['bedroom', 'sypialnia'],
            ['bedside table', 'stolik nocny'],
            ['bookshelf', 'półka na książki'],
            ['chair', 'krzesło'],
            ['chest of drawers', 'komoda'],
            ['dressing table', 'toaletka'],
            ['rug', 'dywanik'],
            ['wardrobe', 'szafa'],
            ['cooker', 'kuchenka'],
            ['cupboard', 'szafka'],
            ['dining room', 'jadalnia'],
            ['dishwasher', 'zmywarka do naczyń'],
            ['draining board', 'suszarka do naczyń'],
            ['freezer', 'zamrażarka'],
            ['fridge', 'lodówka'],
            ['kettle', 'czajnik'],
            ['kitchen', 'kuchnia'],
            ['kitchen table', 'stół kuchenny'],
            ['microwave', 'kuchenka mikrofalowa'],
            ['oven', 'piekarnik'],
            ['sink', 'zlew, umywalka'],
            ['armchair', 'fotel'],
            ['coffe table', 'ława'],
            ['fireplace', 'kominek'],
            ['furniture', 'meble'],
            ['furnishings', 'umeblowanie'],
            ['living room', 'salon'],
            ['settee, sofa, couch', 'kanapa'],
            ['television set', 'telewizor'],
            ['wallpaper', 'tapeta'],
            ['bookcase', 'biblioteczka'],
            ['desk', 'biurko'],
            ['lamp', 'lampa'],
            ['shelf', 'półka'],
            ['study', 'gabinet'],
            ['door', 'drzwi'],
            ['back door', 'drzwi tylne'],
            ['front door', 'drzwi frontowe'],
            ['doormate', 'wycieraczka'],
            ['hall', 'korytarz'],
            ['carpet', 'dywan'],
            ['central heating', 'centralne ogrzewanie'],
            ['curtain', 'zasłona'],
            ['decoration', 'dekoracje'],
            ['equipment', 'sprzęt'],
            ['iron', 'żelazko'],
            ['ironing board', 'deska do prasowania'],
            ['light bulb', 'żarówka'],
            ['net curtain', 'firanka'],
            ['picture', 'obraz'],
            ['poster', 'plakat'],
            ['radiator', 'kaloryfer'],
            

        ],
        'parts_of_a_house' => [
            ['attic', 'strych'],
            ['balcony', 'balkon'],
            ['basement', 'piwnica'],
            ['courtyard', 'dziedziniec, podwórze'],
            ['doorbell', 'dzwonek u dzwi'],
            ['downstairs', 'na dole'],
            ['upstairs', 'na górze'],
            ['drive', 'podjazd'],
            ['fence', 'płot'],
            ['floor', 'piętro'],
            ['on the first floor', 'na pierwszym piętrze'],
            ['on the ground floor', 'na parterze'],
            ['garage', 'garaż'],
            ['ground floor', 'parter'],
            ['letter box', 'skrzynka na listy'],
            ['lift', 'winda'],
            ['roof', 'dach'],
            ['room', 'pokój'],
            ['solar panel', 'kolektor słoneczny'],
            ['spiral staircase', 'kręcone schody'],
            ['stairs', 'schody'],
            ['step', 'schodek'],
            ['terrace', 'taras'],
            ['upstair', 'na górze'],
            
        ],
        'prepositions_of_place' => [
            ['above', 'nad, ponad'],
            ['behind', 'za'],
            ['between', 'między'],
            ['in', 'w'],
            ['in front of', 'przed'],
            ['next to', 'obok'],
            ['on', 'na'],
            ['opposite', 'naprzeciwko'],
            ['under', 'pod'],
        ],
        'location' => [
            ['district', 'dzielnica'],
            ['home town', 'miasto rodzinne'],
            ['live in the country', 'mieszkać w kraju'],
            ['live in the village', 'mieszkać na wsi'],
            ['live in the suburbs', 'mieszkać na przedmieściach'],
            ['live in a city', 'mieszkać w dużym mieście'],
            ['live in a town', 'mieszkać na małym mieście'],
            ['village', 'wioska'],
       
        ],
        'leaving_and_returning_to_your_home' => [
            ['be at home', 'być w domu'],
            ['be out', 'być poza domem'],
            ['get home', 'przyjść do domu'],
            ['go home', 'iść do domu'],
            ['lock the door', 'zamknąć drzwi na klucz'],
            ['move house', 'przeprowadzać się'],
            ['move in', 'wprowadzać się'],
            ['move out', 'wyprowadzać się'],
        ],
        'renting' => [
            ['bill', 'rachunek'],
            ['electricity bill', 'rachunek za elektryczność'],
            ['gas bill', 'rachunek za gaz'],
            ['telephone bill', 'rachunek za telefon'],
            ['central heating', 'centralne ogrzewanie'],
            ['estate agent', 'biuro nieruchomości'],
            ['fitted kitchen', 'kuchnia robiona na wymiar, wyposażona kuchnia'],
            ['flatmate', 'współlokator'],
            ['fully furnished', 'w pełni umeblowany'],
            ['landlord', 'gospodarz domu'],
            ['landlady', 'gospodyni domu'],
            ['flat owner', 'właściciel mieszkania'],
            ['let a flat', 'wynajmować komuś mieszkanie'],
            ['location', 'lokalizacja, położenie'],
            ['pay the rent', 'płacić czynsz'],
            ['rent a flat', 'wynajmować mieszkanie od kogoś'],
            ['share a flat', 'wspólnie zamieszkiwać mieszkanie'],
            ['tenant', 'lokator'],
            ['unfurnished', 'nie umeblowany'],
            
        ],
        'jobs_in_the_house' => [
            ['clean the windows', 'czyścić okna'],
            ['clear up', 'sprzątać'],
            ['do the cooking', 'gotować'],
            ['do the dusting', 'ścierać kurze'],
            ['do the housework', 'wykonywać prace domowe'],
            ['do the ironing', 'prasować'],
            ['do the shopping', 'robić zakupy'],
            ['do the washing', 'robić pranie'],
            ['hoover the carpets', 'odkurzać dywany'],
            ['lay the table', 'nakrywać do stołu'],
            ['make the bed', 'ścielić łóżko'],
            ['pay the bills', 'płacić rachunki'],
            ['polish the furniture', 'polerować meble'],
            ['sweep the floor', 'zamiatać podłogę'],
            ['take out the rubbish', 'wynosić śmieci'],
            ['tidy up', 'sprzątać'],
            ['tidy your room', 'sprzątać swój pokój'],
            ['throw away the rubbish', 'wyrzucać śmieci'],
            ['vacuum', 'odkurzać'],
         
        ],

    ];

}
