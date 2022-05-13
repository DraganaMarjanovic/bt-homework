<?php

//Prvi zadatak//
echo " <hr> Zadatak br.1 <br>";
$a = 200;
$b = 80;
$zbir = $a + $b;
$razlika = $a - $b;
$proizvod = $a * $b;
$kolicnik = $a / $b;

echo "Zbir je: " . $zbir . "<br>";
echo "Razlika je: " . $razlika . "<br>";
echo "Proizvod je: " . $proizvod . "<br>";
echo "Kolicnik je: " . $kolicnik . "<br>";

echo " <hr> Drugi nacin br.1 <br>";

$sab=200;
$sab1=80;



echo "Zbir:";
echo ($sab+$sab1) ."<br>" ;
echo "Razlika:";
echo ($sab-$sab1)."<br>" ; 
echo "Proizvod:";
echo ($sab*$sab1) ."<br>"; 
echo "Kolicnik:";
echo ($sab/$sab1) ."<br>"; 
//Drugi zadatak// 
echo " <hr> Zadatak br.2 <br>";

$a = 5;


if ($a == 0) {
    echo "Danas je ponedeljak";
}
if ($a == 1) {
    echo "Danas je utorak";
}
if ($a == 2) {
    echo "Danas je sreda";
}
if ($a == 3) {
    echo "Danas je cetvrtak";
}
if ($a == 4) {
    echo "Danas je petak";
}
if ($a == 5) {
    echo "Danas je subota";
}
if ($a == 6) {
    echo "Danas je nedelja";
}

echo " <hr> Drugi nacin br.2 <br>";

$broj = 3;
switch ($broj) {
    case 0:
        echo " Dan je ponedeljak";
        break;
    case 1:
        echo " Dan je utorak";
        break;

    case 2:
        echo " Dan je sreda";
        break;
    case 3:
        echo " Dan je cetvrtak";
        break;

    case 4:
        echo " Dan je petak";
        break;

    case 5:
        echo " Dan je subota";
        break;
    case 6:
        echo " Dan je nedelja";
        break;
    default:
        echo "Nije ni jedan dan";

}


//Treci zadatak//
echo " <hr> Zadatak br.3 <br>";
$a=5;
$b=7;
$c=9;
$d=$a+$b+$c;
echo "Zbir brojeva: $a, $b i $c je $d";
echo "<hr>";
?>





