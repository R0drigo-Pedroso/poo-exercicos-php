<?php

require_once 'Livros.php';

class Tecnico extends Livros {
    private array $formato = ["digital", "fisico"];

    public function getFormato(): string {
        return "<li>". implode (',', $this->formato). "</li>";
    }

    public function setFormato(array $formato): self{
        $this->formato = $formato;
        return $this;
    }
}