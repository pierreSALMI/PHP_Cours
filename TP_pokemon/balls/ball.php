<?php

class Ball
{
    protected $name;
    protected $level;
    public $capture;

    public function __construct($name, $level){
        $this->name = $name;
        $this->level = $level;
        $this->capture = FALSE;
    }
    public function capture($target){
        $capture = (($target->life_max - $target->life) / $target->life_max) * (1 + ($this->level - $target->level) / 25);
        if ($this->name == 'Masterball' || (rand(0,1000)/1000) < $capture ){
            echo nl2br("$target->name est capturé \n");
            $this->capture = TRUE;
        }
        else{
            echo nl2br("capture failed \n");
            $this->capture = FALSE;
        }
    }
}


