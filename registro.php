<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Regístrate</title>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-md-9">
    <?php
        session_start();
        if(isset($_SESSION['duplicado']) && boolval($_SESSION['duplicado'])){
            echo '<p class="alert alert-danger">'. $_SESSION['message_duplicado'] . '</p>';
        session_destroy();
        }
    ?>
        <div class="card shadow">
            <div class="card-header">
                Nuevo usuario
            </div>
            <div class="card-body">
                <form action="controladores/RegisterUserController.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off"><br>
                    <label for="a_paterno">Apellido Paterno</label>
                    <input type="text" name="a_paterno" id="a_paterno" class="form-control" autocomplete="off"><br>
                    <label for="a_paterno">Apellido Materno</label>
                    <input type="text" name="a_materno" id="a_materno" class="form-control" autocomplete="off"><br>
                    
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" autocomplete="off">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" id="pass" class="form-control" autocomplete="off"><br>
                    <input type="submit" value="Crear cuenta" class="form-control btn btn-outline-success" >
                </form><br>
                <div class="card-footer">
                    <a href="vistas/login.php" class="btn btn-outline-info form-control">Atras</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>