<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/AtencionController.php";

  $listadoAtencion = AtencionController::listarAtencionesRegistradas();
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
                    <th>Estado</th>
                    <th>Fecha Atencion</th>
                    <th>Id Atencion</th>
                    <th>Medico ID</th>
                    <th>Paciente ID</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
               <?php
               
                    foreach($listadoAtencion as $atencion) {
                        /*@var $atencion Atencion */
                ?>
                <tr>
                    <td><?= $atencion->getEstadoID() ?></td>
                    <td><?= $atencion->getFechaHora() ?></td>
                    <td><?= $atencion->getIdAtencion() ?></td>
                    <td><?= $atencion->getMedicoID() ?></td>
                    <td><?= $atencion->getPacienteID() ?></td>
                    <td><img src= "../IMG/remove-user.png" style="width:25px;height:25px;">
                    <td><img src= "../IMG/refresh_user_man.png" style="width:30px;height:30px;">
                </tr>
                <?php
                    }
                ?>
                    
               
            </tbody>
        </table>
        <a href="RegistroAtencion.php">Agregar Nueva Atencion</a>
        <br>
        <button onclick="goBack()">Volver</button>
            <script>
            function goBack() {
                window.history.back();
            }
            </script>
    </body>
</html>

