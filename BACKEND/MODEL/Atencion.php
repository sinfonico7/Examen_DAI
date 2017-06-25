<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atencion
 *
 * @author bcn
 */
class Atencion {
    
    public $idAtencion;
    public $fechaHora;
    public $pacienteID;
    public $medicoID;
    public $estadoID;
    function __construct() {
        
    }
    function getIdAtencion() {
        return $this->idAtencion;
    }

    function getFechaHora() {
        return $this->fechaHora;
    }

    function getPacienteID() {
        return $this->pacienteID;
    }

    function getMedicoID() {
        return $this->medicoID;
    }

    function getEstadoID() {
        return $this->estadoID;
    }

    function setIdAtencion($idAtencion) {
        $this->idAtencion = $idAtencion;
    }

    function setFechaHora($fechaHora) {
        $this->fechaHora = $fechaHora;
    }

    function setPacienteID($pacienteID) {
        $this->pacienteID = $pacienteID;
    }

    function setMedicoID($medicoID) {
        $this->medicoID = $medicoID;
    }

    function setEstadoID($estadoID) {
        $this->estadoID = $estadoID;
    }



    
}
