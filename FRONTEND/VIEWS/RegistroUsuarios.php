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
        // put your code here
        ?>
        <div>
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
        	<select id="select_perfil" required>
        		<option>Seleccione un  Perfil</option>
        	</select>
        </div>
        
    </body>
</html>
