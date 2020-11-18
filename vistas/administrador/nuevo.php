<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/CUsuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Crear nuevo usuario</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
                Creación de un nuevo usuario.
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                session_start(); 
                if(isset($_SESSION['registrado']) && boolval($_SESSION['registrado'])){
                    echo '<p class="alert alert-success">' . $_SESSION['message_registrado'] . '</p>';
                }
                
                if(isset($_SESSION['duplicado']) && boolval($_SESSION['duplicado'])){
                    echo '<p class="alert alert-danger text-center">' . $_SESSION['message_duplicado'] . '</p>';
                }
                unset($_SESSION['registrado']);
                unset($_SESSION['message_registrado']);
                unset($_SESSION['duplicado']);
                unset($_SESSION['message_duplicado']);
                ?>
                <div class="card">
                    <div class="card-header text-center">
                        por favor ingresa los datos del nuevo usuario.
                       
                    </div>
                    <div class="card-body">
                        <form action="../../controladores/CreateUsersController.php" method="post">
                            <label for="role">Nivel de permisos</label>
                            <select name="role" id="role" class="form-control">
                                <option value="1">Administrador</option>
                                <option value="2">Vendedor</option>
                                <option value="3">Comprador</option>
                                
                            </select><br><?php 
                                
                                
                                if(isset($_SESSION['bad_role'])){
                                    echo '<p class="alert alert-danger">' . $_SESSION['bad_role'] . '</p>';
                                }
                                
                               
                                unset($_SESSION['bad_role']);
                               
                                ?>
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" autocomplete="off" required><br>
                            <label for="a_paterno">Apellido paterno</label>
                            <input type="text" name="a_paterno" id="a_paterno" class="form-control" autocomplete="off" required><br>
                            <label for="a_materno">Apellido materno</label>
                            <input type="text" name="a_materno" id="a_materno" class="form-control" autocomplete="off" required><br>
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" autocomplete="off" required><br>
                            <label for="pass">Contraseña</label> 
                            <div style="float:right;">
                                <label for="generar" >Contraseña por defecto</label>
                                <input type="checkbox" name="defect" id="defect">
                            </div>
                            <input type="password" name="password" id="pass" class="form-control" autocomplete="off" required><br>
                            <input type="submit" value="Crear" class="form-control btn btn-success" autocomplete="off">
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="dashboard.php" class="btn btn-warning">Atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../../assets/js/passdefecto.js"></script>
</body>
</html>