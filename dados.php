<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CASO 1 UD5 DICIEMBRE</title>
</head>
<body>
<?php

class Dado {

   private  $minNumDado;
   private  $maxNumDado;

   public function getMinNumDado(){

        return $this->minNumDado;

   }
   public function getMaxNumDado(){

        return $this->maxNumDado;

   }
   public function setMinNumDado($minNum){

            $this->minNumDado=$minNum;

}
   public function setMaxNumDado($maxNum){

            $this->maxNumDado=$maxNum;

}

   public function tirarDado()
    {
        return rand($this->minNumDado,$this->maxNumDado);
    }

   

}

?> 
</body>
</html>