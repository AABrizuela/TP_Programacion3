<?php

use NNV\RestCountries;
require_once __DIR__ . '/../vendor/autoload.php';
require_once "iFunciones.php";
require_once "planeta.php";

class Idioma extends Planeta implements iFunciones
{
    public function obtener($idioma)
    {
        $restCountries = new RestCountries;        
        $porIdioma = $restCountries->byLanguage($idioma);
        $nombreIdioma = $porIdioma[0]->languages[0]->name;
        
        echo "Los paises que hablan en " . $nombreIdioma . " son: " . "<br>";

        foreach ($porIdioma as $country)
        {
            echo $country->name;            
            echo "<br>";
        }
    }
}

?>