<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/estilo.css">

        <title>Livros - Biblioteca</title>
    </head>
    <body>
        
        <h1>Livros - Biblioteca</h1>
        <hr>


        <?php
        // require_once 'src/Tecnico.php';
        // require_once 'src/Programacao.php';
        // require_once 'src/Didatico.php';

        require_once realpath("vendor/autoload.php");

            $tecnico = new Biblioteca\Tecnico();
            $programacao = new Biblioteca\Programacao();
            $didatico = new Biblioteca\Didatico();

            // Atribuindo valores aos atributos
            $tecnico->setTitulo("PHP 7");
            $tecnico->setAutor("José da Silva");
            $tecnico->setFormato(["digital", "fisico"]);
            $tecnico->setPaginas(200);

            // Imprimindo os valores dos atributos
            $programacao->setTitulo("Desenvolvimento Web");
            $programacao->setAutor("Paulo Silveira");
            $programacao->setFormato(["fisico"]);
            $programacao->setArea("Tecnologia");



            // Imprimindo os valores dos atributos
            $didatico->setTitulo("PHP 7");
            $didatico->setAutor("José da Silva");
            $didatico->setFormato(["digital", "fisico"]);
            $didatico->setDisciplina("Aprendendo PHP");
            $didatico->setNivel(["Intermediário"]);
        ?>


        <section>
            <div>
                <h2>Tecnico</h2>
                <ul>
                    <li>Título: <?= $tecnico->getTitulo() ?></li>
                    <li>Autor: <?= $tecnico->getAutor() ?></li>
                    <li>Formato: <?= $tecnico->getFormato()?></li>
                    <li>Páginas: <?= $tecnico->getPaginas() ?></li>
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
                    <li>Disciplina: <?= $didatico->getDisciplina()?></li>

                </ul>
            </div>

            <!-- Modo mais simples de fazer polimorfismo -->
            <div>
                <ul>
                    <li>Formata Titulo:<em style="color: blue"> <?= $programacao->formataTitulo()?></em></li>
                    <li>Formata Titulo:<em style="color: blue"> <?= $didatico->formataTitulo()?></em></li>
                    <li>Formata Titulo:<em style="color: blue"> <?= $tecnico->formataTitulo()?></em></li>
                </ul>
            </div>
        </section>

       

    </body>
</html>