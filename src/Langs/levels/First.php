<?php

namespace App\Langs\levels;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class First extends BaseLevel
{
    public $title = 'Życie rodzinne i towarzyskie';
    public $desc = 'moduł pierwszy';
    public $slug = 'famili-and-social-life';
    public $data = [
        'daily_routines' => [
            ['brush your hair', 'czesać włosy'],
            ['brush your teeth', 'myć zęby'],
            ['daily routine', 'czynności codzienne'],
            ['do the washing', 'robić pranie'],
            ['do the washing up', 'zmywać'],
            ['wash the dishes', 'zmywać naczynia'],
            ['do your homework', 'odrabiać lekcje, odrabiać pracę domową'],
            ['eat out', 'jeść poza domem'],
            ['get dressed', 'ubierać się'],
            ['get ready', 'szykować się'],
            ['get ready for bed', 'szykować się do łóżka'],
            ['get ready for school', 'szykować się do szkoły'],
            ['get up', 'wstawać'],
            ['go home', 'iść do domu'],
            ['go shopping', 'iść na zakupy'],
            ['go to bed', 'iść spać'],
            ['go to school', 'iść do szkoły'],
            ['go to work', 'iść do pracy'],
            ['go out', 'wychodzić'],
            ['have a bath', 'kąpać się'],
            ['have a shower', 'brać prysznic'],
            ['have a meal', 'jeść posiłek'],
            ['have breakfast', 'jeść śniadanie'],
            ['have dinner', 'jeść obiad'],
            ['have lunch', 'jeść lunch'],
            ['have a rest', 'odpoczywać'],
            ['leave for home', 'wychodzić do domu'],
            ['make meals', 'przygotowywać posiłek'],
            ['study', 'uczyć się'],
            ['take a walk, go for a walk', 'iść na spacer'],
            ['take the dog for a walk', 'wyprowadzać psa na spacer'],
            ['send text message', 'wysyłać wiadomość tekstową'],
            ['wake up', 'budzić się'],
            ['wash', 'myć'],
            ['wash clothes', 'prać ubrania'],            

        ],
        'time_expressions' => [
            ['always', 'zawsze'],
            ['at midday', 'w południe'],
            ['at the weekend', 'w weekend'],
            ['at the moment', 'w tej chwili'],
            ['every day', 'codziennnie'],
            ['in the morning', 'rano'],
            ['in the evening', 'wieczorem'],
            ['never', 'nigdy'],
            ['now', 'teraz'],
            ['often', 'często'],
            ['on mondays', 'w poniedziałki'],
            ['on saturday', 'w sobotę'],
            ['on friday evenings', 'w piątki wieczorem'],
            ['once a week', 'raz w tygodniu'],
            ['rarely', 'rzadko'],
            ['sometimes', 'czasami'],
            ['today', 'dziś'],
            ['usually', 'zwykle'],

        ],
        'leisure_activities' => [
            ['act', 'działać, grać w sztuce'],         
            ['art', 'sztuka'],         
            ['buy', 'kupować'],         
            ['cost', 'koszt, kosztować'],         
            ['create a website', 'tworzyć stronę internetową'],         
            ['dance', 'tańczyć'],         
            ['entertainment', 'rozrywka'],         
            ['free time', 'wolny czas'],         
            ['go bowling', 'chodzić na kręgle, iść na kręgle'],         
            ['go clubbing', 'chodzić do klubu'],         
            ['go dancing', 'chodzić potańczyć'],         
            ['go for a walk', 'iść na spacer'],         
            ['go out for a meal', 'wyjść na posiłek'],         
            ['go swimming', 'iść popływać'],         
            ['go to an concert', 'iść na koncert'],         
            ['go to a disco', 'iść na dyskotekę'],         
            ['go to a party', 'iść na przyjęcie'],         
            ['go to the cinema', 'iść do kina'],         
            ['leisure activities', 'zajęcia w czasie wolnym'],     
            ['listen to music', 'słuchać muzyki'],     
            ['meet friends', 'spotykać się z przyjaciółmi'],     
            ['paint', 'malować'],     
            ['play computer games', 'grać w gry komputerowe'],     
            ['read comics', 'czytać komiksy'],     
            ['read magazines', 'czytać czasopisma'],     
            ['read newspapers', 'czytać gazety'],     
            ['take part in', 'brać udział w'],     
            ['take photographs', 'robić zdjęcia'],     
            ['watch a video', 'oglądać wideo'],                 
            ['watch a film', 'oglądać film'],                 
        ],
        'holidays_and_celebrations' => [
            ['anniversary', 'rocznica'],
            ['birthday cake', 'tort urodzinowy'],
            ['birthday present', 'prezent urodzinowy'],
            ['common', 'popularny, wspólny'],
            ['bride', 'panna młoda'],
            ['celebrate sb\'s birthday', 'obchodzić czyjeś urodziny'],
            ['celebration', 'uroczystość'],
            ['candle', 'świeczka'],
            ['christmas day', 'boże narodzenie'],
            ['christmas eve', 'wigilia bożego narodzenia'],
            ['christmas tree', 'choinka'],
            ['decoration', 'dekoracja'],
            ['easter', 'wielkanoc'],
            ['father\'s day', 'dzień ojca'],
            ['groom', 'pan młody'],
            ['meal', 'posiłek'],
            ['menu', 'karta dań'],
            ['mother\'s day', 'dzień matki'],
            ['new year\'s day', 'nowy rok'],
            ['new year\'s eve', 'sylwester'],
            ['parade', 'parada'],
            ['poster', 'plakat'],
            ['thanksgiving day', 'święto dziękczynienia'],
            ['three-course meal', 'posiłek złożony z trzech dań'],
            ['valentine\'s day', 'walentynki'],
            ['weeding', 'ślub'],
            ['weeding anniversary', 'rocznica ślubu'],
        ],
        'family_members' => [
            ['an only child', 'jedynak, jedynaczka'],     
            ['aunt', 'ciotka'],     
            ['brother', 'brat'],     
            ['child', 'dziecko'],     
            ['children', 'dzieci'],     
            ['cousin', 'kuzyn'],     
            ['daughter', 'córka'],     
            ['daughter-in-law', 'synowa'],     
            ['family member', 'członek rodziny'],     
            ['father', 'ojciec'],     
            ['father-in-law', 'teść'],     
            ['granddaughter', 'wnuczka'],     
            ['grandfather', 'dziadek'],     
            ['grandmother', 'babcia'],     
            ['great-granddaughter', 'prawnuczka'],     
            ['great-grandfather', 'pradziadek'],     
            ['great-grandmother', 'prababcia'],     
            ['great-grandson', 'prawnuczek'],     
            ['grandson', 'wnuk'],     
            ['husband', 'mąż'],     
            ['mother', 'matka'],     
            ['mother-in-law', 'teściowa'],     
            ['nethew', 'siostrzeniec, bratanek'],     
            ['niece', 'siostrzenica, bratanica'],     
            ['sister', 'siostra'],     
            ['son', 'syn'],     
            ['son-in-law', 'zięć'],     
            ['stepfather', 'ojczym'],     
            ['stepmother', 'macocha'],     
            ['twins', 'bliźniaki'],     
            ['uncle', 'wujek'],     
            ['wife', 'żona'],     
       
        ],
        'famili_and_social_relationships' => [
            ['boyfriend', 'chłopak'],
            ['girlfriend', 'dziwczyna'],
            ['split up with sb', 'rozstawać się z kimś'],
            ['bring sb up', 'wychowywać kogoś'],
            ['childhood', 'dzieciństwo'],
            ['fall out with sb', 'kłócić się z kimś'],
            ['family', 'rodzina'],
            ['friend', 'przyjaciel'],
            ['get along with sb', 'być z kimś w dobrych relacjach'],
            ['have an argument with sb', 'pokłócić się z kimś'],
            ['make up with sb', 'pogodzić się z kimś'],
            ['make friends with sb', 'zaprzyjaźnić się z kimś'],
            ['parents', 'rodzice'],
            ['social relationships', 'relacje społeczne'],
 
        ],
        'stages_of_life' => [
            ['adult', 'dorosły'],
            ['adulthood', 'dorosłość, wiek dorosły'],
            ['baby', 'niemowlę'],
            ['be born', 'urodzić się'],
            ['birth', 'narodziny'],
            ['death', 'śmierć'],
            ['die', 'umierać'],
            ['generation', 'pokolenie'],
            ['get divorced', 'rozwieść się'],
            ['get married to sb', 'poślubić kogoś'],
            ['go to university', 'iść na studia'],
            ['grow up', 'dorastać'],
            ['have a baby', 'urodzić dziecko, mieć dziecko'],
            ['give birth', 'urodzić'],
            ['leave home', 'opuszczać dom'],
            ['middle-aged', 'w średnim wieku'],
            ['old age', 'starość'],
            ['retire', 'iść na emeryturę'],
            ['stages of life', 'etapy życia'],
            ['start a job', 'rozpoczynać pracę'],
            ['start school', 'rozpoczynać naukę w szkole'],
            ['teenager', 'nastolatek'],
            ['youth', 'młodość'],
            ['thought', 'myśl'],
            ['pronunciation', 'wymowa'],
    
            
        ],


    ];

}
