<?php

namespace App\Langs\levels\SchoolBook;

use App\Langs\BaseLevel;

/**
 * Created by PhpStorm.
 * User: Roman Pytka
 * Date: 2/28/21
 * Time: 8:23 AM
 */

class Ninth extends BaseLevel
{
    public $title = 'Zdrowie';
    public $desc = 'moduł dziewiąty';
    public $slug = 'health';
    public $data = [
        'body_parts' => [
            ['ankle', 'kostka u nogi'],
            ['arm', 'ramię, ręka'],
            ['back', 'plecy'],
            ['body parts', 'części ciała'],
            ['bottom', 'pupa, siedzenie'],
            ['cheek', 'policzek'],
            ['chin', 'broda'],
            ['ear', 'ucho'],
            ['elbow', 'łokieć'],
            ['eye', 'oko'],
            ['eyebrow', 'brew'],
            ['face', 'twarz'],
            ['finger', 'palec u ręki'],
            ['toe', 'palec u nogi'],
            ['foot', 'stopa'],
            ['feet', 'stopy'],
            ['hair', 'włosy'],
            ['hand', 'ręka'],
            ['head', 'głowa'],
            ['hip', 'biodro'],
            ['knee', 'kolano'],
            ['leg', 'noga'],
            ['lips', 'wargi'],
            ['mouth', 'usta'],
            ['neck', 'szyja'],
            ['nose', 'nos'],
            ['shoulder', 'ramię'],
            ['stomach', 'żołądek, brzuch'],
            ['tooth', 'ząb'],
            ['teeth', 'zęby'],
            ['wrist', 'nadgarstek'],            

        ],
        'inside_the_body' => [
            ['bone', 'kość'],
            ['heart', 'serce'],
            ['kidney', 'nerka'],
            ['liver', 'wątroba'],
            ['lungs', 'płuca'],
            ['muscles', 'mięśnie'],
            ['skeleton', 'szkielet'],
            ['spine', 'kręgosłup'],
            ['intestines', 'jelita, wnętrzności'],
            ['brain', 'mózg'],
            ['circulatory system', 'układ krwionośny'],
            ['the nervous system', 'układ nerwowy'],

        ],
        'illnesses_and_symptoms' => [
            ['allergy', 'uczulenie'],
            ['backache', 'ból pleców'],
            ['be allergic to', 'być uczulonym na'],
            ['blurred eyesight', 'zamglody wzrok'],
            ['feel terrible', 'czuć się okropnie'],
            ['feel weak', 'czuć się słabo'],
            ['feel dizzy', 'mieć zawroty głowy'],
            ['feel sick', 'źle się czuć , czuć się chory'],
            ['retch', 'mieć mdłości'],
            ['food poisoning', 'zatrucie pokarmowe'],
            ['have a cold', 'mieć przeziębienie'],
            ['have a cough', 'mieć kaszel'],
            ['have hight temperature', 'mieć wysoką gorączkę'],
            ['have runny nose', 'mieć katar'],
            ['have a sore throat', 'mieć ból gardła'],
            ['have flu', 'mieć grypę'],
            ['hight blood preasure', 'wysokie ciśnienie krwi'],
            ['hurt', 'boleć'],
            ['i\'ve got an earache', 'mam ból ucha'],
            ['i\'ve got a headache', 'mam ból głowy'],
            ['i\'ve got a stomachache', 'mam ból brzucha'],
            ['i\'ve got a toothache', 'mam ból zęba'],
            ['ill', 'chory'],
            ['illness', 'choroba'],
            ['my head hurts', 'boli mnie głowa'],
            ['my leg hurts', 'boli mnie noga'],
            ['rash', 'wysypka'],
            ['sprained ankle', 'nadwyrężona kostka'],
            ['swallow', 'połykać'],
            ['swollen glands', 'opuchnięte gruczoły'],
            ['symptom', 'objaw'],
            ['upset stomach', 'rostrój żąłądka'],
            ['vomit', 'wymioty'],
            ['twisted ankle', 'skręcona kostka'],
        
        ],
        'injuries' => [
            ['be injured', 'zostać zranionym'],
            ['break your arm', 'złamać rękę'],
            ['break your leg', 'złamać nogę'],
            ['broken bone', 'złamana kość'],
            ['broken leg', 'złamana noga'],
            ['burn', 'oparzenie'],
            ['bad burn', 'poważne oparzenie'],
            ['minor burn', 'małe oparzenie'],
            ['bruise', 'siniak'],
            ['bump', 'guz'],
            ['concussion', 'wstrząc mózgu'],
            ['deep cut', 'rana głęboka'],
            ['minor cut', 'rana lekka'],
            ['electric shock', 'porażenie prądem'],
            ['injury', 'uraz, obrażenie'],
            ['scald', 'oparzenie'],
            ['scratch', 'zadrapanie'],
            ['twisted ancle', 'skręcona kostka'],
            ['unconscious', 'nieprzytomny'],
            ['wound', 'rana'],
            
                 
        ],
        'treatments' => [
            ['be examined', 'zostać zbadanym'],
            ['call an ambulance', 'zadzwonić po karetkę'],
            ['clean the wound', 'wyczyścić ranę'],
            ['cover the wound with a bandage', 'przykryć ranę bandażem'],
            ['get prescription', 'dostać receptę'],
            ['give sb first aid', 'dzielić komuś pierwszej pomocy'],
            ['go to bed', 'iść do łóżka'],
            ['go to hospital', 'iść do szpitala'],
            ['go to the doctor', 'iść do lekarza'],
            ['go to casualty', 'iść na izbę przyjęć'],
            ['have an injection', 'dostać zastrzyk'],
            ['make an appointment the doctor', 'umówić się na wizytę do lekarza'],
            ['put a plaster on the wound', 'położyć plaster na ranę'],
            ['run cold water on the wound', 'oblać ranę wodą'],
            ['take an aspirine', 'brać aspirynę'],
            ['take tablets', 'brać tabletki'],
            ['take painkillers', 'brać środki przeciwbólowe'],
            ['take some medicines', 'brać lekarstwa'],
            ['take vitamin c', 'brać witaminę c'],
            ['take sb\'s temperature', 'zmierzyć komuś temperaturę'],
            ['treat', 'leczyć'],
            ['treatment', 'leczenie'],
           
        ],
        'healthy_lifestyle' => [
            ['avoid stress', 'unikać stresu'],
            ['do regular exercise', 'ćwiczyć regularnie'],
            ['drink plenty of water', 'pić dużo wody'],
            ['eat fruit and vegetables', 'jeść owoce i warzywa'],
            ['follow a sensible diet', 'odżywiać się rozsądnie'],
            ['get enought sleep', 'wysypiać się'],
            ['give up fast food', 'przestać jeść fast food'],
            ['go jogging', 'uprawiać jogging'],
            ['health coach', 'trener zdrowia'],
            ['dietician', 'dietetyk'],
            ['healthy lifestyle', 'zdrowy tryb życia'],
            ['improve one\'s health', 'poprawiać zdrowie'],
            ['join a health club', 'zapisać się do klubu fitness'],
            ['join a gym', 'zapisać się na siłownię'],
            ['keep fit', 'utrzymywać formę'],
            ['reduce stress', 'ograniczać stres'],
            ['relax', 'relaksować się'],
            ['stay in shape', 'utrzymywać formę'],
            ['stop smoking', 'rzucić palenie'],
            ['take up yoga', 'zacząć uprawiać jogę'],
            ['take up aerobics', 'zacząć uprawiać aerobik'],
            ['work out in the gym', 'ćwiczyć na siłowni'],            
            

        ],
        'dietary_problems' => [
            ['be overweight', 'mieć nadwagę'],
            ['be underweight', 'mieć niedowagę'],
            ['low calorie diet', ' dieta niskokaloryczna'],
            ['be on diet', 'być na diecie'],
            ['dietary problems', 'problemy dietetyczne'],
            ['eating disorder', 'zaburzenia odżywiania'],
            ['health problem', 'problem zdrowotny'],
            ['healthy food', 'zdrowa żywność'],
            ['junk food', 'niezdrowe jedzenie'],
            ['lose weight', 'chudnąć'],
            ['obese', 'otyły'],
            ['obesity', 'otyłość'],
            ['put on weight', 'tyć'],
               

        ],

        'hospital' => [
            ['casualty department', 'oddział urazowy'],
            ['dentist', 'dentysta'],
            ['doctor', 'lekarz'],
            ['primary care physician', 'lekarz pierwszego kontaktu'],
            ['have an operation', 'mieć operację'],
            ['have an x-ray', 'wykonać zdjęcie rentgenowskie'],
            ['health center', 'przychodnia'],
            ['hospital', 'szpital'],
            ['nurse', 'pielęgniarka'],
            ['operating theatre', 'sala operacyjna'],
            ['paramedic', 'ratownik medyczny'],
            ['patient', 'pacjent'],
            ['conservation', 'ochrona'],
            ['porter', 'portier, bagażowy'],
            ['specialist', 'lekarz specjalista'],
            ['stretcher', 'nosze'],
            ['surgeon', 'chirurg'],
            ['surgery', 'gabinet lekarski'],
            ['ward', 'oddział'],
               

        ],

        'living_with_disabilities' => [
            ['blind', 'niewidomy'],
            ['braille ', 'alfabet braille\'a'],
            ['crutches', 'kule'],
            ['deaf', 'głuchy'],
            ['disability', 'niepełnosprawność'],
            ['disabled', 'niepełnosprawny'],
            ['guide dog', 'pies przewodnik'],
            ['walking stick', 'laska'],
            ['wheelchair', 'wózek inwalidzki'],               

        ],

    ];

}
