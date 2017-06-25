<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paciente
 *
 * @author bcn
 */
class Paciente {
    
    public $pacienteID;
    public $fechaNacimiento;
    public $sexo;
    public $direccion;
    public $telefono;
    public $personaID;
    
    function __construct() {
        
    }
    
    function getPacienteID() {
        return $this->pacienteID;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getPersonaID() {
        return $this->personaID;
    }

    function setPacienteID($pacienteID) {
        $this->pacienteID = $pacienteID;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setPersonaID($personaID) {
        $this->personaID = $personaID;
    }



}
