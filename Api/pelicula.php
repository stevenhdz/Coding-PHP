<?php
include_once 'db.php';

class Pelicula extends DB{
    function obtenerPelciulas(){
        $query = $this->connect()->query('SELECT * FROM pelicula');
        return $query;
    }
}
?>