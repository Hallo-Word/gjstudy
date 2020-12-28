<?php


define("A", "very good!");
define("B", "good");
define("C", "ok");
define("D", "fail");

define("Chinese",'1');
define("Math", '2');
define('Computer','3');


$data = [

    '1' => [
        Chinese => 88,
	Math => 99,
	Computer => 96
    ],
    '2' => [
        Chinese => 77,
	Math => 58,
	Computer => 63
    ],
    '3' => [
        Chinese => 93,
	Math => 85,
	Computer => 72
    ],

];



$studentID = '1';
$score = $data[$studentID][Chinese];

if($score >=80 && $score <90){
printf("student %d Chinese score: %0.1f, grade: %s\n", $studentID, $score, A);
}

echo "done!";


?>
