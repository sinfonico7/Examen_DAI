
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type='text/javascript' src='../JS/jquery.js'></script>
        <title></title>
    </head>
    <body>
        
        
        <div id="formulario">
            <fieldset>
                <fieldset>
                    <legend>Centro de Consulta de Personas</legend>
                    <p>Ingrese el Rut de la persona a consultar, si esta no se encuentra en los registros sera necesario crearla</p>
                    <form>
                        <p>Rut:</p>
                        <br>
                        <input id="rut" type="text">
                        <input type="button" id="boton_consulta" value="Consultar persona">
                        
                        <p id="nombre_label">Nombre Persona</p>
                        <input id="nombre" type="text">
                        <br>
                        <input type="button" id="boton_agregar" value="Agregar persona">
                        
                    </form>
                </fieldset>
            </fieldset>
        </div>
        <script type='text/javascript' src='../JS/filtro_personas.js'></script>
    </body>
</html>
