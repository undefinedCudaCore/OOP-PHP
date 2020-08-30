<?php


require __DIR__. '/Barsukas.php';


$barsukas1 = new Barsukas('rudas');
$barsukas2 = new Barsukas;
$barsukas3 = $barsukas2;
$barsukas1->kojuSkaicius = 4;
echo '<pre>';

// var_dump($barsukas1);
var_dump($barsukas2);
// var_dump($barsukas3);
// unset($barsukas2);
// $barsukas2 = 'aa';
// var_dump($barsukas2);
// var_dump($barsukas1);

$barsukoKailioSpalvaSavybe = 'kailis';


echo '<br>'.$barsukas1->$barsukoKailioSpalvaSavybe;
// echo '<br>'.$barsukas1->akiusSkaicius;

$barsukas1->balsas();

$barsukas1->
balsas()->
balsas();

$barsukas1->setAkiuSkaicius(3);
var_dump($barsukas1);


var_dump($barsukas1->getAkiuSkaicius());