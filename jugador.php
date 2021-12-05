<?php


class Jugador{

private  $numeroJug;
private  $ptos;

public function __construct(int $_numJug){
    $this->numeroJug=$_numJug;
    $this->ptos=0;
}

public function getNumJug(){
    return $this->numeroJug;
}

public function getPtos(){
    return $this->ptos;
}

public function addPtos(int $_ptos){
    if($_ptos>0){
        $this->ptos+=$_ptos;
    }else{
        echo "No se pueden sumar puntos que sean menor a 0";
    }
}


}





?>
