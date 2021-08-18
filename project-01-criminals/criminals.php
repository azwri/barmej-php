<?php

$criminals = array(
    "Jeffrey" => array(
        "name" =>  "Jeffrey",
        "age" => 44,
        "id" => 10001
    ),
    "Stephen" => array(
        "name" =>  "Stephen",
        "age" => 39,
        "id" => 10002
    ),
    "Benjamin" => array(
        "name" =>  "Benjamin",
        "age" => 43,
        "id" => 10003
    ),
    "Terry" => array(
        "name" =>  "Terry",
        "age" => 38,
        "id" => 10004
    ),
    "Bryan" => array(
        "name" =>  "Bryan",
        "age" => 40,
        "id" => 10005
    ),
    "Juan" => array(
        "name" =>  "Juan",
        "age" => 37,
        "id" => 10006
    ),
    "Philip" => array(
        "name" =>  "Philip",
        "age" => 41,
        "id" => 10007
    ),
    "Louis" => array(
        "name" =>  "Louis",
        "age" => 43,
        "id" => 10008
    ),
    "Albert" => array(
        "name" =>  "Albert",
        "age" => 40,
        "id" => 10009
    ),
    "Frank" => array(
        "name" =>  "Frank",
        "age" => 29,
        "id" => 10010
    )
);


$arrestedCriminals = array(
    "Stephen" => array(
        "name" =>  "Stephen",
        "age" => 39,
        "id" => 10002
    ),
    "Juan" => array(
        "name" =>  "Juan",
        "age" => 37,
        "id" => 10006
    ),
    "Louis" => array(
        "name" =>  "Louis",
        "age" => 43,
        "id" => 10008
    ),
    "Albert" => array(
        "name" =>  "Albert",
        "age" => 40,
        "id" => 10009
    )
);

function isArrested($id){
    global $criminals;
    global $arrestedCriminals;

    foreach($criminals as $criminal){
        if($id == $criminal["id"]){
            echo $criminal["name"] . " is in the list. ";
            break;
        }
    }

    foreach($arrestedCriminals as $arrestedCriminal){
        if($id == $arrestedCriminal["id"]){
            echo "And he is arrested.<br />";
            break;
        } else {
            echo "And he is not arrested yet.<br />";
            break;
        }
    }
}


isArrested(10002);

?>