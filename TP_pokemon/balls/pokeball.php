<?php

    class Pokeball extends Ball{
        public function __construct(){
            $name = 'Pokeball';
            $level = 10;

            parent::__construct($name,$level);
        }
        public function capture($target){
            parent::capture($target);
        }
    }