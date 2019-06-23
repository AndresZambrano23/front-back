<?php
require '../ConexionDB/Conexionbd.php';


class Restaurante{
    private $id_restaurante;
    private $nombre_restaurante;
    private $direccion;
    private $tipo_restaurante;
    private $horario;

    
    public function InsertarRestaurante($nombre_restaurante,$direccion,$tipo_restaurante,$horario){
        $bd = Conexion();
        $this->nombre_restaurante = $nombre_restaurante;
        $this->direccion = $direccion;
        $this->tipo_restaurante = $tipo_restaurante;
        $this->horario = $horario;

        try {
            $resultado= $bd->prepare("INSERT INTO restarante(nombre_restaurante,direccion,tipo_restaurante,horario
            ) values ('$this->nombre_restaurante','$this->direccion','$this->tipo_restaurante','$this->horario')");
            $resultado->execute();
        } catch (PDOException $e) {
            echo "Error al insertat datos ".$e->getMessage();
        }

        $resultado = null;
    }
    
    
    public function MostrarRestaurante(){
        $db = Conexion();
        //$this->id_restaurante = $id_restaurante;

                $resultado = $db->prepare("SELECT * FROM restarante");
                $resultado->execute();
                $res = [];
                foreach ($resultado as $dato ) {
                      $res[] = $dato;
                }
                $json = json_encode($res);
                print_r($json);
                return $json;
                //$resultado = null;
        
         
            
    }

    public function EliminarRestaurante($id_restaurante){
        $db = Conexion();
        $this->id_restaurante = $id_restaurante;
        try{
            $resultado = $db->prepare("DELETE FROM restarante WHERE id_restaurante='$this->id_restaurante'");
            $resultado->execute();
            echo "Dato Eliminado";
        } catch(PDOException $e){
            echo "No se pudo eliminar el dato vuelva a intentarlo". $e->getMessage();
        }
        
        $resultado = null;
    }
    
    public function ActualizarRestaurante($id_restaurante, $nombre_restaurante, $direccion,$tipo_restaurante,$horario){
        $db = Conexion();
        $this->id_restaurante = $id_restaurante;
        $this->nombre_restaurante = $nombre_restaurante;
        $this->direccion = $direccion;
        $this->tipo_restaurante = $tipo_restaurante;
        $this->horario = $horario;

        try{
            $resultado = $db->prepare("UPDATE restarante SET nombre_restaurante='$this->nombre_restaurante', direccion='$this->direccion', tipo_restaurante='$this->tipo_restaurante', horario='$this->horario' WHERE id_restaurante='$this->id_restaurante' ");
            $resultado->execute();
            
            $error = $resultado->errorInfo();
            if (!$OK) {
	        echo $error[2];
            }
        }catch(PDOException $e){
            echo "No se puede actualizar el dato". $e->getMessage();
        }

        $resultado = null;
    }
    

}
