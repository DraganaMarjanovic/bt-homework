<?php


$puz=0; 

$drvo= 100;
$dan=0;


while ($drvo > $puz)
{
    $drvo=$drvo+1;
    $puz =$puz+3;
    $dan=$dan+1;
    
    echo "Dan $dan: Puz je presao $puz, visina drveta $drvo  cm<br>";

    if($drvo <= $puz)
    {
        echo "Puz se popeo na drvo za $dan dana";
    }
}












?>
