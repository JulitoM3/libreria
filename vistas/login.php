<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <?php
                session_start();
                if (isset($_SESSION['empty'])) {
                    echo '<p class="alert alert-danger">' . $_SESSION['empty_input'] . '</p>';
                    session_destroy();
                }
                ?>
                <div class="card shadow">
                    <div class="card-header">
                        Bienvenido.
                    </div>
                    <div class="card-body">
                        <form action="controladores/LoginController.php" method="post">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control"><br>
                            <input type="submit" value="Iniciar sesión" class="form-control btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>