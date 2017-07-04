<?php

include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/PerfilDAO.php";
/**
 * Description of PerfilController
 *
 * @author bcn
 */
class PerfilController {
    
    public static function listarPerfiles(){
        $conexion = DBConnection::getConexion();
        $daoPerfil = new PerfilDAO($conexion);
        
        return $daoPerfil->listarPerfiles();
        
        
    }
    
    public static function crearPerfil ($idPerfil,$nombrePerfil){
        
        //validar que los datos sean validos
        if (is_string($idPerfil)&&  strlen($idPerfil)>=1&&  is_string($nombrePerfil)) {
         $perfil = new Perfil();
         $perfil->setIdPerfil($idPerfil);
         $perfil->setNombrePerfil($nombrePerfil);
         
         $conexion = DBConnection::getConexion();
         $daoPerfil = new PerfilDAO($conexion);
         return $daoPerfil->crearPerfil($registro);
         
        }else echo 'Perfil no creado';
        
    }
    
    
    public static function eliminarPerfil ($idPerfil){
        
        $perfil = new Perfil();
        $perfil->setIdPerfil($idPerfil);
        
        $conexion = DBConnection::getConexion();
        $daoPerfil = new PerfilDAO($conexion);
        
        return $daoPerfil->eliminarPerfil($perfil);
        
    }
    
    
    
    
}
