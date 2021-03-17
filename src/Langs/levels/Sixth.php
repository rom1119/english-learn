<?php

namespace App\Langs\levels;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Sixth extends BaseLevel
{
    public $title = 'Podróżowanie i turystyka';
    public $desc = 'moduł szósty';
    public $slug = 'traveling-and-tourism';
    public $data = [
        'types_of_holiday' => [
            ['city break', 'przerwa w mieście, krótkie wakacje w mieście'],
            ['cruise', 'rejs wycieczkowy'],
            ['eco-holiday', 'wakacje ekologiczne'],
            ['holiday', 'wakacje'],
            ['activity holiday', 'wakacje ze zorganizowanymi zajęciami'],
            ['beach holiday', 'wakacje naplaży'],
            ['camping holiday', 'wakacje pod namiotem'],
            ['package holiday', 'wczasy zorganizowane'],
            ['safari', 'safari'],
        ],
        'accomodation' => [
            ['accomodation', 'zakwaterowanie'],
            ['bed and breakfast', 'pokoje gościnne ze śniadaniem'],
            ['campsite', 'pole kempingowe'],
            ['caravan', 'przyczepa kempingowa'],
            ['guest house', 'pensjonat'],
            ['self-catering apartment', 'nocleg z wyżywieniem '],
            ['tent', 'namiot'],
            ['youth hostel', 'schronisko młodzieżowe'],

        ],
        'holiday_activities' => [
            ['buy souvenirs', 'kupować pamiątki'],
            ['go backpacking', 'jechać na wakacje z plecakiem'],
            ['go camping', 'jechać pod namiot, jechać na kemping'],
            ['go kayaking', 'jechać na kajaki'],
            ['go sightseeing', 'zwiedzać'],
            ['go walking to the seaside', 'pójść na pieszą wycieczkę nad morze'],
            ['go walking to the mountains', 'pójść na pieszą wycieczkę w góry'],
            ['roam, travel', 'wędrować'],
            ['lie on the beach', 'leżeć na plaży'],
            ['sunbathe', 'opalać się'],
            ['take photos', 'robić zdjęcia'],
            ['visit tourist attractions', 'odwidzać atrakcje turystyczne'],
            ['watch the wildlife', 'oglądać dzikie zwierzęta'],
        
        ],
        'travel_and_transport' => [
            ['arrivals', 'przyjazdy, przyloty'],
            ['arrive at', 'przybywać do, przyjeżdżać do'],
            ['depart from', 'odjechać , odlecieć z'],
            ['departures', 'odjazdy, odloty'],
            ['fare', 'opłata za przejazd, cena biletu'],
            ['get on a train', 'wsiadać do pociągu'],
            ['get off a train', 'wysiadać z pociągu'],
            ['journey', 'podróż'],
            ['luggage', 'bagaż'],
            ['passenger', 'pasażer'],
            ['passport', 'paszport'],
            ['rucksack', 'plecak'],
            ['single ticket', 'bilet w jedną stronę'],
            ['return ticket', 'bilet powrotny'],
            ['ticket office', 'kasa biletowa'],
            ['timetable', 'rozkład jazdy'],
            ['tourist guide', 'przewodnik'],
            ['travel abroad', 'podróżować za kranicę'],
            ['travel across Poland', 'podróżować po polsce'],
            ['travel around the world', 'podróżować dookoła świata'],
            ['trip', 'wycieczka, krótka podróż'],
            ['train station', 'dworzec kolejowy'],
            ['bus station', 'dworzec autobusowy'],
            ['suitcase', 'walizka'],
            ['taxi rank', 'postój taksówek'],
            ['voyage', 'długa podróż morska lub kosmiczna'],
            ['waiting room', 'poczekalnia'],
            ['bike', 'rower'],
            ['boat', 'łódź'],
            ['ferry', 'prom'],
            ['go on foot', 'iść pieszo'],
            ['helicopter', 'helikopter'],
            ['hot air ballon', 'balon'],
            ['lorry, truck', 'ciężarówka'],
            ['means of transport', 'środki transportu'],
            ['motobike', 'motor'],
            ['ship', 'statek'],
            ['tram', 'tramwaj'],
            ['travel by bus', 'podróżować autobusem'],
            ['travel by car', 'podróżować samochodem'],
            ['travel by plane', 'podróżować samolotem'],
            ['travel by train', 'podróżować pociągiem'],
            ['underground', 'metro, pod ziemią'],
            ['yacht', 'jacht'],
            ['airlane', 'linia lotnicza'],
            ['airport', 'lotnisko'],
            ['boarding pass', 'karta pokładowa'],
            ['captain', 'kapitan'],
            ['economy class', 'klasa turystyczna'],
            ['fly', 'latać'],
            ['flight', 'lot'],
            ['hand luggage', 'bagaż podręczny'],
            ['land', 'wylądować'],
            ['pilot', 'pilot'],
            ['take off the plane', 'startować samolot'],
            ['buffet car', 'wagon restauracyjny'],
            ['sleeping car', 'wagon sypialny'],
            ['change trains', 'przesiadać się'],
            ['fast train', 'ekspres'],
            ['platform', 'peron'],
            ['tracks', 'tory'],
            ['coach', 'autokar'],
            ['drive a car', 'prowadzić samochód'],
            ['driver', 'kierowca'],
            ['have a flat tyre', 'złapać gumę'],
            ['hitchhike', 'jechać autostopem'],
            ['motorway', 'autostrada'],
            ['traffic', 'ruch'],
            ['traffic jam', 'korek uliczny'],
            ['behind', 'za'],
            ['cross the road', 'przejść przez ulicę'],
            ['go down a street', 'iść ulicą'],
            ['go past the cinema', 'iść obok kina'],
            ['go straight on', 'iść prosto'],
            ['go throught a park', 'iść przez park'],
            ['in front of', 'przed'],
            ['next to', 'obok'],
            ['on the left', 'po lewej'],
            ['on the right', 'po prawej'],
            ['traffic lights', 'światła uliczne'],
            ['turn left', 'skręcać w lewo'],
            ['turn right', 'skręcać w prawo'],        
        ],
        'holida_and_travel_problems' => [
            ['bad weather', 'zła pogoda'],
            ['break down', 'zepsuć się'],
            ['cancel a train', 'odwołać pociąg'],
            ['car crash', 'wypadek samochodowy'],
            ['train crash', 'wypadek kolejowy'],
            ['delayed', 'opóźniony'],
            ['emergency', 'awaria, krytyczna sytuacja'],
            ['fully booked', 'całkowicie zajęty, zarezerwowany'],
            ['lose your luggage', 'zgubić bagaż'],
            ['miss a train', 'spóźnić się na pociąg'],
            ['out of date, invalid', 'nieważny'],
            ['steal', 'kraść'],
            ['too expensive', 'za drogi'],
        
        ],
        'at_a_hotel' => [
            ['air-conditioning', 'klimatyzacja'],
            ['book a room', 'zarezerwować pokój'],
            ['check in', 'zameldować się w hotelu'],
            ['check out', 'wymeldować się z hotelu'],
            ['clean towels', 'czyste ręczniki'],
            ['en-suite bathroom', 'pokój połączony z łazienką'],
            ['five star hotel', 'hotel pięciogwiazdkowy'],
            ['guest house', 'pensjonat'],
            ['including breakfast', 'ze śniadaniem'],
            ['live entertainment', 'rozrywka na żywo'],
            ['lounge', 'hol'],
            ['reception', 'recepcja'],
            ['double room', 'pokój dwuosobowy'],
            ['single room', 'pokój jednoosobowy'],
            ['room service', 'obsługa pokojowa'],
            ['stay at a hotel', 'zatrzymać się w hotelu'],
            ['view', 'widok'],
        

        ],

        'tourism' => [
            ['advantage', 'zaleta'],
            ['area of natural beauty', 'park krajobrazowy'],
            ['crowded beaches', 'zatłoczone plaże'],
            ['meet people from diffrent culture', 'poznawać ludzi z różnych kultur'],
            ['disadvantage', 'wada'],
            ['disturb wildlife', 'przeszkadzać zwirzętom'],
            ['holiday resort', 'miejscowość wypoczynkowa, kurort'],
            ['leave litter', 'pozostawiać śmieci'],
            ['tourist', 'turysta'],
            ['tourist industry', 'przemysł turystyczny'],
            ['traffic', 'ruch drogowy'],
        

        ]

    ];

}
