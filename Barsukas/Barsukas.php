<?php
require __DIR__.'/MiskoTevas.php';
require __DIR__.'/miskas.php';
class Barsukas extends MiskoTevas implements Miskas{
    public $kailis = 'juodas';
    private $akiuSkaicius = 2;


    public function __construct($kailis = 'raudonas'){
        $this->kailis = $kailis;
    }

    public function balsas(){
        echo '<br><br><br>Bar bar<br><br><br>';
        return $this;
    }

    public function setAkiuSkaicius(int $akiuSkaicius){
        if ($akiuSkaicius > 2) {
            echo '<br><br><br>BLOGAI<br><br><br>';
            return;
        }
        $this->akiuSkaicius = $akiuSkaicius;
    }

    public function getAkiuSkaicius(){
        return $this->akiuSkaicius;
    }
}



function grybai(int $skaicius) : array{
    echo 'grybai';
    return [];
}