<?php

include_once __DIR__."/../DATA/DBConnection.php";
include_once __DIR__."/../DAO/MedicoDAO.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MedicoController
 *
 * @author bcn
 */
class MedicoController {
    
     public static function listarMedicosRegistrados(){
        $conexion = DBConnection::getConexion();
        $daoMedico = new MedicoDAO($conexion);
        $medicos = $daoMedico->listarMedicos();
        
        return $medicos;
    }
}
