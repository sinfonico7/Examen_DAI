<?php

include_once __DIR__ . "/../MODEL/Usuario.php";


class UsuarioDAO {
    
    private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    public function buscarUsuarioPorId($idUsuario){
        
       /* @var $usuario Usuario */
        $usuario = null;

        $sentencia = $this->conexion->prepare("
            select 
            *
            from usuario 
            where persona_id= :usuario_id"
             );
        
        $persona_id = $idUsuario;
        $sentencia->bindParam(':usuario_id', $persona_id);
        
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $usuario = new Usuario();
            $usuario->setIdPerfil($registro["ID_Perfil"]);
            $usuario->setRutPersona($registro["ID_Persona"]);
            $usuario->setIdUsuario($registro["ID_Usuario"]);
            $usuario->setNombreUsuario($registro["Nombre_User"]);
            $usuario->setPassword($registro["Password"]);
   
        }
        
        return $usuario;
        
    }
    
    public function eliminarUsuario($idUsuario){
        
         /* @var $usuario Usuario */
        
        $sentencia = $this->conexion->prepare("
            delete 
            from usuario 
            where ID_Usuario = :usuario_id"
                );
        
        $persona_id = $idUsuario;
        $sentencia->bindParam(':usuario_id', $persona_id);
        
        $sentencia->execute();
              
    
      
        
    } 
    
    public function listarUsuarios(){
        
         /* @var $usuario Usuario */
        $usuario = null;
        $usuarios = array();

        $sentencia = $this->conexion->prepare("
            select 
            *
            from usuario 
            ");
        
        
        
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $usuario = new Usuario();
            $usuario->setIdPerfil($registro["ID_Perfil"]);
            $usuario->setRutPersona($registro["ID_Persona"]);
            $usuario->setIdUsuario($registro["ID_Usuario"]);
            $usuario->setNombreUsuario($registro["Nombre_User"]);
            $usuario->setPassword($registro["Password"]);
            array_push($usuarios, $usuario);
   
        }
        
        return $usuarios;
        
    }
    
    public function modificarUsuario($idUsuario){
        
    }
    
    public function crearUsuario($idUsuario,$rutPersona,$nombreUsuario,$password,$idPerfil){
        
                 /* @var $usuario Usuario */
        
        $sentencia = $this->conexion->prepare("
            insert 
            into usuario 
            values(:perfil,:persona,:usuario,:nombre,:pass)"
                );
        
        
        $sentencia->bindParam(':perfil', $idPerfil);
        $sentencia->bindParam(':persona', $rutPersona);
        $sentencia->bindParam(':usuario', $idUsuario);
        $sentencia->bindParam(':nombre', $nombreUsuario);
        $sentencia->bindParam(':pass', $password);
        
        $sentencia->execute();
        
    }
}
