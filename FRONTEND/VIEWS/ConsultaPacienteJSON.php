<?php
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/PacienteController.php";
        
        
        /*@var $atencion Atencion*/
        
        $id = $_GET["id"];
        echo PacienteController::getPacienteJSON($id);
  ?>
