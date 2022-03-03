<?php

class ConexionBd{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=introduccion_crud_basico","root","");
        return $bd;
    }
}