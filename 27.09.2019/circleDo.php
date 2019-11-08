<?php
// circle_do.php
$circleRadius = $_GET['circle-radius'];

$circleArea = pi() * $circleRadius * $circleRadius;
$circleCircumference = pi() * 2 * $circleRadius;

$circleArea = round($circleArea, 3);
// print
echo 'Raadius = '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea. '<br>';
echo 'Ringi umbermõõt = '.$circleCircumference. '<br>';