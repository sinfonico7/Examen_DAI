<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtencionDAO
 *
 * @author bcn
 */

include_once __DIR__ . "/../MODEL/Atencion.php";
class AtencionDAO {
    
    
       private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
        
    public function buscarAtencionPorId($idAtencion){
      
        /* @var $atencion Atencion  */
        $atencion = null;
        
        $sentencia = $this->conexion->prepare("select * from ATENCION where id_atencion= :id_atencion");
        $atencionID = $idAtencion;
        $sentencia->bindParam(':id_atencion',$atencionID);
        $sentencia->execute();
        
        while($registro = $sentencia->fetch()) {            
            $atencion = new Atencion();
            $atencion->setEstadoID($registro["Estado_ID"]);
            $atencion->setFechaHora($registro["Fecha_Atencion"]);
            $atencion->setIdAtencion($registro["ID_Atencion"]);
            $atencion->setMedicoID($registro["Medico_ID"]);
            $atencion->setPacienteID($registro["Paciente_ID"]);
     
   
        }
        return $atencion;
        
        
    }
    
    public function eliminarAtencion($idAtencion){
        $sentencia = $this->conexion->prepare("delete from atencion where id_atencion = :id_atencion");
        $sentencia->bindParam(":id_atencion",$idAtencion);
        $sentencia->execute();
    } 
    
    public function listarAtenciones(){
        
        /* @var $atenciones Array */
        /* @var $atencion Atencion */
        $atenciones = Array();
        $atencion = null;
        
        $sentencia = $this->conexion->prepare("select * from atencion");
        $sentencia->execute();
        while($columna = $sentencia->fetch() ){
            $atencion= new Atencion();
            $atencion->setEstadoID($columna["Estado_ID"]);
            $atencion->setFechaHora($columna["Fecha_Atencion"]);
            $atencion->setIdAtencion($columna["ID_Atencion"]);
            $atencion->setMedicoID($columna["Medico_ID"]);
            $atencion->setPacienteID($columna["Paciente_ID"]);
            array_push($atenciones, $atencion);
        }
        
        return $atenciones;
        
    }
    
    public function modificarAtencion($idAtencion){
        
    }
    
    public function crearAtencion($Estado_ID,$Fecha_Atencion,$Medico_ID,$Paciente_ID){
        
        
         $sentencia = $this->conexion->prepare("insert into atencion (Estado_ID,Fecha_Atencion,Medico_ID,Paciente_ID) values((SELECT EstadoID from estados_atencion where Nombre_Estado = :estado_id),:fecha_atencion,:medico_id,:paciente_id)");
        
        
        $sentencia->bindParam(':estado_id', $Estado_ID);
        $sentencia->bindParam(':fecha_atencion', $Fecha_Atencion);
        $sentencia->bindParam(':medico_id', $Medico_ID);
        $sentencia->bindParam(':paciente_id', $Paciente_ID);
        
        
        $sentencia->execute();
    }
}
