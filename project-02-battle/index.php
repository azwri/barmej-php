<?php
include_once("./hero.class.php");
include_once("./enemy.class.php");


// function to print the result
function printResult($text) {
    echo "<h1>{$text}</h1><hr />";
}

// situation #1
$hero1 = new Hero("Hero1", 400, 200);
$enemy1 = new Enemy("Enenmy1", 500, 100, false);
$fight1 = $hero1->fight($enemy1);

// situation #2
$hero2 = new Hero("Hero2", 200, 150);
$enemy2 = new Enemy("Enenmy2", 500, 100, false);
$fight2 = $hero2->fight($enemy2);

// situation #3
$hero3 = new Hero("Hero3", 1000, 1500);
$enemy3 = new Enemy("Enenmy3", 400, 300, true);
$fight3 = $hero3->fight($enemy3);

// print the results
printResult($fight1);
printResult($fight2);
printResult($fight3);

?>