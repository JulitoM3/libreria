<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Dashboard</title>

</head> 
<body>
    <?php session_start()?>
       <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <h2>Hola <?php  echo $_SESSION['usuario']; ?></h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/users.svg" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <a href ="all.php" class="form-control btn btn-sm btn-outline-info">Ver todos los usuarios</a>
                        <a href = "buscar.php"  class="form-control btn btn-sm btn-outline-primary">Buscar usuario</a>
                        <a href = "nuevo.php"  class="form-control btn btn-sm btn-outline-success">Ingresar nuevo usuario</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/book.svg" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <a href = "#"  class="form-control btn btn-sm btn-outline-info">Ver todos los libros</a>
                        <a href = "#"  class="form-control btn btn-sm btn-outline-primary">Buscar libro</a>
                        <a href = "#"  class="form-control btn btn-sm btn-outline-success">Ingresar nuevo libro</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/prestamo.svg" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <a href = "#"  class="form-control btn btn-sm btn-outline-success">Stock libros</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/venta.svg" style="width: 105px;">
                    </div>
                    <div class="card-body">
                        <a href = "#"  class="form-control btn btn-sm btn-outline-success">Visualizar ventas</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <formaction="/controladores/LogoutController.php" method="post">
                    <input type="submit" value="Cerrar sesión" class="form-control btn btn-outline-danger">
                </form>
            </div>
        </div>
    </div>
</body>
</html>