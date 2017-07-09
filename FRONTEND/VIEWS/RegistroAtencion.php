<?php
         include_once __DIR__ . "/../../BACKEND/CONTROLLER/EstadoController.php";
         include_once __DIR__ . "/../../BACKEND/CONTROLLER/AtencionController.php";
         include_once __DIR__."/../../BACKEND/DATA/DBConnection.php";
         
                 if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["id_atencion"]) &&   
       isset($_POST["fecha_atencion"]) && isset($_POST["paciente_id_atencion"]) &&
       isset($_POST["medico_id_atencion"])&& isset($_POST["select_estado"]) && isset($_POST["hora_atencion"])) {

       $fecha_hora = $_POST["fecha_atencion"]." ".$_POST["hora_atencion"].":00";
       
       
           try {
               AtencionController::agregarAtencion($_POST["select_estado"], $fecha_hora,
                       $_POST["id_atencion"], $_POST["medico_id_atencion"], $_POST["paciente_id_atencion"]);
           } catch (Exception $ex) {
               echo $ex->getMessage();
           }
           
      
    }  
}
         
         
         
         
         
         
        ?>

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
        
        
        <div>
            <fieldset>
                <legend>Registro de Atenciones</legend>
                <form method="POST" action="RegistroAtencion.php">
                    
                    <p>Atencion ID</p>
        	<input type="number" name="id_atencion" required>
        	
        	<p>Fecha</p>
                <input type="date" name="fecha_atencion" required >
                
                <p>Hora Atencion</p>
                <input type="time" name="hora_atencion" required >
        	
        	<p>Paciente ID</p>
                <input type="number" name="paciente_id_atencion" required>
        	
        	<p>Medico ID</p>
        	
        	<input type="number" name="medico_id_atencion" required>
        	        	      	
        	<p>Estado</p>
        	<select name="select_estado" required>
        	<option>Seleccione un  Estado</option>
                                    
                    <?php 
                            /* @var $value Estado*/
                            $lista = EstadoController::ListarEstados();
                            foreach ($lista as $value) {
                                
                                 echo '<option>' . $value->getNombreEstado() . '</option>';
                                
                            }
                    
                    ?>
                
        	</select>
                <input type="submit" value="Ingresar Atencion">
                
                </form>
            </fieldset>
            
        	
        </div>
    </body>
</html>
