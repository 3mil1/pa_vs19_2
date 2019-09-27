<?php
// circle_do.php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
var_dump($circleRadius);
// echo $circleRadius + $circleRadius;
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCirumference = 3.14 * 2 * $circleRadius;
// print
echo 'raadius = ' . $circleRadius . '<br>';
echo '<hr>';
echo 'ringi pindala = ' . $circleArea . '<br>';
echo 'ringi umbermiit = ' . $circleCirumference . '<br>';
