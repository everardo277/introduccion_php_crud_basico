<?php

class Color{

    public $camisa;
    public $pantalon;

    public function Ropa(){

       echo "<h2> La ropa tiene como color: camisa $this->camisa</h2>";

       echo "<h2> La ropa tiene como color: pantalon $this->pantalon</h2>";
    
    
    
    }

}

$objeto = new Color();

$objeto->camisa="azul";
$objeto->pantalon="negro";
$objeto-> Ropa();

?>



