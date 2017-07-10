


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                 include_once __DIR__ . "/../../BACKEND/CONTROLLER/MedicoController.php";
        
         
                 if($_SERVER["REQUEST_METHOD"] == "POST") {
    if( isset($_POST["fecha_contratacion"]) && isset($_POST["especialidad"])&& isset($_POST["valor_consulta"]) && isset($_POST["persona_id"])) {

              
                MedicoController::agregarMedico($_POST["fecha_contratacion"], $_POST["especialidad"], $_POST["valor_consulta"], $_POST["persona_id"]);
           
           
      
    }  
}
        
        ?>
        
        <div>
            <form method="POST" action="RegistroMedicos.php">
        	       	
        	<p>Fecha Contratacion</p>
                <input type="date" name="fecha_contratacion" required>
        	
        	<p>Especialidad</p>
        	<input type="text" name="especialidad" required>
        	
        	<p>Valor Consulta</p>
        	
                <input type="number" name="valor_consulta" required>
        	
        	<p>Persona ID</p>
        	
                <input type="number" name="persona_id" required>
                <input type="submit" value="Agregar Medico">
            </form>
        </div>
    </body>
</html>
