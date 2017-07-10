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
        
        $pacientes = array();
        
        $sentencia = $this->conexion->prepare("select * from paciente");
        $sentencia->execute();
        
        while ($registro = $sentencia->fetch()) {
            $paciente = new Paciente();
            $paciente->setPacienteID($registro["PacienteID"]);
            $paciente->setFechaNacimiento($registro["Fecha_Nacimiento"]);
            $paciente->setSexo($registro["Sexo"]);
            $paciente->setDireccion($registro["Direccion"]);
            $paciente->setTelefono($registro["Telefono"]);
            $paciente->setPersonaID($registro["ID_Persona"]);
            
            array_push($pacientes, $paciente);
        }
        return $pacientes;
    }
    
    public function getPacienteJSON($idPaciente) {
        
          /*@var $paciente Paciente*/       
        $sentencia = $this->conexion->prepare("select * from paciente where PacienteID = :pacienteID");
         $sentencia->bindParam (':pacienteID',$idPaciente);
        $sentencia->execute();
        
        while ($registro = $sentencia->fetch()) {
            $paciente = new Paciente();
            $paciente->setPacienteID($registro["PacienteID"]);
            $paciente->setFechaNacimiento($registro["Fecha_Nacimiento"]);
            $paciente->setSexo($registro["Sexo"]);
            $paciente->setDireccion($registro["Direccion"]);
            $paciente->setTelefono($registro["Telefono"]);
            $paciente->setPersonaID($registro["ID_Persona"]);
            
            
        }
        return json_encode($paciente);
        
        
        
    }
    
    public function modificarPaciente($idPaciente){
        
    }
    
    public function crearPaciente($registro){
        
        /* @var $registro Paciente*/
       
        $sentencia = $this->conexion->prepare("insert into paciente (Direccion,Fecha_Nacimiento,ID_Persona,Sexo,Telefono) values (:direccion,:fechaNacimiento,:personaID,:sexo,:telefono)");
        
         $fechaNacimiento = $registro->getFechaNacimiento();
         $sexo = $registro->getSexo();
         $direccion = $registro->getDireccion();
         $telefono = $registro->getTelefono();
         $personaID = $registro->getPersonaID();
         
        
        $sentencia->bindParam(':fechaNacimiento', $fechaNacimiento);
        $sentencia->bindParam(':sexo', $sexo);
        $sentencia->bindParam(':direccion', $direccion);
        $sentencia->bindParam(':telefono', $telefono);
        $sentencia->bindParam(':personaID', $personaID);
        $sentencia->execute();
     
        
        
  
        
    }
    
}
