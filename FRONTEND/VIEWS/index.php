<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        
        session_start();
        include_once __DIR__."/../../BACKEND/DATA/DBConnection.php";
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/UsuarioCOntroller.php";
        $creadorDB = new DBConnection();
        $creadorDB->getConexion();
        
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                
            if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
                
                $idUsuario = $_POST["usuario"];
                $password  = $_POST["contrasena"];      
                
                $usuario = UsuarioCOntroller::validarUsuarioClave($idUsuario, $password);
                
                if ($usuario!=null) {
                    
                    switch ($_SESSION["perfil_sesion"]) {
                        case "director":
                            
                            header("location: ZonaDirector.php");

                            break;
                        case "administrador":
                            header("location: ZonaAdministrador.php");

                            break;
                        case "secretaria":
                            header("location: ZonaSecretaria.php");

                            break;
                        case "paciente":
                            header("location: ZonaPaciente.php");

                            break;

                        default:
                            break;
                    }
                    
                    
                    
                } else {
                    echo 'Usuario invalido';
                }
                
            }
} else {
    echo 'Estas intentando ejecutar sin un metodo POST';
    }
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div>
            <form method="POST" action="index.php">
	        	<fieldset>
                            <legend>Login</legend>
	        		<input type="text" name="usuario">
	        		<br>
	        		<input type="password" name="contrasena">
	        		<br>
	        		<input type="submit" name="aceptar" value="aceptar">
	        		<input type="reset" name="reset" value="cacenlar">
	        	</fieldset>
	        </form>
        </div>
        
    </body>
</html>
