<?php

include_once __DIR__ . "/../MODEL/Perfil.php";


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilDAO
 *
 * @author bcn
 */
class PerfilDAO {
    
       private  $conexion;


     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
        
    public function buscarPerfilPorId($idPerfil){
        
        /* @var $perfil Usuario */
        $perfil = null;

        $sentencia = $this->conexion->prepare("select * from perfiles where ID_Perfil= :id_perfil");
        
        $persona_id = $idPerfil;
        $sentencia->bindParam(':id_perfil', $persona_id);
        
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $perfil = new Perfil();
            $perfil->setIdPerfil($registro["ID_Perfil"]);
            $perfil->setNombrePerfil($registro["Nombre_Perfil"]);
     
   
        }
        
        return $perfil;
        
    }
    
    public function eliminarPerfil($idPerfil){
        
       
        
        $perfil = $this->conexion->prepare("
            delete 
            from perfiles
            where ID_Perfil = :id_perfiles"
                );
        
        $persona_id = $idPerfil;
        $perfil->bindParam(':id_perfiles', $persona_id);
        
        $perfil->execute();
        
        
    } 
    
    public function listarPerfiles(){
        
         /* @var $perfil Usuario */
        $perfil = null;
        $perfiles = array();

        $sentencia = $this->conexion->prepare("
            select 
            *
            from perfiles 
            ");
        
            
        $sentencia->execute();
              
        while($registro = $sentencia->fetch()) {            
            $perfil = new Perfil();
            $perfil->setIdPerfil($registro["ID_Perfil"]);
            $perfil->setNombrePerfil($registro["Nombre_Perfil"]);
   
            array_push($perfiles, $perfil);
   
        }
        
        return $perfiles;
        
    }
    
    public function modificarPerfile($idPerfil){
        
    }
    
    public function crearPerfil($registro){
        
                
        
       
        $idPerfil = $registro->getIdPerfil();
        $nombrePerfil = $registro->getNombrePerfil();
        
        $sentencia = $this->conexion->prepare("
            insert 
            into perfiles 
            values(:id_perfil,:nombrePerfil)"
                );
        
        
        $sentencia->bindParam(':id_perfil', $idPerfil);
        $sentencia->bindParam(':nombrePerfil', $nombrePerfil);
        
        
        $sentencia->execute();
        
    }
}
