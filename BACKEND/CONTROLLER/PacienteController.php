<?php

include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/PacienteDAO.php";

/**
 * Description of PacienteCOntroller
 *
 * @author bcn
 */
class PacienteController {
    
    
    public static function listarPacientesRegistrados(){
        $conexion = DBConnection::getConexion();
        $daoPaciente = new PacienteDAO($conexion);
        $pacientes = $daoPaciente->listarPacientes();
        
        return $pacientes;
    }
    public static function registrarPacientes($fechaNacimiento,$sexo,$direccion,$telefono,$personaID){
        if (is_string($sexo)&&  is_string($direccion)&&is_string($telefono)&&  is_string($personaID)) {
            $aux=substr($personaID,0,-2);
            $paciente = new Paciente();
            $paciente->setPacienteID("");
            $paciente->setFechaNacimiento($fechaNacimiento);
            $paciente->setSexo($sexo);
            $paciente->setDireccion($direccion);
            $paciente->setTelefono($telefono);
            $paciente->setPersonaID($aux);
            
            $conexion = DBConnection::getConexion();
            $daoPaciente = new PacienteDAO($conexion);
            
            return $daoPaciente->crearPaciente($paciente);  
        } else{ echo 'No agregado';}
        
    }
    public static function EliminarPaciente ($pacienteID){
        
        return null;
    }
    
    public static function ModificarPaciente ($pacienteID,$fechaNacimiento,$sexo,$direccion,$telefono,$personaID){
        
        return null;
    }
    
}
