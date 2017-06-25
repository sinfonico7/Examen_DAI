<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author bcn
 */
class Persona {
    
    public $rut;
    public $nombreCompleto;
    
    function __construct() {
        
    }
    
    function getRut() {
        return $this->rut;
    }

    function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombreCompleto($nombreCompleto) {
        $this->nombreCompleto = $nombreCompleto;
    }


    
}
