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
   require_once 'src/Programacao.php';
   require_once 'src/Didatico.php';

   $tecnico = new Tecnico;
   $programacao = new Programacao;
   $didatico = new Didatico;

    // Atribuindo valores aos atributos
    $tecnico->setTitulo("PHP 7");
    $tecnico->setAutor("José da Silva");
    $tecnico->setFormato(["digital", "fisico"]);

    // Imprimindo os valores dos atributos
    $programacao->setTitulo("PHP 7");
    $programacao->setAutor("José da Silva");
    $programacao->setFormato(["digital", "fisico"]);
    $programacao->setArea("programacao");

    // Imprimindo os valores dos atributos
    $didatico->setTitulo("PHP 7");
    $didatico->setAutor("José da Silva");
    $didatico->setFormato(["digital", "fisico"]);
    $didatico->setDisciplina("Intermediario");
    
?>

<div>
    <h2>Tecnico</h2>
    <ul>
        <li>Título: <?= $tecnico->getTitulo() ?></li>
        <li>Autor: <?= $tecnico->getAutor() ?></li>
        <li>Formato: <?= $tecnico->getFormato()?></li>
    </ul>
</div>

<div>
    <h2>Programação</h2>
    <ul>
        <li>Título: <?= $programacao->getTitulo() ?></li>
        <li>Autor: <?= $programacao->getAutor() ?></li>
        <li>Formato: <?= $programacao->getFormato()?></li>
        <li>Área: <?= $programacao->getArea()?></li>
    </ul>
</div>

<div>
    <h2>Didático</h2>
    <ul>
        <li>Título: <?= $didatico->getTitulo() ?></li>
        <li>Autor: <?= $didatico->getAutor() ?></li>
        <li>Formato: <?= $didatico->getFormato()?></li>
        <li>Área: <?= $programacao->getArea()?></li>
        <li>Disciplina: <?= $didatico->getDisciplina()?></li>
    </ul>
</div>

</body>
</html>