<?php

namespace App\Langs\levels\SchoolBook;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Second extends BaseLevel
{
    public $title = 'Sport';
    public $desc = 'moduł drugi';
    public $slug = 'sport';
    public $data = [
        'sports' => [
            ['athletics', 'lekkoatletyka'],
            ['baseball', 'baseball'],
            ['basketball', 'koszykówka'],
            ['boxing', 'boks'],
            ['cricket', 'krykiet'],
            ['cycling', 'kolarstwo'],
            ['diving', 'nurkowanie'],
            ['football', 'piłka nożna'],
            ['golf', 'golf'],
            ['gymnastics', 'gimnastyka'],
            ['hockey', 'hokej'],
            ['horse racing', 'wyścigi konne'],
            ['judo', 'dżudo'],
            ['jump', 'skok'],
            ['high jump', 'skok wzwyż'],
            ['long jump', 'skok w dal'],
            ['karate', 'karate'],
            ['kayaking', 'kajakarstwo'],
            ['marathon', 'maraton'],
            ['motor racing', 'wyścigi samochodowe'],
            ['roller skating', 'jazda na wrotkach'],
            ['sailing', 'żeglarstwo'],
            ['skating', 'łyżwiarstwo'],
            ['figure skating', 'łyżwiarstwo figurowe'],
            ['speed skating', 'łyżwiarstwo szybkie'],
            ['skateboarding', 'jazda na deskorolce'],
            ['skiing', 'narciarstwo'],
            ['ski jumping', 'skoki narciarskie'],
            ['snowboarding', 'snowbording'],
            ['sports', 'sporty'],
            ['individual sports', 'sporty indywidualne'],
            ['indoor sports', 'sporty halowe'],
            ['outdoor sports', 'sporty uprawiane na otwartym powietrzu'],
            ['sprint', 'sprint'],
            ['swimming', 'pływanie'],
            ['team sports', 'sporty zespołowe'],
            ['tennis', 'tenis'],
            ['table tennis', 'tenis stołowy'],
            ['volleyball', 'siatkówka'],
            ['water sports', 'sporty wodne'],
            ['weightlifting', 'podnoszenie ciężarów'],
            ['windsurfing', 'windsurfing'],
            ['wrestling', 'zapasy'],
            

        ],
        'extreme_sports' => [
            ['bungee jumping', 'skoki na bungee'],
            ['caving', 'chodzenie po jaskiniach'],
            ['challenge', 'wyzwanie'],
            ['extreme sports', 'sporty ekstremalne'],
            ['paragliding', 'paralotniarstwo'],
            ['rock climbing', 'wspinaczka'],
            ['skydiving', 'skoki powietrzne'],
            ['white water rafting', 'spływ górski'],

        ],
        'sports_equipment' => [
            ['ball', 'piłka'],
            ['baseball bat', 'kij basebollowy'],
            ['gloves', 'rękawice'],
            ['boxing gloves', 'rękawice bokserskie'],
            ['football boots', 'korki'],
            ['goal', 'bramka'],
            ['goggles', 'gogle'],
            ['golf club', 'kij golfowy'],
            ['helmet', 'kask'],
            ['hockey stick', 'kij hokejowy'],
            ['ice skates', 'łyżwy'],
            ['mask', 'maska'],
            ['net', 'siatka'],
            ['parachute', 'spadochron'],
            ['racket', 'rakieta'],
            ['sports equipment', 'sprzęt sportowy'],
            ['sports kit', 'strój sportowy'],
            ['swimming costume', 'kostium kąpielowy'],
            ['table tennis bat', 'rakietka do tenisa stołowego'],
            ['tracksuit', 'dres'],
            ['trainers', 'buty sportowe'],
            ['trunks', 'kąpielówki'],
            
            
        ],
        'palces' => [
            ['boxing ring', 'ring boxerski'],
            ['court', 'kort do tenisa, boisko do koszykówki, boisko do siatkówki'],
            ['football pitch', 'boisko, murawa'],
            ['gym', 'sala gimnastyczna, siłownia'],
            ['ice rink, skating rink', 'lodowisko'],
            ['ski slope', 'stok narciarski'],
            ['dry ski slope', 'sztuczny stok narciarski'],
            ['stadium, ground', 'stadion'],
            ['swimming pool', 'basen'],
            ['track', 'bieżnia'],
        ],
        'people' => [
            ['amateur', 'amator'],
            ['athlete', 'sportowiec, lekkoatleta'],
            ['basketball player', 'koszykarz'],
            ['boxer', 'bokser'],
            ['champion', 'mistrz'],
            ['coach', 'trener'],
            ['contestant, competitor', 'zawodnik'],
            ['cyclist', 'kolarz'],
            ['driver', 'kierowca'],
            ['football player', 'piłkarz'],
            ['goalkeeper', 'bramkarz'],
            ['gymnast', 'gimnastyk'],
            ['hockey player', 'hokeista'],
            ['instructor', 'instruktor'],
            ['jockey', 'dżokej'],
            ['player', 'gracz'],
            ['proffesional', 'zawodowiec'],
            ['racing driver', 'kierowca wyścigowy'],
            ['referee', 'sędzia sportowy'],
            ['skater', 'łyżwiarz'],
            ['skier', 'narciarz'],
            ['spectator', 'widz'],
            ['supporter, fan', 'kibic'],
            ['swimmer', 'pływak'],
            ['tennis player', 'tenisista'],
            ['weightlifter', 'ciężarowiec'],
            
       
        ],
        'adjectives_and_prepositions' => [
            ['adjectives and prepositions', 'przymiotniki i przyimki'],
            ['be bored with sth', 'być czymś znudzonym'],
            ['be disappointed with sth', 'być czymś rozczarowanym'],
            ['be crazy about sth', 'mieć bzika na punkcie czegoś, szaleć za czymś'],
            ['be fond of sb', 'lubić kogoś'],
            ['be interested in sth', 'interesować się czymś'], 
            ['be keen on sth', 'lubić coś'],
            ['be mad about sb', 'wściekać się na kogoś, szaleć za kimś'],
            ['be scared of sth', 'bać się czegoś'],

        ],
        'sports_events' => [
            ['championships', 'mistrzostwa'],
            ['world championships', 'mistrzostwa świata'],
            ['competition', 'zawody'],
            ['cup', 'puchar'],
            ['the world cup ', 'puchar świata'],
            ['draw', 'remis'],
            ['football match', 'mecz piłki nożnej'],
            ['game', 'gra, mecz'],
            ['gold medal', 'złoty medal'],
            ['silver medal', 'srebrny medal'],
            ['bronze medal', 'brązowy medal'],
            ['practise', 'trening'],
            ['football practise', 'trening piłkarski'],
            ['price', 'nagroda'],
            ['race', 'wyścig, bieg'],
            ['semi-final', 'półfinał'],
            ['sporting event', 'wydarzenie sportowe'],
            ['the olimpic games', 'olimpiada'],
            ['team', 'drużyna'],
            ['tournament', 'turniej'],
            ['trophy', 'trofeum'],
        
            
        ],
        'verbs' => [
            ['verbs', 'czasowniki'],
            ['ball', 'piłka'],
            ['hit a ball', 'uderzać piłkę'],
            ['kick a ball', 'kopać piłkę'],
            ['throw a ball', 'rzucać piłkę'],
            ['be held', 'odbywać się, być trzymanym'],
            ['beat', 'pokonać, bić'],
            ['do a sport', 'uprawiać sport'],
            ['do a sport athletics', 'uprawiać lekkoatletykę'],
            ['do a sport gimnastics', 'uprawiać gimnastykę'],
            ['do a sport karate', 'uprawiać karate'],
            ['give sb a yellow card', 'dać komuś żółtą kartkę'],
            ['go cycling', 'uprawiać jazdę na rowerze'],
            ['go sailing', 'uprawiać żeglarstwo'],
            ['go swimming', 'uprawiać pływanie'],
            ['go weightlifting', 'uprawiać podnoszenie ciężarów'],
            ['lose a match', 'przegrać mecz'],
            ['lose a race', 'przegrać wyścig'],
            ['break a record', 'pobić rekord'],
            ['set a record', 'ustanowić rekord'],
            ['run', 'biegać'],
            ['save a goal', 'obronić bramkę'],
            ['score a goal', 'zdobyć bramkę'],
            ['shoot', 'strzelać'],
            ['take part in', 'uczestniczyć w'],
            ['take place', 'odbywać się'],
            ['train', 'trenować'],
            ['win a race', 'wygrać wyścig'],
            ['win a competition', 'wygrać zawody'],
            
         
        ],

    ];

}
