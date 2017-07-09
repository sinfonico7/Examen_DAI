<?php

include_once __DIR__ . "/../../BACKEND/CONTROLLER/PacienteController.php";

  $listadoPaciente = PacienteController::listarPacientesRegistrados();
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
                    <th>Paciente ID</th>
                    <th>Persona ID</th>
                    <th>Fecha Nacimiento</th>
                    <th>Direccion</th>
                    <th>Sexo</th>
                    <th>Telefono</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
               <?php
               
                    foreach($listadoPaciente as $paciente) {
                        /*@var $paciente Paciente */
                ?>
                <tr>
                    <td><?= $paciente->getPacienteID() ?></td>
                    <td><?= $paciente->getPersonaID() ?></td>
                    <td><?= $paciente->getFechaNacimiento() ?></td>
                    <td><?= $paciente->getDireccion() ?></td>
                    <td><?= $paciente->getSexo() ?></td>
                    <td><?= $paciente->getTelefono() ?></td>
                    <td><img src= "../IMG/remove-user.png" style="width:25px;height:25px;">
                    <td><img src= "../IMG/refresh_user_man.png" style="width:30px;height:30px;">
                </tr>
                <?php
                    }
                ?>
                    
               
            </tbody>
            
        </table>
        <a href="RegistroPaciente.php">Agregar Nuevo Paciente</a>
        <br>
        <button onclick="goBack()">Volver</button>
            <script>
            function goBack() {
                window.history.back();
            }
            </script>
    </body>
</html>