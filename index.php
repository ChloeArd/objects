<?php

require "./classes/Computer.php";

$computerOne = new Computer('Apple', 'Intel', '1Go', 'Linux', 'Vert Matthias');
$computerOne->setMouse(true);
$computerOne->setKeyboard(true);
$computerOne->start();
$computerOne->sleep();
$computerOne->shutdown();
echo "Memory: ".$computerOne->getMemory()."<br>";

$computerTwo = new Computer('Huawei', 'Integrated', 'AMD Ryzen 3', 'Zindozs', 'Gris');
// Par défault c'est false
$computerTwo->setMouse(true);
$computerTwo->start();
$computerTwo->sleep();
$computerTwo->shutdown();
echo "Memory: ".$computerTwo->getMemory()."<br>";