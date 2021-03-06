<?php

require './classes/user.php';
require "./classes/Computer.php";


$user = new User("John Doe", "password très fort");

$computerOne = new Computer('Apple', 'Intel', '1Go', 'Linux', 'Vert Matthias');
$computerOne->setMouse(true);
$computerOne->setKeyboard(true);
$computerOne->start();
$computerOne->sleep();
$computerOne->shutdown();
echo "Memory: ".$computerOne->getMemory()."<br>";
$computerOne->setOwner($user);

$computerTwo = new Computer('Huawei', 'Integrated', 'AMD Ryzen 3', 'Zindozs', 'Gris');
// Par défault c'est false
$computerTwo->setMouse(true);
$computerTwo->start();
$computerTwo->sleep();
$computerTwo->shutdown();
echo "Memory: ".$computerTwo->getMemory()."<br>";
$computerTwo->setOwner($user);

echo $computerOne->getOwner();
echo $computerTwo->getOwner();