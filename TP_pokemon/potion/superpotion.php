<?php
    class Superpotion extends Potions{
        public function __construct(){
            $name = 'Superpotion';
            $healing = 30;

            parent::__construct($name,$healing);
        }
    }
    $superpotion = new Superpotion();
    var_dump($superpotion);