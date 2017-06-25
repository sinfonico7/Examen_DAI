<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author bcn
 */
class Usuario {
   
   public $idUsuario;
   public $rutPersona;
   public $nombreUsuario;
   public $password;
   public $idPerfil;
   
   function __construct() {
       
   }
   
   function getIdUsuario() {
       return $this->idUsuario;
   }

   function getRutPersona() {
       return $this->rutPersona;
   }

   function getNombreUsuario() {
       return $this->nombreUsuario;
   }

   function getPassword() {
       return $this->password;
   }

   function getIdPerfil() {
       return $this->idPerfil;
   }

   function setIdUsuario($idUsuario) {
       $this->idUsuario = $idUsuario;
   }

   function setRutPersona($rutPersona) {
       $this->rutPersona = $rutPersona;
   }

   function setNombreUsuario($nombreUsuario) {
       $this->nombreUsuario = $nombreUsuario;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setIdPerfil($idPerfil) {
       $this->idPerfil = $idPerfil;
   }



   
}
