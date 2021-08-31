<?php


// define the class
class Person {
    public $name;  
    public $health;
    public $power;

    public function __construct($name, $health, $power) {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setPower($power) {
        $this->power = $power;
    }

    public function getPower() {
        return $this->power;
    }
}

?>