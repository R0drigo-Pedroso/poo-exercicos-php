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
    require_once 'src/Livros.php';

    //Criar um objeto
    $livros = new Livros;

    //Atribuir valores
    $livros->titulo = 'PHP com orientação a objetos';
    $livros->autor = 'José da Silva';
    $livros->paginas = 300;
?>

    <h2>Livros (Leitura)</h2>

    <h3>Titulo: <?=$livros->titulo?></h3>
        <p>Autor: <?=$livros->autor?></p>
        <p>Páginas: <?=$livros->paginas?></p>


</body>
</html>