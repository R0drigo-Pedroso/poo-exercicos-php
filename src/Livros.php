<?php
class Livros {
        private string $titulo;
        private string $autor;
        private int $paginas=0;
    
    public function __construct($titulo, $autor, $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }
} 