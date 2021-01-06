<?php



echo "this index.php" . "<br>";

// const of class
class ConstantClass{
	const NAME="const";
}
//echo ConstantClass::NAME;
echo "<hr>";

if(defined('ConstantClass::NAME')){
	echo 'const if define <br>';
}
else
{
	echo ' const not define';
}



?>
