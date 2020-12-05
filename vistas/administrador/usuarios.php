<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/usuarios.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>

</head>

<body>

    <div class="row" id="panel">
        <div class="col-md-12">
            <div class="text-center">
                <h1>Usuarios</h1>
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped text-center">
                    <thead>
                        <th>
                            Nombres
                        </th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Correo</th>
                        <th>Nivel de permiso</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario => $user) : ?>
                            <tr id = "<?php echo $user->usuario_id; ?>">
                                <td>
                                    <?php echo $user->nombres; ?>
                                </td>
                                <td>
                                    <?php echo $user->a_paterno; ?>
                                </td>
                                <td>
                                    <?php echo $user->a_materno; ?>
                                </td>
                                <td><?php echo $user->correo; ?></td>
                                <td><?php echo $user->permiso ?></td>
                                <td>
                                    <form action="../../controladores/EditUsuariosController.php" method="get">
                                        <input type="text" name="id" value="<?php echo $user->usuario_id; ?>" hidden id="usuario_id">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="far fa-eye" title="Editar usuario"></i>
                                            </button>
                                    </form>
                                    <button class="btn btn-sm btn-outline-danger delete">
                                        <i class="far fa-trash-alt" title="Eliminar usuario"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary update_password">
                                        <i class="fas fa-key" title="Asignar contraseña por defecto"></i>
                                    </button>
            </div>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <div class="row">
            <div class="col-md-12 text-center">
                <button <?php
                        if ($disponibles < floatval(0.3)) {
                            echo "";
                        } else {
                            echo "disabled";
                        }; ?> class="btn btn-sm btn-info">
                    anterior
                </button>
                <button <?php
                        if ($disponibles > floatval(0.1)) {
                            echo "";
                        } else {
                            echo "disabled";
                        }; ?> class="btn btn-sm btn-primary">
                    siguiente
                </button>
            </div>
        </div>
        <a href="../vistas/administrador/dashboard.php" class="btn btn-danger">Atras</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="../../assets/js/usuarios.js"></script>
        <script src="../../assets/js/paginado.js"></script>
        <script src="https://kit.fontawesome.com/039cae277a.js" crossorigin="anonymous"></script>
</body>

</html>