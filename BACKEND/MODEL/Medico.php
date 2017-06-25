<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Medico
 *
 * @author bcn
 */
class Medico {
    
    public $idMedico;
    public $fechaContratacion;
    public $especialidad;
    public $vlorConsulta;
    public $idPersona;
    
    function __construct() {
        
    }
    function getIdMedico() {
        return $this->idMedico;
    }

    function getFechaContratacion() {
        return $this->fechaContratacion;
    }

    function getEspecialidad() {
        return $this->especialidad;
    }

    function getVlorConsulta() {
        return $this->vlorConsulta;
    }

    function getIdPersona() {
        return $this->idPersona;
    }

    function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    function setFechaContratacion($fechaContratacion) {
        $this->fechaContratacion = $fechaContratacion;
    }

    function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    function setVlorConsulta($vlorConsulta) {
        $this->vlorConsulta = $vlorConsulta;
    }

    function setIdPersona($idPersona) {
        $this->idPersona = $idPersona;
    }



}
