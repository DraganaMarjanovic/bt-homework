<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['tezina']) || !isset($_GET['zanimanje']) || !isset($_GET['godine'])) {
        echo "Morate uneti vrednosti u sva polja";
    } else {

        $tezina = $_GET['tezina'];
        $zanimanje = $_GET['zanimanje'];
        if ($zanimanje == "jedan") {
            $zanimanje = 100;
        } elseif ($zanimanje == "dva") {
            $zanimanje = 200;
        } elseif ($zanimanje == "tri") {
            $zanimanje = 300;
        } elseif ($zanimanje == "cetiri") {
            $zanimanje = 150;
        }

        $godine = $_GET['godine'];


        if ($godine <= 3) {
            $godine = 1.9;
        } elseif ($godine >= 4 && $godine <= 10) {

            $godine = 1.5;
        } elseif ($godine >= 11 && $godine <= 18) {
            $godine = 1.2;
        } elseif ($godine >= 19 && $godine <= 26) {
            $godine = 1;
        } elseif ($godine >= 27 && $godine <= 30 && $godine >= 50 && $godine <= 60) {
            $godine = 0.8;
        } elseif ($godine >= 31 && $godine <= 35 && $godine >= 45 && $godine <= 49) {
            $godine = 0.7;
        } elseif ($godine >= 36 && $godine <= 44 &&  $godine <= 60) {
            $godine = 0.6;
        }
    }
}

function maxcalor($tezina, $zanimanje, $godine)
{
   $max = ($tezina * $zanimanje * $godine);
   echo "Maximalan broj kalorija koje smete da unesete: $max ";
}

maxcalor($tezina, $zanimanje, $godine);

?>
<a href="zadatak1.html">Go back</a>