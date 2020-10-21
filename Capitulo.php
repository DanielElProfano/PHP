<?php
require_once "Multimedia.php";
require_once "Serie.php";
class Capitulo extends Multimedia{

    



    private $titulo;
    private $fechaEstreno;
    private $valoracion;
    private $numCapitulo;



    public function __construct($titulo,$fechaEstreno,$valoracion,$numCapitulo){


        $this->titulo= $titulo;
        $this->fechaEstreno = $fechaEstreno;
        $this->valoracion = $valoracion;
        $this->$numCapitulo = $numCapitulo;
        $this->duracion = $duracion;
    }

    public static function numeroCapitulos($serieName, Temporada $temporada){
        $serie = new Serie($serieName);
        print_r($serie);
     


    }
}


