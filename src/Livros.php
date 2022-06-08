<?php
class Livros {
        public string $titulo;
        public string $autor;
        public int $paginas=0;
    
        public function exibirLivros() {
            echo "Título: {$this->titulo}<br>";
            echo "Autor: {$this->autor}<br>";
            echo "Páginas: {$this->paginas}<br>";
        }
    }