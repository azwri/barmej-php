<?php
include_once("./battle.calss.php");
include_once("./enemy.class.php");


class Hero extends Person {

    function __construct($name, $helath, $power) {
        parent::__construct($name, $helath, $power);
    }

    public function fight($target) {
        if ($target->run) {
            return "{$this->color($target->name)} Runs!";
        }

        while (true) {
            $target->health -= $this->power;
            if ($target->health < 0) {
                return "{$this->color($this->name)} Wins. {$this->color($this->name)} has {$this->power} power,
                and {$this->color($target->name)} has 0 health";
            }

            $this->health -= $target->power;
            if ($this->health < 0) {
                return "{$this->color($target->name)} Wins. {$this->color($target->name)} has {$target->power} power,
                and {$this->color($this->name)} has 0 health";
            }
        }
    }
    // function for color the names
    function color($text) {
        return "<span style='color:red'>{$text}</span>";
    }
}
?>