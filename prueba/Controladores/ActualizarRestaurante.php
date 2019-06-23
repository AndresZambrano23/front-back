<?php

require '../Modelos/Restaurante.php';

class ActualizarRestaurante{

    public function restauranteActualizar($dato){
        //print_r($dato);

        foreach($dato as $datos){
            $id_restaurante = $datos->id_restaurante;
            $nombre_restaurante = $datos->nombre_restaurante;
            $direccion = $datos->direccion;
            $tipo_restaurante = $datos->tipo_restaurante;
            $horario = $datos->horario;
        }

        $insertar = new Restaurante();
        $resultado = $insertar->ActualizarRestaurante($id_restaurante,$nombre_restaurante,$direccion,$tipo_restaurante,$horario);

    }
}

$dato = json_decode(file_get_contents('php://input'));
$insert = new ActualizarRestaurante();
$mostrar= $insert->restauranteActualizar($dato);