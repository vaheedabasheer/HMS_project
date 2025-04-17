
<?php
$dob = '2020-08-20';
$dobObject = new DateTime($dob);
// echo $dobObject;
$today = new DateTime();

$age = $today->diff($dobObject)->y;

echo $age;
?>