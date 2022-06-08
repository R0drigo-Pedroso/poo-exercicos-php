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
    $livro = new Livros;
?>

<pre><?=var_dump($livro)?></pre>

</body>
</html>