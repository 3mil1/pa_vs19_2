<?php

// define variables
$age = 35;
echo 'Vanus = '.$age.'<br>';
if($age > 0 and $age < 18) {
    // 0 - 17 - laps
    echo 'Oled laps<br>';
} else if($age > 17 and $age < 66) {
    // 18 - 65 - täiskasvanu
    echo 'Oled taiskasvanu<br>';
} else if($age > 65) {
    // 66 > - senioor
    echo 'Oled senioor<br>';
} else {
    echo 'midagi on valesti<br>';
}