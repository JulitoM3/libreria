<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Recepcionista</title>
</head>

<body>
    <div class="container">

        <br>
        <div class="row">
            <div class="col-md-12">
                <h2>Hola <?php session_start();
                            echo $_SESSION['usuario']; ?></h2>

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
                        <button class="form-control btn btn-sm btn-outline-info">Ver todos los usuarios</button>
                        <button class="form-control btn btn-sm btn-outline-primary">Buscar usuario</button>
                        <button class="form-control btn btn-sm btn-outline-success">Ingresar nuevo usuario</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/book.svg" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <button class="form-control btn btn-sm btn-outline-info">Ver todos los libros</button>
                        <button class="form-control btn btn-sm btn-outline-primary">Buscar libro</button>
                        <button class="form-control btn btn-sm btn-outline-success">Ingresar nuevo libro</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/prestamo.svg" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <button class="form-control btn btn-sm btn-outline-success">Realizar prestamo</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="/assets/imgs/venta.svg" style="width: 105px;">
                    </div>
                    <div class="card-body">
                        <button class="form-control btn btn-sm btn-outline-success">Realizar venta</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <input type="submit" value="Cerrar sesión" class="form-control btn btn-outline-danger">
                </form>
            </div>
        </div>
    </div>
</body>

</html>