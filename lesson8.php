<?php
// define()

define('PI', 3.14);
define('number', 11);

echo PI;
echo "<br>";
echo number;
echo "<br>";

if (defined('PI')) {
	echo "const";
} else {
	echo "const not";
}
echo "<br>";
if (defined('number')) {
	echo "const";
} else {
	echo "const not";
}
echo "<br>";
echo defined('PI');
echo "<br>";
/*
__LINE__ current line 
__FILE__ path current file name and full path
__FUNCTION__ name of function
__METHOD__ name method
__CLASS__ name class
__DIR__ current directory
__PHP__VERSION version of PHP
OS__VERSION os vers
PHP__EOL  \n  \r\n
 */

echo "files name " . __FILE__ . "\n";
echo "<br>";
echo __DIR__;

?>
