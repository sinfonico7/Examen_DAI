<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        include_once __DIR__."/../../BACKEND/DATA/DBConnection.php";
        $creadorDB = new DBConnection();
        $creadorDB->getConexion();
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div>
	        <form method="POST" action="#">
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
