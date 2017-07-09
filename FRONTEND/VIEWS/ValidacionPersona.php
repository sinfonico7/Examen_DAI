<?php
        
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/PersonaController.php";
        
        if ($_SERVER["REQUEST_METHOD"]=='POST') {
            if (isset($_POST['rut']) ) {
                if (PersonaController::validarPersona($_POST['rut'])) {
                    echo 'true';
                }else{
                    echo 'false';
                }
                    
                
                
            }
        }
        
        
        