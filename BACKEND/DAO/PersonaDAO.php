<?php

include_once __DIR__ . "/../MODEL/Persona.php";
class PersonaDAO {
        
     private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    public function validarPersona($idPersona) {
        /*@var $idPersona string */
        
        try{
            $sentencia = $this->conexion->prepare("select * from persona where RutPersona= :persona_id");
        
            $persona_id = $idPersona;
            $sentencia->bindParam(':persona_id', $persona_id);
            $sentencia->execute();
           
            while($registro = $sentencia->fetch()) {            
                return true;
            }
            return false;
            
        } catch (mysqli_sql_exception $ex){
            echo $ex->getMessage();
            
        } 
     
        
        
    }
    
    public function buscarPersonaPorId($idPersona){
        
         $persona = null;

        $sentencia = $this->conexion->prepare("
            select 
            *
            from persona 
            where persona_id= :persona_id"
                );
        
        $persona_id = $idUsuario;
        $sentencia->bindParam(':persona_id', $persona_id);
        
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $persona = new Persona();
            $persona->setRut($registro["RutPersona"]);
            $persona->setNombreCompleto($registro["Nombre_Completo"]);
         
   
        }
        
        return $persona;
        
    }
    
    public function eliminarPersona($idPersona){
        
         /* @var $usuario Usuario */
        
        $sentencia = $this->conexion->prepare("
            delete 
            from persona 
            where RutPersona = :persona_id"
                );
        
        $persona_id = $idPersona;
        $sentencia->bindParam(':persona_id', $persona_id);
        
        $sentencia->execute();
        
    } 
    
    public function listarPersonas(){
        
         /* @var $persona Persona */
        $persona = null;
        $personas = array();

        $sentencia = $this->conexion->prepare("select * from persona");
                       
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $persona = new Persona();
            $persona->setNombreCompleto($registro["Nombre_Completo"]);
            $persona->setRutPersona($registro["RutPersona"]);
      
            array_push($personas, $persona);
   
        }
        
        return $personas;
        
    }
    
    public function modificarPersona($idPersona){
        
    }
    
    public function crearPersona($registro){
        
        
                 /* @var $registro Persona */
        
        $sentencia = $this->conexion->prepare("
            insert 
            into persona 
            values(:nombreCompleto,:rutPersona)"
                );
        
        $rutPersona = $registro->getRut();
        $nombreCompleto = $registro->getNombreCompleto();
        
        
        $sentencia->bindParam(':rutPersona', $rutPersona);
        $sentencia->bindParam(':nombreCompleto', $nombreCompleto);
        
        
        $sentencia->execute();
        
    }
}
