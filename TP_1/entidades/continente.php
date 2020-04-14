<?php

use NNV\RestCountries;
require_once __DIR__ . '/../vendor/autoload.php';
require_once "iFunciones.php";
require_once "planeta.php";

class Continente extends Planeta implements iFunciones
{
    public function obtener($continente)
    {
        $restCountries = new RestCountries;        
        $porCont = $restCountries->byRegion($continente);

        echo "Los paises del continente " . $continente . " son: " . "<br>";

        foreach ($porCont as $country)
        {
            echo $country->name;
            echo "<br>";
        }
    }

    public static function Todo()
    {
        $restCountries = new RestCountries;
        $todo = $restCountries->all();
        //$bordersMap = array();

        foreach($todo as $valor)
        {
            $name = $valor->name;
            $region = $valor->region;
            $subregion = $valor->subregion;
            $languages = $valor->languages;
            foreach($languages as $aux)
            $idioma = $aux->name;
            $capital = $valor->capital;
            $population = $valor->population;
            $demonym = $valor->demonym;
            $area = $valor->area;
            $borders = $valor->borders;
            //$bordersMap->array_push($name => $borders);
            $currencies = $valor->currencies;
            $regionalBlocs = $valor->regionalBlocs;

            echo "Name: " . $name . "<br>";
            echo "Region: " .$region . "<br> Subregion: " . $subregion . "<br>";
            echo "Languges: ". $idioma . "<br> Capital: " . $capital;
            echo "<br> Population: " . $population;
            echo "<br> Demonym:" .$demonym;
            echo "<br> Area: " . $area;
            echo "<br>". "Borders: <br>";
            foreach($borders as $aux)
            echo $aux . "<br>";

            echo "<br> Currencies: ";
            
            foreach($currencies as $aux)
            echo $aux->symbol ."<br>";
            
            echo "</br></br>";
        }
        
    }
}

?>