<?php

echo "hello, this is a test!";

echo "<br/>";
echo "realtime refresh?";

$number = 5;
function add(){

    $count = 3;
    global $number;
    global $insidenumber;
    $insidenumber =6; 
  
    echo $number;
    echo "<br/>";

    echo $insidenumber;  
    
    echo "<br/>";
    echo $count;
    echo "<br/>";
    
    //return $count;

}

echo " <br/>";
echo "result:";
 add();
echo "end";
echo $insidenumber;
echo "this is the". __file__ . "file";

echo " <br/>";
echo "this is the". __DIR__ . "path";





?>
