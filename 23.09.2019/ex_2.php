<?php

$eesnimi = "Emil";
$perenimi = "Varnomasing";
$vanus = 22;
$pikkus = 1.76;
$kaal = 75;

echo "Eesnimi: " . $eesnimi . "<br>";
echo "Perenimi: " . $perenimi . "<br>";
echo "Vanus: " . $vanus . "<br>";
echo "Pikkus:" . $pikkus . "<br>";
echo "Kaal: " . $kaal . "<br>";

$kmi = $kaal / ($pikkus * $pikkus);
echo "Kehamassiindeks on:" . $kmi . "<br>";