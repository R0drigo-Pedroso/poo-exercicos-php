<?php

namespace Biblioteca;

require_once 'Tecnico.php';
class Programacao extends Tecnico {
    private string $area = "programacao";
    
    public function formataTitulo() {
        echo "<b>". mb_strtoupper($this->getTitulo()) . "</b>";
    }

    public function getArea(): string {
        return $this->area;
    }

    public function setArea(string $area): self {
        $this->area = $area;

        return $this;
    }
}