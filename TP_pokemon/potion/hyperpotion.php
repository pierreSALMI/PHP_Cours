<?php
    include './potions.php';

    class Hyperpotion extends Potions{
        public function __construct(){
            $name = 'Hyperpotion';
            $healing = 50;

            parent::__construct($name,$healing);
        }
    }
    $hyperpotion = new Hyperpotion();
    var_dump($hyperpotion);