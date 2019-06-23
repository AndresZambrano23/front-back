<?php 
require '../Modelos/Restaurante.php';

class restauranteController{
    

     public function restauranteInsertar($data){
        //print_r($data);

        foreach ($data as $dato) {
            $nombre_resturante = $dato->nombre_restaurante;
            $direccion= $dato->direccion;
            $tipo_restaurante= $dato->tipo_restaurante;
            $horario = $dato->horario;
    
            
        } 
        $insertar = new Restaurante();
        $resultado = $insertar->InsertarRestaurante($nombre_resturante,$direccion,$tipo_restaurante,$horario);

    }

    
}

/* Insertar un dato */
$data = json_decode(file_get_contents('php://input'));
$insert = new restauranteController();
$resul = $insert->restauranteInsertar($data);



