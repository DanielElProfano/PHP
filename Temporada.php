<?php


class Temporada{


    private $temporada;
    private $year;
    private $capitulos;




    public function __construct($temporada,$year){


        $this->temporada = $temporada;
        $this->year = $year;
        $this->temporada = [];
    }

    public function addCapitulo(Capitulo $newCapitulo){

        $this->temporada[] = $newCapitulo;


    }
}