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
        
        $paciente = null;
        $sentencia = $this->conexion->prepare ("
                select * from paciente 
                where PacienteID = :Paciente_ID");
        
        $Paciente_ID = $idPaciente;
        $sentencia->bindParam(':Paciente_ID',$Paciente_ID);
        
        $sentencia->execute();
        
        while ($registro = $sentencia->fetch()){
            
            $paciente = new Paciente();
            $paciente->setPacienteID($registro["PacienteID"]);
            $paciente->setFechaNacimiento($registro["fechaNacimiento"]);
            $paciente->setSexo($registro["Sexo"]);
            $paciente->setDireccion($registro["Direccion"]);
            $paciente->setTelefono($registro["Telefono"]);
            $paciente->setPersonaID($registro["ID_Persona"]);
            
        }
        return $paciente;
        
    }
    
    public function eliminarPaciente($idPaciente){
        $sentencia = $this->conexion->prepare("
                 delete from paciente where PacienteID = :pacienteID");
        $pacienteID = $idPaciente;
        $sentencia->bindParam (':pacienteID',$pacienteID);
        $sentencia->execute();
    } 
    
    public function listarPacientes(){
        $paciente = null;
        $pacientes = array();
        
        $sentencia = $this->conexion->prepare("select * from paciente");
    
        while ($registro = $sentencia->fetch()) {
            $paciente = new Paciente();
            $paciente->setPacienteID($registro["pacienteID"]);
            $paciente->setFechaNacimiento($registro["fechaNacimiento"]);
            $paciente->setSexo($registro["sexo"]);
            $paciente->setDireccion($registro["direccion"]);
            $paciente->setTelefono($registro["telefono"]);
            $paciente->setPersonaID($registro["personaID"]);
            
            array_push($pacientes, $paciente);
        }
        return $pacientes;
    }
    
    public function modificarPaciente($idPaciente){
        
    }
    
    public function crearPaciente($registro){
        
       
        $sentencia = $this->conexion->prepare
                ("insert into paciente 
                values (:idPaciente,:fechaNacimiento,:sexo,:direccion,:telefono,:personaID)"
                
                );
         $idPaciente = $registro->getPacienteID();
         $fechaNacimiento = $registro->getFechaNacimiento();
         $sexo = $registro->getSexo();
         $direccion = $registro->getDireccion();
         $telefono = $registro->getTelefono();
         $personaID = $registro->getPersonaID();
         
        $sentencia->bindParam(':idPaciente', $idPaciente);
        $sentencia->bindParam(':fechaNacimiento', $fechaNacimiento);
        $sentencia->bindParam(':sexo', $sexo);
        $sentencia->bindParam(':direccion', $direccion);
        $sentencia->bindParam(':telefono', $telefono);
        $sentencia->bindParam(':personaID', $personaID);
        $sentencia->execute();
     
        
        
  
        
    }
    
}
