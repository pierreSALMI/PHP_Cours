<?php
    include './ball.php';

    class Superball extends Ball{
        public function __construct(){
            $name = 'Superball';
            $level = 20;

            parent::__construct($name,$level);
        }
    }
    $superball = new Superball();
    var_dump($superball);