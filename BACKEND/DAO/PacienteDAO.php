<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteDAO
 *
 * @author bcn
 */
include_once __DIR__ . "/../MODEL/Paciente.php";
class PacienteDAO {
    
        
       private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    
    public function buscarPacientePorId($idPaciente){
        
    }
    
    public function eliminarPaciente($idPaciente){
        
    } 
    
    public function listarPacientes(){
        
    }
    
    public function modificarPaciente($idPaciente){
        
    }
    
    public function crearPaciente($idPaciente,$fechaNacimiento,$sexo,$direccion,$telefono,$personaID){
        
    }
    
}
