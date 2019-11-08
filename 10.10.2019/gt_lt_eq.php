<?php

$numberOne = $_GET['numberOne'];
$numberTwo = $_GET['numberTwo'];

if(strlen($numberOne) > 0 and strlen($numberTwo) > 0){
    if($numberOne > $numberTwo) {
        echo $numberOne.' on suurem '.$numberTwo;
    } elseif ($numberOne < $numberTwo) {
        echo $numberOne.' on vaiksem '.$numberTwo;
    } else {
        echo $numberOne.' on vordne '.$numberTwo;
    }
}