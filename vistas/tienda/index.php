<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/nav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Lecturiosis.</title>
</head>
<body>
<nav>
<ul class="topnav sticky-navbar">
    <li >
       <a href="" class="active">
           Lecturiosis.
       </a>
    </li>
    <li >
        <a href="">Inicio</a>
    </li>
    <li >
        <a href="">Libros</a>
    </li>
    <li >
        <a href="">Autores</a>
    </li>
    <li >
        <a href="">Categorías</a>
    </li>
    <?php session_start()?>
    <?php if(isset($_SESSION['usuario'])): ?>
    <li class="right" style="padding-top:9px">
        <form action="../../controladores/LogoutController.php" method="post">
            <input type="submit" value="Cerrar sesión" class="btn btn-outline-danger">
        </form>
    </li>

    <li class="right">
        <a href="">Mi perfil</a>
    </li>
    <li class="right">
        <a href="">Mis pedidos</a>
    </li>
    <li class="right">
        <a href="">Mis preferidos</a>
    </li>
    <?php else: ?>
    <li class="right">
        <a href="../vistas/login.php">Inicia sesión</a>
        
    </li>
    <?php endif;?>
    
</ul>
</nav>
<h1>
    Adictos a los libros.
    <div class="img">
        <img src="../../assets/imgs/row-of-books.svg" width="700px">
    </div>
</h1>
    <br>
    <div>

        <h2>
            ¡Nuevos títulos!

        </h2>
    </div>
    <br>

    <div>
        <h2>
            Más vendidos
        </h2>
    </div>
    <br>
    <div>
        <h2>
            Más populares
        </h2>
    </div>
    <br>
    <div>
        <h2>
            Electrónicos
        </h2>
    </div>

</body>
</html>