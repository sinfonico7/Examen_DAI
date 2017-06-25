<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estado
 *
 * @author bcn
 */
class Estado {
    
    public $idEstado;
    public $nombreEstado;
    function __construct() {
        
    }
    function getIdEstado() {
        return $this->idEstado;
    }

    function getNombreEstado() {
        return $this->nombreEstado;
    }

    function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    function setNombreEstado($nombreEstado) {
        $this->nombreEstado = $nombreEstado;
    }



    
}
