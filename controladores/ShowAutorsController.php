<?php
require('../modelos/Author.php');
$autor = new Author();
$autores = $autor->getAuthors();
if(is_object($autores)){
    echo json_encode($autores, JSON_PRETTY_PRINT);
}else{
    echo json_encode($autores, JSON_PRETTY_PRINT);
}