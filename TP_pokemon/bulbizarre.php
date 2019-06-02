<?php

    class Bulbizarre extends Pokemon{
        public function __construct ($level, $life=NULL)
        {
            $name = 'Bulbizarre';
            $life_max = 100 + 7 * $level;
            $life = $life ?? $life_max;
            $type = 'plante';
            $strength = 10 + 3 * $level;

            parent::__construct($name, $life_max, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Cara !\n";
        }

        public function level_up(){
            $this->level += 1;
            $this->life_max += 7;
            $this->life += 7;
            $this->strength += 3;
        }
        public function charge(){
            parent::charge();
        }
    }

    $bulbizarre = new Bulbizarre(5);
    var_dump($bulbizarre); 