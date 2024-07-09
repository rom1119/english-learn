<?php

namespace App\Langs\levels\SchoolBook;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Seventh extends BaseLevel
{
    public $title = 'Szkoła';
    public $desc = 'moduł siódmy';
    public $slug = 'school';
    public $data = [
        'school_subjects' => [
            ['art', 'plastyka'],
            ['biology', 'biologia'],
            ['chemistry', 'chemia'],
            ['english', 'angielski'],
            ['foreign languages', 'języki obce'],
            ['geography', 'geografia'],
            ['history', 'historia'],
            ['information technology', 'informatyka'],
            ['maths', 'matematyka'],
            ['music', 'muzyka'],
            ['physical education', 'wychowanie fizyczne'],
            ['physics', 'fizyka'],
            ['religious education', 'religia'],
            ['sciences', 'przedmioty ścisłe'],
            ['subject', 'przedmiot'],

        ],
        'types_of_schools' => [
            ['academy', 'szkoła, akademia'],
            ['coeducational', 'koedukacyjna'],
            ['college', 'szkoła pomaturalna'],
            ['fee-paying school', 'szkoła płatna'],
            ['high school, secondary school', 'szkoła średnia'],
            ['language school', 'szkoła językowa'],
            ['nursery', 'przedszkole'],
            ['primary', 'podstawowa'],
            ['private school, independent school', 'szkoła prywatna'],
            ['single-sex school', 'tylko dla chłopców lub dziwcząt '],
            ['state school, public school', 'szkoła państwowa'],
            ['university', 'universytet'],
            ['vocational training', 'szkolenie zawodowe'],


        ],
        'people_in_a_school' => [
            ['classmate', 'kolega z klasy'],
            ['head teacher', 'dyrektor szkoły'],
            ['pupil, student', 'uczeń'],
            ['teacher', 'nauczyciel'],
        
        ],
        'being_at_school' => [
            ['break', 'przerwa'],
            ['certificate', 'świadectwo'],
            ['get a certificate', 'uzyskać świadectwo'],
            ['classroom', 'klasa'],
            ['copybook, notebook', 'zeszyt'],
            ['coursebook, textbook', 'podręcznik'],
            ['education', 'wykształcenie, edukacja'],
            ['grade', 'stopień'],
            ['get a good grade', 'dostać dobry stopień'],
            ['holidays', 'wakacje'],
            ['library', 'biblioteka'],
            ['playground', 'boisko'],
            ['register', 'dziennik'],
            ['study hard', 'uczyć się pilnie'],
            ['take part in a lesson', 'brać udział w lekcji'],
            ['summer term', 'semestr letni'],
            ['winter term', 'semestr zimowy'],
            ['timetable', 'plan lekcji'],
            ['fall behind', 'mieć zaległości'],
            ['get into university', 'dostać się na uczelnię'],
            ['get throught exams', 'zdawać egzaminy'],
            ['look sth up in a dictionary', 'sprawdzać coś w słowniku'],
            ['put up your hand', 'podnosić rękę'],
            ['stay up late', 'nie kłaść się, czuwać'],
            ['do exercises', 'robić ćwiczenia'],
            ['do a language course', 'robić kurs językowy'],
            ['do a project', 'robić projekt'],
            ['do revision', 'robić powtórkę'],
            ['do a degree in sth', 'studiować coś'],
            ['do an exam', 'zdawać egzamin'],
            ['do an experiment', 'przeprowadzać eksperyment'],
            ['do one\'s best', 'bardzo się starać'],
            ['do your homework', 'odrabiać lekcje'],
            ['have a gap year', 'mieć rok przerwy w nauce'],
            ['make a mistake', 'robić błąd'],
            ['make progress', 'robić postępy'],
            ['make a presentation', 'robić prezentację'],
            ['take a break', 'zrobić sobie przerwę'],
            ['take notes', 'zrobić notatki'],
                 
        ],
        'leaving_school' => [
            ['bachelor of science', 'licenjat z nauk ścisłych'],
            ['get a degree', 'otrzymać stopień naukowy'],
            ['get a diploma', 'otrzymać dyplom'],
            ['get a scholarship', 'otrzymać stypendium'],
            ['get into university', 'dostać się na uczelnię'],
            ['graduate', 'absolwent'],
            ['graduate from a university', 'kończyć studia'],
            ['master of humanities', 'magister nauk humanistycznych'],
            ['master of arts', 'magister nauk plastycznych'],
            ['master of science', 'magister nauk ścisłych'],
            ['phd', 'dr'],
            ['qualification', 'kwalifikacja'],
            ['undergraduate', 'student przed uzyskaniem stopnia licencjata'],
            
        
        ],
        'examinations' => [
            ['concentrate', 'skupiać się'],
            ['confident', 'pewny siebie'],
            ['copy', 'kopiować, przepisywać'],
            ['distracted', 'rozproszony'],
            ['entrance exam', 'egzamin wstępny'],
            ['cheat in an exam', 'ściągać na egzaminie'],
            ['fail an exam', 'oblać egzamin'],
            ['pass an exam', 'zdać egzamin'],
            ['retake an exam', 'ponownie przystępować do egzaminu'],
            ['revise for an exam', 'powtarzać do egzaminu'],
            ['examiner', 'egzaminator'],
            ['final examination', 'egzamin końcowy'],
            ['learn by heart', 'uczyć się na pamięć'],
            ['mock exam, practise exam', 'egzamin próbny'],
            ['nervous', 'nerwowy, stremowany'],
            ['panic', 'panika'],
            ['question', 'pytanie'],
            ['relaxed', 'zrelaksowany'],
            ['run out of time', 'zabrakło czasu'],
            ['spelling mistake', 'błąd ortograficzny'],
            ['stressed', 'zestresowany'],
            ['test in maths', 'sprawdzian z matematyki'],
            ['take test, write a test', 'pisać sprawdzian'],
            ['tired', 'zmęczony'],

        ],
        'ways_of_learning_english' => [
            ['go to english classes', 'chodzić na lekcje angielskiego'],
            ['keep a vocabulary book', 'prowadzić zeszyt ze słówkami'],
            ['listen to songs', 'słuchać piosenek'],
            ['read english newspapers', 'czytać angielskie gazety'],
            ['read adapted novels', 'czytać adaptacje powieści'],
            ['surf the internet', 'serfować po internecie'],
            ['visit english speaking countries', 'odwidzać kraje anglojęzyczne'],
            ['watch films', 'oglądać filmy'],
            ['ways of learning', 'sposoby uczenia się'],

        ],
        'extracurricular_activities' => [
            ['club', 'klub'],
            ['do a sailing course', 'robić kurs żeglarski'],
            ['do a sport', 'uprawiać sport'],
            ['do voluntary work', 'pracować społecznie'],
            ['extracurricular activities', 'zajęcia pozalekcyjne'],
            ['go on trips', 'jeździć na wycieczki'],
            ['join a society', 'wstąpić do towarzystwa'],
            ['organize charity events', 'organizować imprezy charytatywne'],
            ['play in a band', 'grać w zespole muzycznym'],
            ['rowing club', 'klub wioślarski'],
            ['social event', 'impreza towrzyska'],
            ['summer camp', 'obóz letni'],
          
        

        ],


    ];

}
