<?php

namespace App\Models;

class People {
    public $name;
    public $age;
    public $city;

    public function __construct($name,$age,$city) {
        $this -> name = $name;
        $this -> age = $age;
        $this -> city = $city;
    }
}
