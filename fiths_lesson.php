<?php
class people {
	private $counter;
	public $age;
	protected $name = "Durel";
	protected $last_name;
	public $birthday;
}

class beast {
	private $counter;
	public $age;
	protected $name;
	protected $owner;
	public $birthday;
}

class planet {
	private $counter;
	public $age;
	protected $name;
	protected $mass;
	public $color;
}
echo "<br>";
$dural = new people;
$dural->age = 30;
echo $dural->age;
$fox = new beast;
$mars = new planet;


echo "<br>";
// классы и обьекты
// public, private, protected - спецификаторы доступа
require_once 'two.php';

$nick = new SomePeople;

$nick->age = 30;
$nick->name = "Nick";

echo $nick->age;
echo "<br>";
echo $nick->name;

echo "<br>";
unset($nick);
$dasha = new SomePeople();
echo "<br>";

class location {
	public $x;
	private $y;
}
$loc = new Location();

$loc->x = 32.22;
//$loc->y = 324.234;


echo "<br>";
echo "<br>";


?>
