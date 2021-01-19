<?php



echo "this index.php" . "<br>";
echo "<hr>";
$str1 = "good to learn php ";
$str2 = "PHP";
$num = 123;
$num2 = 431;
$str = $str1 . $str2;
echo "<br>";
$nums = $num2 . $num;
echo $nums;
echo "<br>";
echo "<hr>";

$num .= $num2;
echo $num;
echo "<br>";
echo "<hr>";

echo $str;

echo "<hr>";
echo "<br>";
echo $nums, $num, $num2, $str1, $str2, $str;



?>
