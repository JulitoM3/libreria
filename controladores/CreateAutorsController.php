<?php
require('../modelos/Author.php');

$nombre = htmlspecialchars($_POST['nombre']);
$a_paterno = htmlspecialchars($_POST['ap_pat']);
$a_materno = htmlspecialchars($_POST['ap_mat']);
$nobel = htmlspecialchars($_POST['nobel']);

echo $nombre . $a_paterno . $a_materno . $nobel;
//$autores = Author::createAutor();
