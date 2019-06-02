<?php
    include './potions.php';

    class Potionmax extends Potions{
        public function __construct(){
            $name = 'Potionmax';
            $healing = 'Max';

            parent::__construct($name,$healing);
        }
    }
    $potionmax = new Potionmax();
    var_dump($potionmax);