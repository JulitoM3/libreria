<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head> 
<body>
    <?php session_start()?>
        <h1>Bienvenido <?php echo $_SESSION['usuario']?></h1>
        
        <form action="/controladores/LogoutController.php" method="post">
        <input type="submit" value="salir">
        </form>
    
</body>
</html>