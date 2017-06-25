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
        	<p>Atencion ID</p>
        	<input type="number" name="id_atencion" required>
        	
        	<p>Fecha y Hora Atencion (yyyy-mm-dd)</p>
                <input type="datetime" name="fecha_atencion" required >
        	
        	<p>Paciente ID</p>
                <input type="number" name="paciente_id_atencion" required>
        	
        	<p>Medico ID</p>
        	
        	<input type="number" name="medico_id_atencion" required>
        	        	      	
        	<p>Estado</p>
        	<select id="select_atencion" required>
        		<option>Seleccione un  Estado</option>
        	</select>
        </div>
    </body>
</html>
