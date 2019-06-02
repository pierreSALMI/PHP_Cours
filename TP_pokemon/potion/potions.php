<?php
    class Potions {
    protected $name;
    protected $healing;

        public function __construct($name, $healing){
            $this->name = $name;
            $this->healing = $healing;
        }
        public function heal($target){
            $target->life += $this->healing;
        }
    }