<?php
include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/EstadoDAO.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoController
 *
 * @author bcn
 */
class EstadoController {
    
    public static function ListarEstados(){
      $conexion = DBConnection::getConexion();
        $daoEstado = new EstadoDAO($conexion);
        $estados = $daoEstado->listarEstados();
        
        return $estados;  
    }
    
    
}
