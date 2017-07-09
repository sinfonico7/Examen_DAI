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
        
        $medicos = array();
        
        $sentencia = $this->conexion->prepare("select * from medico");
        $sentencia->execute();
        
        while ($registro = $sentencia->fetch()) {
            $medico = new Medico();
            $medico->setIdMedico($registro["MedicoId"]);
            $medico->setEspecialidad($registro["id_especilidad"]);
            $medico->setFechaContratacion($registro["Fecha_Contratacion"]);
            $medico->setIdPersona($registro["ID_Persona"]);
            $medico->setVlorConsulta($registro["Valor_Consulta"]);
            
            
            array_push($medicos, $medico);
        }
        return $medicos;
    }
    
    public function modificarMedico($idMedico){
        
    }
    
    public function crearMedico($idMedico,$fechaContratacion,$especialidad,$valorConsulta,$personaID){
        
    }
}
