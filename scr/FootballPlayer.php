<?php

class FootballPlayer
{
    public $name;
    public $position;

    public function __construct($name , $position)
    {
        $this->name=$name;
        $this->position=$position;
    }
}
$playerA=new FootballPlayer('marco','Striker');
$playerB=new FootballPlayer('marcoka','Strikery');
var_dump($playerA->nane);
var_dump($playerB);