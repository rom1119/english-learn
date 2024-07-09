<?php

namespace App\Langs\levels\SchoolBook;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Tenth extends BaseLevel
{
    public $title = 'Państwo  i społeczeństwo';
    public $desc = 'moduł dziesiąty';
    public $slug = 'nations-and-society';
    public $data = [
        'the_law' => [
            ['accusation', 'oskarżenie'],
            ['accuse sb of sth', 'oskarżać kogoś o coś'],
            ['appear in court', 'występować w sądzie'],
            ['arrest sb', 'aresztować kogoś'],
            ['barrister', 'adwokat'],
            ['be against the law', 'być niezgodnym z prawem'],
            ['be charged with a crime', 'być oskarżonym o przestępstwo'],
            ['break the law', 'złamać prawo'],
            ['commit a crime', 'popełniać przestępstwo'],
            ['court', 'sąd'],
            ['courtroom', 'sala sądowa'],
            ['criminal', 'przestępca'],
            ['defend sb in court', 'bronić kogoś w sądzie'],
            ['give evidence', 'zeznawać'],
            ['guilty', 'winny'],
            ['illegal', 'nielegalny, bezprawny'],
            ['innocent, not guilty', 'niewinny'],
            ['investigate a crime', 'prowadzić dochodzenie'],
            ['judge', 'sędzia'],
            ['jury', 'ława przysięgłych'],
            ['law', 'prawo'],
            ['lawyer', 'prawnik'],
            ['legal', 'legalny'],
            ['police officer', 'policjant'],
            ['prosecute sb for sth', 'ścigać kogoś sądownie za coś'],
            ['the accused', 'oskarżony'],
            ['the rules of the road', 'kodeks drogowy'],
            ['the scene of a crime', 'miejsce zbrodni'],
            ['trail', 'proces'],
            ['witness', 'świadek'],
                     

        ],
        'punishment' => [
            ['capital punishment, death penalty', 'kara śmierci'],
            ['community service', 'praca społeczna'],
            ['suspended', 'zawieszony'],
            ['get a life sentence', 'dostać dożywocie'],
            ['get a suspended sentence', 'dostać wyrok w zawieszeniu'],
            ['pay a fine', 'zapłacić grzywnę'],
            ['punish sb for sth', 'karać kogoś za coś'],
            ['punishment', 'kara'],
            ['sentence someone to prison', 'skazać kogoś na więzienie'],
            ['sentence', 'wyrok'],
            

        ],
        'crimes_and_criminals' => [
            ['attack sb', 'zaatakować kogoś'],
            ['bank robber', 'bandyta napadający na banki'],
            ['bank robbery', 'napad na bank'],
            ['burglar', 'włamywacz'],
            ['burglary', 'włamanie'],
            ['burgle', 'włamywać się'],
            ['drug dealer', 'handlarz narkotykami'],
            ['fraud', 'oszustwo, oszust'],
            ['kidnap', 'porywać'],
            ['kidnapper', 'porywacz'],
            ['kidnapping', 'porwanie'],
            ['mug sb', 'napadać na kogoś'],
            ['mugger', 'bandyta uliczny'],
            ['mugging', 'napad uliczny'],
            ['murder', 'mordować, morderstwo'],
            ['murderer', 'morderca'],
            ['pick pocket', 'kieszonkowiec'],
            ['pick pocketing', 'kradzież kieszonkowa'],
            ['rob a bank', 'obrabować bank'],
            ['rape', 'zgwałcić'],
            ['rapist', 'gwałciciel'],
            ['shoplift', 'kraść w sklepie'],
            ['shoplifter', 'złodziej sklepowy'],
            ['shoplifting', 'kradzież w sklepie'],
            ['smuggle', 'przemycać'],
            ['smuggler', 'przemytnik'],
            ['smuggling', 'przemyt'],
            ['steal', 'kraść'],
            ['terrorist', 'terrorysta'],
            ['terrorism', 'terroryzm'],
            ['theft', 'kradzież'],
            ['thief', 'złodziej'],
            ['violence', 'przemoc'],
            
        
        ],
        'state' => [
            ['border', 'granica'],
            ['citizen', 'obywatel'],
            ['citizenship', 'obywatelstwo'],
            ['country', 'kraj'],
            ['homeland', 'ojczyzna'],
            ['nation', 'naród'],
            ['nationality', 'narodowość'],
            ['national anthem', 'hymn narodowy'],
            ['national flag', 'flaga narodowa'],
            ['population', 'ludność'],
            ['religion', 'religia'],
            ['state', 'państwo'],
                 
        ],
        'the_vote' => [
            ['ballot paper', 'karta do głosowania'],
            ['campaign', 'kampania'],
            ['candidate', 'kandydat'],
            ['election', 'wybory'],
            ['general election', 'powszechne wybory'],
            ['local election', 'lokalne wybory'],
            ['hold the election', 'organizować wybory'],
            ['lose the election', 'przegrać wybory'],
            ['win the election', 'wygrać wybory'],
            ['speech', 'przemównienie'],
            ['give a speech', 'wygłosić przemównienie'],
            ['vote for sb', 'głosować na kogoś'],
            ['voter', 'wyborca'],
           
        ],
        'politics' => [
            ['ambassador', 'ambasador'],
            ['conservative', 'konserwatywny'],
            ['constitution', 'konstytucja'],
            ['democracy', 'demokracja'],
            ['democratic', 'demokratyczny'],
            ['demonstrate', 'demonstrować'],
            ['diplomat', 'dyplomata'],
            ['embassy', 'ambasada'],
            ['head of state', 'głowa państwa'],
            ['government', 'rząd'],
            ['headquarters', 'siedziba'],
            ['king', 'król'],
            ['left-wing', 'lewicowy'],
            ['liberal', 'liberalny'],
            ['local government', 'samorząd'],
            ['member of parliament', 'poseł'],
            ['minister', 'minister'],
            ['military alliance', 'sojusz wojskowy'],
            ['monarchy', 'monarchia'],
            ['opposition', 'opozycja'],
            ['parliament', 'parlament'],
            ['party leader', 'lider partii'],
            ['policy on sth', 'polityka dotycząca czegoś'],
            ['political', 'polityczny'],
            ['political party', 'partia polityczna'],
            ['politician', 'polityk'],
            ['politics', 'polityka'],
            ['president', 'prezydent'],
            ['prime minister', 'premier'],
            ['queen', 'królowa'],
            ['royal family', 'rodzina królewska'],
            ['reform', 'reforma'],
            ['right-wing', 'prawicowy'],
            ['town council, city council', 'rada miejska'],
            ['town councillor', 'radny'],
        ],
        'international_organisations' => [
            ['european union', 'unia europejska'],
            ['north atlantic treaty organization', 'pakt północnoatlantycki'],
            ['the united nations', 'organizacja narodów zjednoczonych'],
            ['world health organisation', 'światowa organizacja zdrowia'],               

        ],

        'mulicultural_society' => [
            ['community', 'społeczność'],
            ['discrimination', 'dyskryminacja'],
            ['diversity', 'różnorodność'],
            ['emigrate', 'emigrować'],
            ['ethnic minority', 'mniejszość etniczna'],
            ['foreign', 'obcy, z innego kraju'],
            ['foreigner', 'obcokrajowiec'],
            ['immigrant', 'imigrant'],
            ['multiculturalism', 'wielokulturowość'],
            ['multicultural', 'wielokulturowy'],
            ['refugee', 'uchodźca'],
            ['society', 'społeczeństwo'],
        ],

        'charities' => [
            ['aid', 'pomoc'],
            ['charity', 'organizacja charytatywna'],
            ['do voluntary work', 'pracować jako wolontariusz'],
            ['donate money to charity', 'oddawać pieniądze na cele dobroczynne'],
            ['help people in poverty', 'pomagać ubogim'],
            ['help people in trouble', 'pomagać ludziom z problemami'],
            ['look after the sick', 'opiekować się chorymi'],
            ['organisation', 'organizacja'],
            ['raise money for charity', 'zbierać pieniądze na cele dobroczynne'],
            ['relief worker', 'pracownik pomocy'],
            ['volunteer', 'wolontariusz'],

        ],
        'charity_organisations' => [
            ['polish humanitarian organisation', 'polska akcja humanitarna'],
            ['the great orchestra of christmas charity', 'wielka orkiestra świątecznej pomocy'],
            ['the red cross', 'czerwony krzyż'],
            ['world wildlife fund', 'międzynarodowa organizacja ekologiczna'],
            

        ],

    ];

}
