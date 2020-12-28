<?php
$name = "testName";
$name2 = 123;

if(is_string($name)){

echo $name." is a string";

} else{

echo $name." is not a string";


}

echo "</br>";

echo "'$name' and $name is a string, '$name2' is not a string";

echo "</br>". '</br> $name is a string'."</br>";
echo "</br>". '</br> "$name" is a string'."</br>";

echo "PHP range:".PHP_INT_MIN." to ". PHP_INT_MAX;

echo "<br/>";

$num1 =1.23;
$num2 = 1.2345;
echo bcadd($num1,$num2,3);

echo "<br/>";

var_dump($name2);
var_dump($name);
?>
