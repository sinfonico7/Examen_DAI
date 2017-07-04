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
    
    public static function registrarPersona ($rut,$nombreCompleto ){
        
    //validar que los datos sean validos
        
    if (is_string($rut&&  strlen($rut)>1&&  is_string($nombreCompleto)&&  strlen($nombreCompleto))) {
        $persona = new Persona();
        $persona = setRut($rut);
        $persona = setNombreCompleto($nombreCompleto);
        
        $conexion = DBConnection::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->crearPersona($persona);
    }else echo 'No agregado';
    
    }
    
    
}
