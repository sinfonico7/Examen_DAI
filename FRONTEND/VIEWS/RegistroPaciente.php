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
        // put your code here
                session_start();
        
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/PacienteController.php";
        include_once __DIR__."/../../BACKEND/DATA/DBConnection.php";
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST['rut']) && isset($_POST['fecha']) 
                        && isset($_POST['sexo'])&& isset($_POST['direccion']) && isset($_POST['telefono']) ) {
 
    PacienteController::registrarPacientes($_POST["fecha"],$_POST["sexo"],$_POST["direccion"],$_POST["telefono"],$_POST["rut"]);
          
           
      
    }else{
        echo 'no registrado';
    } 
}



?>
        
        
        
        
        <fieldset>
            <legend>Registro de Paciente</legend>
            <form method="POST" action="RegistroPaciente.php" >
                
                        <p>Rut Peciente</p>        
                        <input type="text" name="rut" required oninput="checkRut(this)">

                        <p>Fecha de Nacimiento</p>
                        <input type="date" name="fecha" required>

                        <p>Sexo</p>
                        <select name = "sexo">
                             <option >Seleccione</option>
                             <option >Masculino</option>
                             <option >Femenino</option>
                        </select>

                        <p>Dirección</p>

                        <input type="text" name="direccion" required>

                        <p>Telefono</p>

                        <input type="number" name="telefono" required>
                        
                        <input type="submit" value="Agregar">
               
            </form>
        </fieldset>    
    </body>
</html>
