<?php

require_once 'Tecnico.php';

class Didatico extends Tecnico {
    private string $disciplina = "didatico";
    private array $nivel = ["Básico", "Intermediário", "Avançado"];

    // Método construtor - Disciplina
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;

        return $this;
    }
    // Método construtor - Final Disciplina

    // Método construtor - Nivel
    public function getNivel(): string
    {
        return implode (',', $this->nivel);
    }

    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
    // 
}