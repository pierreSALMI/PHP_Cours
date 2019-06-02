<?php

    class Salameche extends Pokemon{
        public function __construct ($level, $life=NULL)
        {
            $name = 'Salameche';
            $life_max = 100 + 5 * $level;
            $life = $life ?? $life_max;
            $type = 'feu';
            $strength = 10 + 4 * $level;

            parent::__construct($name, $life_max, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Sala !\n";
        }
        public function level_up(){
            $this->level += 1;
            $this->life_max += 5;
            $this->life += 5;
            $this->strength += 4;
        }
        public function charge($target){
            parent::charge($target);
        }
    }