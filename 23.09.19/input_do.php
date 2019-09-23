<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$age = $_GET['age'];
$height = $_GET['height'];
$weight = $_GET['weight'];
echo $firstName;

echo '<h1>Minu andmed </h1>';
echo 'Eesnimi:' . $firstName . '<br>';
echo 'Perenimi:' . $lastName . '<br>';
echo 'age:' . $age . '<br>';
echo 'height:' . $height . '<br>';
echo 'Weight:' . $weight . '<br>';

$kmi = $weight / ($height * $height);
echo 'sinu indx' . $kmi;
