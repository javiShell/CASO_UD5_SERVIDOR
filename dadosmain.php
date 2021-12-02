<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CASO 1 UD5 DICIEMBRE: presentación</title>
</head>
<body>
<?php

require 'dados.php';

$dado1 = new Dado();

$dado1->setMinNumDado(0);
$dado1->setMaxNumDado(12);
$contador=1;
echo "<div style='text-align: center;margin-left auto;margin-right:auto;'><strong>12 TIRADAS DEL DADO</strong></div>";
echo "<hr>";
echo "<br>";
echo "<br>";

echo "<div style='text-align: center;margin-left auto;margin-right:auto;'>";
for($i=0;$i<12;$i++){
    echo "<span> ";
    echo "Tirada ".$contador.": ";
    $dados = $dado1->tirarDado();
    echo "el resultado es "."$dados<br>";
    echo "</span>";
    $contador=$contador+1;
}
echo "</div>";
?>
</body>
</html>