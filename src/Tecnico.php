<?php

require_once 'Livros.php';

class Tecnico extends Livros {
    private array $formato = ["digital", "fisico"];

    public function getFormato(): string {
        return implode (',', $this->formato);
    }

    public function setFormato(array $formato): self{
        $this->formato = $formato;
        return $this;
    }
}