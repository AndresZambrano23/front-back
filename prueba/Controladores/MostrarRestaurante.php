<?php

require '../Modelos/Restaurante.php';

//$id = $_REQUEST['id_restaurante']; 
$insert = new MostrarRestaurante();
$mostrar = $insert->restauranteMostrar();

class MostrarRestaurante{
    public function restauranteMostrar(){
        //print_r($id_restaurante);
        
        /*foreach ($id_restaurante as $dato) {
            $id = $dato->id_restaurante;
        }*/

        $insertar = new Restaurante();
        $resultado  = $insertar->MostrarRestaurante();
    }
}

/*$id_restaurante = json_decode(file_get_contents('php://input'));
$insert = new MostrarRestaurante();
$mostrar = $insert->restauranteMostrar($id_restaurante);*/



