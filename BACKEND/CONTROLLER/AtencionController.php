<?php
include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/AtencionDAO.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtencionController
 *
 * @author bcn
 */
class AtencionController {
    
    public static function listarAtencionesRegistradas(){
        $conexion = DBConnection::getConexion();
        $daoAtencion = new AtencionDAO($conexion);
        $atenciones = $daoAtencion->listarAtenciones();
        
        return $atenciones;
    }
    
    public static function agregarAtencion($Estado_ID,$Fecha_Atencion,$Medico_ID,$Paciente_ID) {
        
        $conexion = DBConnection::getConexion();
        $daoAtencion = new AtencionDAO($conexion);
        
        $daoAtencion->crearAtencion($Estado_ID, $Fecha_Atencion, $Medico_ID, $Paciente_ID);
        
    }
    
    
    public static function getAtencionJSON($idAtencion) {
        $conexion = DBConnection::getConexion();
        $daoAtencion = new AtencionDAO($conexion);
        
        $atencion = $daoAtencion->getAtencionJSON($idAtencion);
        
        return $atencion;
    }
    
    //put your code here
}
