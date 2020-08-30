<?php

use Grazus\Meskenas\Singelton as B;

require __DIR__ . '/Singelton.php';

$cart1 = Grazus\Meskenas\Singelton::make();
// $cart2 = Singelton::make();

// $cart2 = clone($cart1);
// $cart2 = unserialize(serialize($cart1));

echo B::MESKENAS.'<br>';

var_dump($cart1);
// var_dump($cart2);