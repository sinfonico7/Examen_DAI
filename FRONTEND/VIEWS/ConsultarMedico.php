<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../JS/jquery.js"></script>
        <title></title>
    </head>
    <body>
        
            
            Id Atencion:
            <input type="number" id="id_atencion">
            <br>
            <input id="buton_buscar" type="button" value="Buscar Atencion">
            
            
            <table border="1">
            <thead>
                <tr>
                    <th>Medico ID</th>
                    <th>Fecha Contratacion</th>
                    <th>Id Especialidad</th>
                    <th>Valor Consulta</th>
                    <th>ID Persona</th>
                    
                </tr>
            </thead>
            <tbody>
                 <tr>
                     <td id="columna_estado"></td>
                     <td id="columna_fecha"></td>
                     <td id="columna_id"></td>
                    <td id="columna_medico"> </td>
                    <td id="columna_paciente"></td>
                   
                </tr>
               
            </tbody>
        </table>
           
      
       
        

        
        <br>
        <button onclick="goBack()">Volver</button>
            <script>
            function goBack() {
                window.history.back();
            }
            </script>
            <script type="text/javascript" src="../JS/consulta_medicos.js"></script>
    </body>
</html>