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
        
    }
    
    public function eliminarAtencion($idAtencion){
        
    } 
    
    public function listarAtenciones(){
        
    }
    
    public function modificarAtencion($idAtencion){
        
    }
    
    public function crearAtencion($idAtencion,$fechaHora,$pacienteID,$medicoID,$estadoID){
        
    }
}
