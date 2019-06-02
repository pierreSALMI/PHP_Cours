<?php
    include './ball.php';

    class Masterball extends Ball{
        public function __construct(){
            $name = 'Masterball';
            $level = 100000;

            parent::__construct($name,$level);
        }
    }