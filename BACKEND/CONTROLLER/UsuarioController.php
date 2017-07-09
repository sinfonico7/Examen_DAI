<?php

include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../model/Usuario.php";
include_once __DIR__."/../DAO/UsuarioDAO.php";
/**
 * Description of UsuarioCOntroller
 *
 * @author bcn
 */
class UsuarioCOntroller {
    
    
    public static function registrarUsuarios ($rutPersona,$nombreUsuario, $password, $confirmacionPassword, $idPerfil){
        
    
        // validar que los datos sean válidos
        if ($password != $confirmacionPassword) {
            return false;
        }
        
        $usuario = new Usuario();        
        $usuario->setIdUsuario("");
        $usuario->setRutPersona($rutPersona);
        $usuario->setNombreUsuario($nombreUsuario);
        $usuario->setIdPerfil($idPerfil);
        
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $usuario->setPassword($hash);
        
        $conexion = DBConnection::getConexion();
        $daoUsuario= new UsuarioDAO($conexion);
        
        return $daoUsuario->crearUsuario($usuario); 
          
    }
    public static function validarUsuarioClave ($idUsuario,$password){
        
        $conexion = DBConnection::getConexion();
        $daoUsuario= new UsuarioDAO($conexion);
        
        $usuario = $daoUsuario->buscarUsuarioPorId($idUsuario);
        
        if($usuario == null)  {
            return false;
        }
        
        
        if(password_verify($password, $usuario->getPassword())) {
            $_SESSION["rut_sesion"] = $usuario->getRutPersona();
            $_SESSION["perfil_sesion"] = $usuario->getIdPerfil();
            return true;
        }else{
            return false;
        }
        
        
          
               
    }
    
    
    
    
}
