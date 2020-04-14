<?php 

include "continente.php";
include "idioma.php";
include "subregion.php";
include_once "planeta.php";

$continente = new Continente("europe");
$idioma = new Idioma("en");
$subregion = new SubRegion("caricom");

$continente->obtener($continente->info);
echo "<br>";
$idioma->obtener($idioma->info);
echo "<br>";
$subregion->obtener($subregion->info);
echo "<br>";
$continente->todo();
?>