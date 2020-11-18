<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                <table class="table table-striped">
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
                            <tr>
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
                                    <button class="btn btn-sm btn-outline-info">Actualizar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>