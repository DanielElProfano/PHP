<?php

require_once "Serie.php";
require_once "Temporada.php";
require_once "Capitulo.php";
require_once "Consulta.php";
require_once "Multimedia.php";

$serieGOT = new Serie("GOT",'fantasía');
$serriAway = new Serie("Away",'Ciencia Ficcion');
$temporada1Away = new Temporada(1,2019);
$temporada1Got = new Temporada(1,2010);
$temporada2Got = new Temporada(2,2011);
 $serieGOT->addTemporada($temporada1Got);
 $serieGOT->addTemporada($temporada2Got);
// var_dump($temporada1Got);
$gotCap1 = new Capitulo('Winter is coming',10/01/2010,9,1,45);
$gotCap2 = new Capitulo('Sin winter no hay GOT',10/01/2011,9,2,50);

$AwayCap1 = new Capitulo("Fuera",10/10/2019,7,1,54);
echo"<pre>";
// var_dump($gotCap1);
$temporada1Got->addCapitulo($gotCap1);
$temporada1Got->addCapitulo($gotCap2);
$temporada2Got->addCapitulo($gotCap1);
$temporada2Got->addCapitulo($gotCap2);
// echo "<br> temporass -----------";
// var_dump($serieGOT);
echo "</pre>";
// $capitulo = new Capitulo();
$consultaCapitulos = new Consulta();
$consultaCapitulos->consultaTemporada($serieGOT->serieName, $temporada1Got);


 