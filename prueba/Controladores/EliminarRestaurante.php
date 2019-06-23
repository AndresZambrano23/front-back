<?php

require '../Modelos/Restaurante.php';

class EliminarRestaurante{

    public function restauranteEliminar($id_restaurante){
        print_r($id_restaurante);

        foreach ($id_restaurante as $dato) {
            $id = $dato->id_restaurante;
        }

        $insertar = new Restaurante();
        $resultado = $insertar->EliminarRestaurante($id);
    }
}

$id_restaurante = json_decode(file_get_contents('php://input'));
$insert = new EliminarRestaurante();
$mostrar = $insert->restauranteEliminar($id_restaurante);