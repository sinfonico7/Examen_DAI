<?php
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/MedicoController.php";
        
        
        /*@var $atencion Atencion*/
        
        $id = $_GET["id"];
        echo MedicoController::getMedicoJSON($id);
  ?>
