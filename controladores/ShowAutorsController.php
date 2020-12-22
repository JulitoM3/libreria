<?php
require('../modelos/Author.php');
$autor = new Author();
$autores = $autor->getAuthors();

 if(is_array($autores)){
     http_response_code(200);
     echo json_encode($autores, JSON_PRETTY_PRINT);
 }else{
     http_response_code(404);

     echo json_encode($autores, JSON_PRETTY_PRINT);
 }