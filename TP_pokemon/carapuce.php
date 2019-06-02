<?php

    class Carapuce extends Pokemon{
        public function __construct($level, $life=NULL)
        {
            $name = 'Carapuce';
            $life_max = 100 + 9 * $level;
            $life = $life ?? $life_max;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $life_max, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Cara !\n";
        }
        public function level_up(){
            $this->level += 1;
            $this->life_max += 9;
            $this->life += 9;
            $this->strength += 2;
        }

        public function charge($target){
            parent::charge($target);
        }
    }