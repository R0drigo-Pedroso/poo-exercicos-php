<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - Biblioteca</title>
</head>
<body>
    
    <h1>Livros - Biblioteca</h1>
    <hr>


<?php
   require_once 'src/Tecnico.php';

   $tecnico = new Tecnico;

    // Atribuindo valores aos atributos
    $tecnico->setTitulo("PHP 7");
    $tecnico->setAutor("José da Silva");
    $tecnico->setFormato(["digital", "fisico"]);
?>
 
<ul>
    <li>Título: <?= $tecnico->getTitulo() ?></li>
    <li>Autor: <?= $tecnico->getAutor() ?></li>
    <li>Formato: <?= $tecnico->getFormato()?></li>
</ul>


</body>
</html>