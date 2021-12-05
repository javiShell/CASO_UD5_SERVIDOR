<?php

require_once 'jugador.php';
require_once 'equipo.php';

$equipo = new Equipo();

for($i=0;$i<9;$i++){
    $jugadores[$i] = new Jugador($i);
    $jugadores[$i]->addPtos(rand(20,100));
}

for($i=0;$i<9;$i++){
    $equipo->addJug($jugadores[$i]);
}

$puntos = $equipo->getTotal();

for($i=0;$i<9;$i++){
    echo "Los puntos del jugador ".$i." son: ".$jugadores[$i]->getPtos()."<br>";
}

echo "<strong>Los puntos totales del equipo son: $puntos</strong>";

?>
