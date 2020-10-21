<?php


class Serie{


    private $genero;
    public $serieName;
    private $temporadas;




    public function __construct($serieName,$genero){


        $this->serieName = $serieName;
        $this->genero = $genero;
        $this->temporadas = [];

    }

    public function addTemporada(Temporada $newTemporada){

        $this->temporadas[] = $newTemporada;



    }
}