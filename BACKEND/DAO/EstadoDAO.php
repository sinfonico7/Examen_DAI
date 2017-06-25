<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoDAO
 *
 * @author bcn
 */
include_once __DIR__ . "/../MODEL/Estado.php";
class EstadoDAO {
        
       private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    
    public function buscarEstadoPorId($idEstado){
        
    }
    
    public function eliminarEstado($idEstado){
        
    } 
    
    public function listarEstados(){
        
    }
    
    public function modificarEstado($idEstado){
        
    }
    
    public function crearEtado($idEstado,$nombreEstado){
        
    }
}
