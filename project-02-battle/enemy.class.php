<?php
include_once("./battle.calss.php");

class Enemy extends Person {

    public $run;
    function __construct($name, $health, $power, $run) {
        parent::__construct($name, $health, $power);
        $this->run = $run;
    }
}
?>