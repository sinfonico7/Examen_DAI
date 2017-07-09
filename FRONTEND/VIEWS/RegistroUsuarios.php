<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="../JS/Script.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        
        session_start();
        
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/UsuarioCOntroller.php";
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/PerfilController.php";
        include_once __DIR__."/../../BACKEND/DATA/DBConnection.php";
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["rut_number"]) &&   
       isset($_POST["nombre_usuario"]) && isset($_POST["contrasena"]) &&
       isset($_POST["contrasena_2"])&& isset($_POST["select_perfil"])) {

       
       
       
           try {
               UsuarioCOntroller::registrarUsuarios(
                                                    $_POST["rut_number"], 
                                                    $_POST["nombre_usuario"], 
                                                    $_POST["contrasena"], 
                                                    $_POST["contrasena_2"],
                                                    $_POST["select_perfil"]);
           } catch (Exception $ex) {
               echo $ex->getMessage();
           }
           
      
    }  
}
        
        
        ?>
        <div>
            <fieldset>
            <legend>Registro de Usuarios</legend>
            <form method="POST" action="RegistroUsuarios.php">
        	       	
        	<p>Rut Persona</p>
        	<input type="text" name="rut_number" required oninput="checkRut(this)">
        	
        	<p>Nombre Usuario</p>
        	<input type="text" name="nombre_usuario" required>
        	
        	<p>Contraseña</p>
        	
        	<input type="password" name="contrasena" required>
        	
        	<p>Repita Contraseña</p>
        	
        	<input type="password" name="contrasena_2" required>
        	
        	<p>Perfil</p>
                <select id="select_perfil" name="select_perfil" required>
                    <option>Seleccione un  Perfil</option>
                    <?php 
                            /* @var $value */
                            $lista = PerfilController::listarPerfiles();
                            foreach ($lista as $value) {
                                
                                 echo '<option>' . $value->getNombrePerfil() . '</option>';
                                
                            }
                    
                    ?>
                    
                    
        	</select>
                <br>
                
                  
                
                <input type="submit" value="Agregar Usuario">
            </form>
            </fieldset>
        </div>
        
    </body>
</html>
