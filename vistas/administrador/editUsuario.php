<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Editar usuario</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Datos para editar
            </div>
            <div class="card-body">
                <form action="UpdateUsuario.php" method="post">

                    <label for="role">Nivel de permisos</label>
                    <select name="role" id="role" class="form-control" value="">
                        <option value="1" <?php if ($usuario->permiso === 1) {
                                                echo "selected";
                                            } else {
                                                echo "";
                                            } ?>>Administrador</option>
                        <option value="2" <?php if ($usuario->permiso === 2) {
                                                echo "selected";
                                            } else {
                                                echo "";
                                            } ?>>Vendedor</option>
                        <option value="3" <?php if ($usuario->permiso === 3) {
                                                echo "selected";
                                            } else {
                                                echo "";
                                            } ?>>Comprador</option>
                    </select>
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" value="<?php echo $usuario->nombres ?>" class="form-control" autocomplete="off" required><br>
                    <label for="a_paterno">Apellido paterno</label>
                    <input type="text" name="a_paterno" id="a_paterno" value="<?php echo $usuario->a_paterno ?>" class="form-control" autocomplete="off" required><br>
                    <label for="a_materno">Apellido materno</label>
                    <input type="text" name="a_materno" id="a_materno" value="<?php echo $usuario->a_materno ?>" class="form-control" autocomplete="off" required><br>
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" value="<?php echo $usuario->correo ?>" class="form-control" autocomplete="off" required><br>
            </div>
            <div class="card-footer">
                <input type="submit" value="Guardar" class="btn btn-success form-control">
            </div>
            </form>
        </div>
    </div>

</body>

</html>