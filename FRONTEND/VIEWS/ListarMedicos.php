<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    include_once __DIR__ . "/../../BACKEND/CONTROLLER/MedicoController.php";

    $listadoMedicos = MedicoController::listarMedicosRegistrados();
 ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <table border="1">
            <thead>
                <tr>
                    <th>Medico ID</th>
                    <th>Fecha Contratacion</th>
                    <th>Id Especialidad</th>
                    <th>Valor Consulta</th>
                    <th>Id Persona</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
               <?php
               
                    foreach($listadoMedicos as $medico) {
                        /*@var $medico Medico */
                ?>
                <tr>
                    <td><?= $medico->getIdMedico() ?></td>
                    <td><?= $medico->getFechaContratacion() ?></td>
                    <td><?= $medico->getEspecialidad() ?></td>
                    <td><?= $medico->getVlorConsulta() ?></td>
                    <td><?= $medico->getIdPersona() ?></td>
                    <td><img src= "../IMG/remove-user.png" style="width:25px;height:25px;">
                    <td><img src= "../IMG/refresh_user_man.png" style="width:30px;height:30px;">
                </tr>
                <?php
                    }
                ?>
                    
               
            </tbody>
            
        </table>
        <a href="RegistroMedicos.php">Registrar Nuevo Medico</a>
        <br>
        <button onclick="goBack()">Volver</button>
            <script>
            function goBack() {
                window.history.back();
            }
            </script>
    </body>
</html>
