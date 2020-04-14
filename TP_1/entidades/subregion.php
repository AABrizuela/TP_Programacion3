<?php

use NNV\RestCountries;
require_once __DIR__ . '/../vendor/autoload.php';
require_once "iFunciones.php";
require_once "planeta.php";

class SubRegion extends Planeta implements iFunciones
{
    public function obtener($subregion)
    {
        $restCountries = new RestCountries;        
        $porSubReg = $restCountries->byRegionalBloc($subregion);

        echo "Los paises de la subregion " . $subregion . " son: " . "<br>";

        foreach ($porSubReg as $country)
        {
            echo $country->name;
            echo "<br>";
        }
    }
}

?>