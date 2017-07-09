<?php

include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/PersonaDAO.php";
/**
 * Description of PersonaController
 *
 * @author bcn
 */
class PersonaController {
    
    
    public static function listarPersonasRegistradas(){
        $conexion = DBConnection::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->listarPersonas();
        
        
    }
    
    public static function validarPersona($rut) {
        
        $conexion = DBConnection::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        /* @var $rut string */
        /* @var $resultado boolean */
        $resultado = $daoPersona->validarPersona($rut);
        return $resultado;
        
        
    }
    
    public static function registrarPersona ($rut,$nombreCompleto ){
        
    //validar que los datos sean validos
        
    if (is_string($rut)&&  strlen($rut)>1&&  is_string($nombreCompleto)&&  strlen($nombreCompleto)) {
        $persona = new Persona();
        $persona = setRut($rut);
        $persona = setNombreCompleto($nombreCompleto);
        
        $conexion = DBConnection::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->crearPersona($persona);
    }else{
      echo 'No agregado';  
    } 
    
    }
    
    
    public static function EliminarPersona ($rut){
        $persona = new Persona();
        
        $persona ->setRut($rut);
        
        
        $conexion = DBConnection::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        return $daoPersona ->eliminarPersona($persona);
        
    }
    
    
}
