 <?php
        include_once __DIR__ . "/../../BACKEND/CONTROLLER/UsuarioCOntroller.php";

  $listadoUsuario = UsuarioCOntroller::ListarUsuarios();
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
                    <th>ID Usuario</th>
                    <th>Nombre User</th>
                    <th>Password</th>
                    <th>Rut Persona</th>
                    <th>Id Perfil</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
               <?php
               
                    foreach($listadoUsuario as $usuario) {
                        /*@var $usuario Usuario */
                ?>
                <tr>
                    <td><?= $usuario->getIdUsuario() ?></td>
                    <td><?= $usuario->getNombreUsuario() ?></td>
                    <td><?= $usuario->getPassword() ?></td>
                    <td><?= $usuario->getRutPersona() ?></td>
                    <td><?= $usuario->getIdPerfil() ?></td>
                    <td><img src= "../IMG/remove-user.png" style="width:25px;height:25px;">
                    <td><img src= "../IMG/refresh_user_man.png" style="width:30px;height:30px;">
                </tr>
                <?php
                    }
                ?>
                    
               
            </tbody>
        </table>
        <a href="RegistroUsuarios.php">Agregar Nuevo Usuario</a>
        <br>
        <button onclick="goBack()">Volver</button>
            <script>
            function goBack() {
                window.history.back();
            }
            </script>
    </body>
</html>
