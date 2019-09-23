<?php

$nimi = 'Emil';
$perenimi = 'Varnomasing';
$vanus = '22';
$pikkus = '1.76';
$kaal = '72';

echo '<h1>Minu andmed</h1>';
echo $nimi . '<br>';
echo $perenimi . '<br>';
echo $vanus . '<br>';
echo $pikkus . '<br>';
echo $kaal . '<br>';

//arvutused
// $muutuja = vaartus;

$kmi = $kaal / ($pikkus * $pikkus);
echo $kmi;

