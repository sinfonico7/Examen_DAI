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
    </head>
    <body>
        <?php
        
        session_start();
        
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/UsuarioCOntroller.php";;
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["id_user"]) && isset($_POST["rut_number"]) &&   
       isset($_POST["nombre_usuario"]) && isset($_POST["contrasena"]) &&
       isset($_POST["contrasena_2"])&& isset($_POST["select_perfil"])) {

       $exito = UsuarioCOntroller::registrarUsuarios($_POST["id_user"], 
                                                    $_POST["rut_number"], 
                                                    $_POST["nombre_usuario"], 
                                                    $_POST["contrasena"], 
                                                    $_POST["contrsena_2"],
                                                    $_POST["select_perfil"]);
       
       if($exito) {
           echo 'Usuario registrado';
           
       }  else {
           echo "Persona no registrada";
       }
    }  
}
        
        
        ?>
        <div>
            <fieldset>
            <legend>Registro de Usuarios</legend>
            <form method="POST" action="RegistroUsuarios.php">
        	<p>ID de Usuario</p>
        	<input type="number" name="id_user" required>
        	
        	<p>Rut Persona</p>
        	<input type="number" name="rut_number" required>
        	
        	<p>Nombre Usuario</p>
        	<input type="text" name="nombre_usuario" required>
        	
        	<p>Contraseña</p>
        	
        	<input type="password" name="contrasena" required>
        	
        	<p>Repita Contraseña</p>
        	
        	<input type="password" name="contrasena_2" required>
        	
        	<p>Perfil</p>
                <select id="select_perfil" name="select_perfil" required>
        		<option>Seleccione un  Perfil</option>
        	</select>
            </form>
            </fieldset>
        </div>
        
    </body>
</html>
