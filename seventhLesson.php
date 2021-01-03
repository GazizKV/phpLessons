<?php

class SomePeople {
	public $age;
	public $name;
	public static $people = 1; // static variable of class
}

echo "<hr>";


$tim = new SomePeople();

$tim->age = 33;
echo $tim->age;
echo "<hr>";
$bob = $tim;

$tim->age = 35;
echo $bob->age;
echo "<hr>";
$fir = $sec = 3;

$fir = 4;
echo $fir;
echo "<br>";

echo "<hr>";
echo $sec;


echo "<br>";


?>
