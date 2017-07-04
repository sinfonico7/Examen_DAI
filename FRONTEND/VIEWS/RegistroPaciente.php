<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        // put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <p>Registro de Pacientes</p>
        	<input type="number" name="pacienteID" required>
        	
        	<p>Fecha de Nacimiento</p>
        	<input type="date" name="fechaNacimiento" required>
        	
        	<p>Sexo</p>
                <select name = "sexo">
                     <option value="Seleccion">Seleccion</option>
                     <option value="masculino">Masculino</option>
                     <option value="femenino">Femenino</option>
                </select>
        	
        	<p>Dirección</p>
        	
        	<input type="text" name="direccion" required>
        	
        	<p>Telefono</p>
        	
        	<input type="number" name="telefono" required>
                <p></p>
                <input type="submit" name="Enviar">
            
            
        </div>
        
    </body>
</html>
