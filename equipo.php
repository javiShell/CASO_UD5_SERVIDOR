<?php

require_once 'jugador.php';

class Equipo{

private  $jugadores = array();
private  $numJugadores=0;

public function __construct(){
    $this->numJugadores=0;
}

public function addJug(Jugador $jugador){
    $this->jugadores[$this->numJugadores]=$jugador;
    $this->numJugadores++;
}

public function getJug(int $_numJug){
    return $this->jugadores[$_numJug];
}

public function getTotal(){
    $sumaPuntos = 0;
    for($i=0;$i<$this->numJugadores;$i++){
        $sumaPuntos += $this->jugadores[$i]->getPtos();
    }
    return $sumaPuntos;
}

}


?>
