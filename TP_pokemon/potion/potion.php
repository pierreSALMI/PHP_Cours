<?php

    class Potion extends Potions{
        public function __construct(){
            $name = 'Potion';
            $healing = 10;

            parent::__construct($name,$healing);
        }
        public function heal($target){
            parent::heal($target);
        }
    }