<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['duzina']) || !isset($_GET['sirina']) || !isset($_GET['visina']) || !isset($_GET['zid'])) {
        echo "Morate uneti vrednosti u sva polja";
    } else
        $duzina = $_GET['duzina'];
    $sirina = $_GET['sirina'];

    $visina = $_GET['visina'];
    $zid = $_GET['zid'];
}

function zid($visina, $zid)
{
  
    return  $wall = $visina * $zid;
}
zid($visina, $zid);

function ploca($duzina, $sirina)
{
    

    return    $pak = $duzina * $sirina;
}
ploca($duzina, $sirina);

function konacno($wall, $pak)
{
    $broj = $wall / $pak;
    echo "potreban broj plocica je $broj";
}
$rezultatZid=zid($visina, $zid);
$rezultatPloca=ploca($duzina, $sirina);
konacno($rezultatZid,$rezultatPloca);