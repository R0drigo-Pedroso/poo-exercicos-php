<?php
class Livros {
        private string $titulo;
        private string $autor;
        private int $paginas=0;
    
        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getPaginas() {
            return $this->paginas;
        }

        public function setPaginas($paginas) {
            $this->paginas = $paginas;
        }
    }