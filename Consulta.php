<?php


class Consulta{

    private $numTemporada;
    private $numCapitulos;
    


public function consultaTemporada($serieName, Temporada $temporada){
    echo"<pre>"; 
    print_r ($temporada);
    echo"</pre>";
    echo "---------------$serieName";
    $this->recorreTemporada($temporada);
    echo "<br>pasada la funcion";
}

private function recorreTemporada($temporada){
    
    foreach($temporada as $element => $indice){

        echo "<br> $element vale ";
    }


}
}