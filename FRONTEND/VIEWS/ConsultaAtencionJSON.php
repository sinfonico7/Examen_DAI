<?php
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/AtencionController.php";
        include_once __DIR__ . "/../../BACKEND/MODEL/Atencion.php";
        
        /*@var $atencion Atencion*/
        
        $id = $_GET["id"];
        echo AtencionController::getAtencionJSON($id);
  ?>
