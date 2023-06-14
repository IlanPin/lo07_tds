<?php

function listeJourLabel(){
    $JourLabel = ["lundi",
        "mardi",
        "mercredi",
        "jeudi",
        "vendredi",
        "samedi",
        "dimanche"
        ];
    return $JourLabel;
}

function listeJourIndice(){
    return range(1,31);
}

function listeMois(){
    $Mois = ["janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "décembre"
    ];
    return $Mois;
}

function listeSeance(){
    $Seances = [];
    $h = 8;
    $m = 0;
    $s = "";
    foreach(range(1,10) as $number1){
        foreach(range(0,2) as $number2){
            if($number2==1){
                $m = 2;
            }
            elseif($number2==2){
                $m = 4;
            }
            $s = "$h"."h"."$m"."0";
            array_push($Seances,$s);
        }
        $h = 8+$number1;
        $m = 0;
    }
    return $Seances;
}

?>