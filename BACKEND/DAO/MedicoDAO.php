<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MedicoDAO
 *
 * @author bcn
 */
include_once __DIR__ . "/../MODEL/Medico.php";
class MedicoDAO {
    
       private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
        
    public function buscarMedicoPorId($idMedico){
        
    }
    
    public function eliminarMedico($idMedico){
        
    } 
    
    public function listarMedicos(){
        
    }
    
    public function modificarMedico($idMedico){
        
    }
    
    public function crearMedico($idMedico,$fechaContratacion,$especialidad,$valorConsulta,$personaID){
        
    }
}
