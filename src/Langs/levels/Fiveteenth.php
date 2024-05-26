<?php

namespace App\Langs\levels;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Fiveteenth extends BaseLevel
{

    public function isBasicQuestion(): bool {

        return false;
    }

    public $title = 'Lista czasowników nieregularnych';
    public $desc = 'moduł piętnasty';
    public $slug = 'list-of-irregular-verbs';
    public $data = [
        'verbs_irregular' => [
            'be' => [
                'infinitive'=> 'be',
                'past_simple'=> 'was, were',
                'past_participle'=> 'been',
                'polish'=> 'być',
            ],
            'beat' => [
                'infinitive'=> 'beat',
                'past_simple'=> 'beat',
                'past_participle'=> 'beaten',
                'polish'=> 'bić, uderzać',
            ],
            'become' => [
                'infinitive'=> 'become',
                'past_simple'=> 'became',
                'past_participle'=> 'become',
                'polish'=> 'stawać się',
            ],
            'begin' => [
                'infinitive'=> 'begin',
                'past_simple'=> 'began',
                'past_participle'=> 'begun',
                'polish'=> 'zaczynać',
            ],
            'bid' => [
                'infinitive'=> 'bid',
                'past_simple'=> 'bid, bade',
                'past_participle'=> 'bid, bidden',
                'polish'=> ' licytować',
            ],
            
            'bite' => [
                'infinitive'=> 'bite',
                'past_simple'=> 'bit',
                'past_participle'=> 'bitten',
                'polish'=> 'gryźć',
            ],
            
            'blow' => [
                'infinitive'=> 'blow',
                'past_simple'=> 'blew',
                'past_participle'=> 'blown',
                'polish'=> 'wiać, dmuchać',
            ],
            'break' => [
                'infinitive'=> 'break',
                'past_simple'=> 'broke',
                'past_participle'=> 'broken',
                'polish'=> 'łamać, rozbijać',
            ],
            'bring' => [
                'infinitive'=> 'bring',
                'past_simple'=> 'brought',
                'past_participle'=> 'brought',
                'polish'=> 'przynosić',
            ],
            'build' => [
                'infinitive'=> 'build',
                'past_simple'=> 'built',
                'past_participle'=> 'built',
                'polish'=> 'budować',
            ],
            'burn' => [
                'infinitive'=> 'burn',
                'past_simple'=> 'burnt, burned',
                'past_participle'=> 'burnt, burned',
                'polish'=> 'palić',
            ],
            'buy' => [
                'infinitive'=> 'buy',
                'past_simple'=> 'bought',
                'past_participle'=> 'bought',
                'polish'=> 'kupować',
            ],
            'can' => [
                'infinitive'=> 'can',
                'past_simple'=> 'could',
                'past_participle'=> '',
                'polish'=> 'móc, potrafić',
            ],
            'catch' => [
                'infinitive'=> 'catch',
                'past_simple'=> 'caught',
                'past_participle'=> 'caught',
                'polish'=> 'łapać, chwytać',
            ],
            'choose' => [
                'infinitive'=> 'choose',
                'past_simple'=> 'chose',
                'past_participle'=> 'chosen',
                'polish'=> 'wybierać',
            ],
            'choose' => [
                'infinitive'=> 'choose',
                'past_simple'=> 'chose',
                'past_participle'=> 'chosen',
                'polish'=> 'wybierać',
            ],
            'come' => [
                'infinitive'=> 'come',
                'past_simple'=> 'came',
                'past_participle'=> 'come',
                'polish'=> 'przychodzić, przyjeżdżać',
            ],
            'cost' => [
                'infinitive'=> 'cost',
                'past_simple'=> 'cost',
                'past_participle'=> 'cost',
                'polish'=> 'kosztować',
            ],
            'cut' => [
                'infinitive'=> 'cut',
                'past_simple'=> 'cut',
                'past_participle'=> 'cut',
                'polish'=> 'ciąć, kroićm kaleczyć',
            ],
            'dig' => [
                'infinitive'=> 'dig',
                'past_simple'=> 'dug',
                'past_participle'=> 'dug',
                'polish'=> 'kopać',
            ],
            'do' => [
                'infinitive'=> 'do',
                'past_simple'=> 'did',
                'past_participle'=> 'done',
                'polish'=> 'robić',
            ],
            'draw' => [
                'infinitive'=> 'draw',
                'past_simple'=> 'drew',
                'past_participle'=> 'drawn',
                'polish'=> 'rysować',
            ],
            'dream' => [
                'infinitive'=> 'dream',
                'past_simple'=> 'dreamt, dreamed',
                'past_participle'=> 'dreamt, dreamed',
                'polish'=> 'marzyć, śnić',
            ],
            'drink' => [
                'infinitive'=> 'drink',
                'past_simple'=> 'drank',
                'past_participle'=> 'drunk',
                'polish'=> 'pić',
            ],
            'drive' => [
                'infinitive'=> 'drive',
                'past_simple'=> 'drove',
                'past_participle'=> 'driven',
                'polish'=> 'kierować, jeździć samochodem, wozić',
            ],
            'eat' => [
                'infinitive'=> 'eat',
                'past_simple'=> 'ate',
                'past_participle'=> 'eaten',
                'polish'=> 'jeść',
            ],
            
            'fall' => [
                'infinitive'=> 'fall',
                'past_simple'=> 'fell',
                'past_participle'=> 'fallen',
                'polish'=> 'padać, przewracać się',
            ],
            'feed' => [
                'infinitive'=> 'feed',
                'past_simple'=> 'fed',
                'past_participle'=> 'fed',
                'polish'=> 'karmić',
            ],
            'feel' => [
                'infinitive'=> 'feel',
                'past_simple'=> 'felt',
                'past_participle'=> 'felt',
                'polish'=> 'czuć',
            ],
            'fight' => [
                'infinitive'=> 'fight',
                'past_simple'=> 'fought',
                'past_participle'=> 'fought',
                'polish'=> 'walczyć, bić się',
            ],
            'find' => [
                'infinitive'=> 'find',
                'past_simple'=> 'found',
                'past_participle'=> 'found',
                'polish'=> 'znajdować, odnajdywać',
            ],
            'fly' => [
                'infinitive'=> 'fly',
                'past_simple'=> 'flew',
                'past_participle'=> 'flown',
                'polish'=> 'latać',
            ],
            'forget' => [
                'infinitive'=> 'forget',
                'past_simple'=> 'forgot',
                'past_participle'=> 'forgotten',
                'polish'=> 'zapominać',
            ],
            'get' => [
                'infinitive'=> 'get',
                'past_simple'=> 'got',
                'past_participle'=> 'got',
                'polish'=> 'dostawać',
            ],
            'get_up' => [
                'infinitive'=> 'get up',
                'past_simple'=> 'got up',
                'past_participle'=> 'got up',
                'polish'=> 'wstawać',
            ],
            'give' => [
                'infinitive'=> 'give',
                'past_simple'=> 'gave',
                'past_participle'=> 'given',
                'polish'=> 'dawać',
            ],
            'go' => [
                'infinitive'=> 'go',
                'past_simple'=> 'went',
                'past_participle'=> 'gone',
                'polish'=> 'iść, jechać',
            ],
            'grow' => [
                'infinitive'=> 'grow',
                'past_simple'=> 'grew',
                'past_participle'=> 'grown',
                'polish'=> 'rosnąć, hodować',
            ],
            'hang' => [
                'infinitive'=> 'hang',
                'past_simple'=> 'hung',
                'past_participle'=> 'hung',
                'polish'=> 'wieszać',
            ],
            'have' => [
                'infinitive'=> 'have',
                'past_simple'=> 'had',
                'past_participle'=> 'had',
                'polish'=> 'mieć',
            ],
            'hear' => [
                'infinitive'=> 'hear',
                'past_simple'=> 'heard',
                'past_participle'=> 'heard',
                'polish'=> 'słyszeć',
            ],
            'hide' => [
                'infinitive'=> 'hide',
                'past_simple'=> 'hid',
                'past_participle'=> 'hidden',
                'polish'=> 'chować',
            ],
            'hit' => [
                'infinitive'=> 'hit',
                'past_simple'=> 'hit',
                'past_participle'=> 'hit',
                'polish'=> 'uderzać',
            ],
            'hold' => [
                'infinitive'=> 'hold',
                'past_simple'=> 'held',
                'past_participle'=> 'held',
                'polish'=> 'trzymać',
            ],
            'hurt' => [
                'infinitive'=> 'hurt',
                'past_simple'=> 'hurt',
                'past_participle'=> 'hurt',
                'polish'=> 'boleć, ranić',
            ],
            'keep' => [
                'infinitive'=> 'keep',
                'past_simple'=> 'kept',
                'past_participle'=> 'kept',
                'polish'=> 'trzymać, zachować , dotrzymać',
            ],
            'know' => [
                'infinitive'=> 'know',
                'past_simple'=> 'knew',
                'past_participle'=> 'known',
                'polish'=> 'wiedzieć, znać',
            ],
            'lay' => [
                'infinitive'=> 'lay',
                'past_simple'=> 'laid',
                'past_participle'=> 'laid',
                'polish'=> 'kłaść, położyć',
            ],
            'learn' => [
                'infinitive'=> 'learn',
                'past_simple'=> 'learnt, learned',
                'past_participle'=> 'learnt, learned',
                'polish'=> 'uczyć się, dowiedzieć',
            ],
            'leave' => [
                'infinitive'=> 'leave',
                'past_simple'=> 'left',
                'past_participle'=> 'left',
                'polish'=> 'wychodzić, wyjeżdżać',
            ],
            'lend' => [
                'infinitive'=> 'lend',
                'past_simple'=> 'lent',
                'past_participle'=> 'lent',
                'polish'=> 'pożyczać',
            ],
            'let' => [
                'infinitive'=> 'let',
                'past_simple'=> 'let',
                'past_participle'=> 'let',
                'polish'=> 'pozwalać',
            ],
            'lie_down' => [
                'infinitive'=> 'lie down',
                'past_simple'=> 'lay down',
                'past_participle'=> 'lain down',
                'polish'=> 'położyć się',
            ],
            'light' => [
                'infinitive'=> 'light',
                'past_simple'=> 'lit',
                'past_participle'=> 'lit',
                'polish'=> 'oświetlać',
            ],
            'lose' => [
                'infinitive'=> 'lose',
                'past_simple'=> 'lost',
                'past_participle'=> 'lost',
                'polish'=> 'tracić, gubić',
            ],
            'make' => [
                'infinitive'=> 'make',
                'past_simple'=> 'made',
                'past_participle'=> 'made',
                'polish'=> 'robić',
            ],
            'mean' => [
                'infinitive'=> 'mean',
                'past_simple'=> 'meant',
                'past_participle'=> 'met',
                'polish'=> 'znaczyć, mieć na myśli',
            ],
            'meet' => [
                'infinitive'=> 'meet',
                'past_simple'=> 'met',
                'past_participle'=> 'met',
                'polish'=> 'spotykać',
            ],
            'pay' => [
                'infinitive'=> 'pay',
                'past_simple'=> 'paid',
                'past_participle'=> 'paid',
                'polish'=> 'płacić',
            ],
            'put' => [
                'infinitive'=> 'put',
                'past_simple'=> 'put',
                'past_participle'=> 'put',
                'polish'=> 'kłaść, położyć',
            ],
            'read' => [
                'infinitive'=> 'read',
                'past_simple'=> 'read',
                'past_participle'=> 'read',
                'polish'=> 'czytać',
            ],
            'ride' => [
                'infinitive'=> 'ride',
                'past_simple'=> 'rode',
                'past_participle'=> 'ridden',
                'polish'=> 'jeździć',
            ],
            'ring' => [
                'infinitive'=> 'ring',
                'past_simple'=> 'rang',
                'past_participle'=> 'rung',
                'polish'=> 'dzwonić, telefonować',
            ],
            'rise' => [
                'infinitive'=> 'rise',
                'past_simple'=> 'rose',
                'past_participle'=> 'rosen',
                'polish'=> 'rosnąć, wstawać, podnieść się ',
            ],
            'run' => [
                'infinitive'=> 'run',
                'past_simple'=> 'ran',
                'past_participle'=> 'run',
                'polish'=> 'biegać',
            ],
            'say' => [
                'infinitive'=> 'say',
                'past_simple'=> 'said',
                'past_participle'=> 'said',
                'polish'=> 'mówić, powiedzieć',
            ],
            'see' => [
                'infinitive'=> 'see',
                'past_simple'=> 'saw',
                'past_participle'=> 'seen',
                'polish'=> 'widzieć',
            ],
            'sell' => [
                'infinitive'=> 'sell',
                'past_simple'=> 'sold',
                'past_participle'=> 'sold',
                'polish'=> 'sprzedawać',
            ],
            'send' => [
                'infinitive'=> 'send',
                'past_simple'=> 'sent',
                'past_participle'=> 'sent',
                'polish'=> 'wysyłać',
            ],
            'set' => [
                'infinitive'=> 'set',
                'past_simple'=> 'set',
                'past_participle'=> 'set',
                'polish'=> 'nastawić, umieszczać',
            ],
            'shine' => [
                'infinitive'=> 'shine',
                'past_simple'=> 'shone',
                'past_participle'=> 'shone',
                'polish'=> 'świecić, błyszczeć',
            ],
            'shoot' => [
                'infinitive'=> 'shoot',
                'past_simple'=> 'shot',
                'past_participle'=> 'shot',
                'polish'=> 'strzelać',
            ],
            'show' => [
                'infinitive'=> 'show',
                'past_simple'=> 'showed',
                'past_participle'=> 'shown',
                'polish'=> 'pokazywać',
            ],
            'shut' => [
                'infinitive'=> 'shut',
                'past_simple'=> 'shut',
                'past_participle'=> 'shut',
                'polish'=> 'zamykać',
            ],
            'sing' => [
                'infinitive'=> 'sing',
                'past_simple'=> 'sang',
                'past_participle'=> 'sung',
                'polish'=> 'śpiewać',
            ],
            'sink' => [
                'infinitive'=> 'sink',
                'past_simple'=> 'sank',
                'past_participle'=> 'sunk',
                'polish'=> 'tonąć, topić się',
            ],
            'sit' => [
                'infinitive'=> 'sit',
                'past_simple'=> 'sat',
                'past_participle'=> 'sat',
                'polish'=> 'siedzieć',
            ],
            'sleep' => [
                'infinitive'=> 'sleep',
                'past_simple'=> 'slept',
                'past_participle'=> 'slept',
                'polish'=> 'spać',
            ],
            'smell' => [
                'infinitive'=> 'smell',
                'past_simple'=> 'smelt, smelled',
                'past_participle'=> 'smelt, smelled',
                'polish'=> 'pachnieć, wąchać',
            ],
            'speak' => [
                'infinitive'=> 'speak',
                'past_simple'=> 'spoke',
                'past_participle'=> 'spoken',
                'polish'=> 'mówić, rozmawiać',
            ],
            'spell' => [
                'infinitive'=> 'spell',
                'past_simple'=> 'spelt, spelled',
                'past_participle'=> 'spelt, spelled',
                'polish'=> 'literować, oznaczać',
            ],
            'spend' => [
                'infinitive'=> 'spend',
                'past_simple'=> 'spent',
                'past_participle'=> 'spent',
                'polish'=> 'spędzać, wydawać',
            ],
            'split_up' => [
                'infinitive'=> 'split up',
                'past_simple'=> 'split up',
                'past_participle'=> 'split up',
                'polish'=> 'zerwać, rozstawać się',
            ],
            'stand' => [
                'infinitive'=> 'stand',
                'past_simple'=> 'stood',
                'past_participle'=> 'stood',
                'polish'=> 'stać',
            ],
            'steal' => [
                'infinitive'=> 'steal',
                'past_simple'=> 'stole',
                'past_participle'=> 'stolen',
                'polish'=> 'kraść',
            ],
            'strike' => [
                'infinitive'=> 'strike',
                'past_simple'=> 'struck',
                'past_participle'=> 'struck',
                'polish'=> 'uderzać, uderzyć',
            ],
            'sweep' => [
                'infinitive'=> 'sweep',
                'past_simple'=> 'swept',
                'past_participle'=> 'swept',
                'polish'=> 'zamiatać, czyścić',
            ],
            'swim' => [
                'infinitive'=> 'swim',
                'past_simple'=> 'swam',
                'past_participle'=> 'swum',
                'polish'=> 'pływać',
            ],
            'take' => [
                'infinitive'=> 'take',
                'past_simple'=> 'took',
                'past_participle'=> 'taken',
                'polish'=> 'brać, wziąść',
            ],
            'teach' => [
                'infinitive'=> 'teach',
                'past_simple'=> 'taught',
                'past_participle'=> 'taught',
                'polish'=> 'uczyć',
            ],
            'tell' => [
                'infinitive'=> 'tell',
                'past_simple'=> 'told',
                'past_participle'=> 'told',
                'polish'=> 'mówić, powiedzieć',
            ],
            'think' => [
                'infinitive'=> 'think',
                'past_simple'=> 'thought',
                'past_participle'=> 'thought',
                'polish'=> 'myśleć, sądzić',
            ],
            'throw' => [
                'infinitive'=> 'throw',
                'past_simple'=> 'threw',
                'past_participle'=> 'thrown',
                'polish'=> 'rzucać',
            ],
            'understand' => [
                'infinitive'=> 'understand',
                'past_simple'=> 'understood',
                'past_participle'=> 'understood',
                'polish'=> 'rozumieć',
            ],
            'wake_up' => [
                'infinitive'=> 'wake up',
                'past_simple'=> 'woke up',
                'past_participle'=> 'woken up',
                'polish'=> 'budzić się',
            ],
            'wear' => [
                'infinitive'=> 'wear',
                'past_simple'=> 'wore',
                'past_participle'=> 'worn',
                'polish'=> 'nosić, ubierać się',
            ],
            'win' => [
                'infinitive'=> 'win',
                'past_simple'=> 'won',
                'past_participle'=> 'won',
                'polish'=> 'wygrywać',
            ],
            'write' => [
                'infinitive'=> 'write',
                'past_simple'=> 'wrote',
                'past_participle'=> 'written',
                'polish'=> 'pisać',
            ],
        ]
    ];

}
