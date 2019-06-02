<?php
    class Pokemon 
        {
            public $name;
            public $life_max;
            public $life;
            public $level;
            public $type;
            public $strength;
        public function __construct($name, $life_max, $life, $level, $type, $strength){
            $this->name = $name;
            $this->life_max = $life_max;
            $this->life = $life;
            $this->level = $level;
            $this->type = $type;
            $this->strength = $strength;
        }

        public function charge($target){
           $degats = ceil($this->strength * (rand(900, 1100) / 1000));
           $target->life = $target->life - $degats;
           echo nl2br("$this->name attaque charge. Il inflige $degats PV \n");
           echo nl2br("$target->name à $target->life PV restant \n");
        }
    }