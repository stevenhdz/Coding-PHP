<?php
include_once 'pelicula.php';

class ApiPeliculas{
    function getAll(){
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();

        $resp = $pelicula->obtenerPelciulas();

        if($resp->rowCount()){
            while($row = $resp->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'imagen' => $row['imagen']
                );
                

                array_push($peliculas['items'], $item);
            }

            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'no hay elementos'));
        }
    }
}

?>