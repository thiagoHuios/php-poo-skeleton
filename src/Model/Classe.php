<?php

declare(strict_types=1);
namespace App\Model;

class classe
{
    private string $nomeClasse;
    private string $descricaoClasse;
    private int $efeitoClasse;

    public function getNomeClasse(): string
    {
        return $this->nomeClasse;
    }

    public function setNomeClasse(string $nomeClasse): void
    {
        $this->nomeClasse = $nomeClasse;
    }

    public function getDescricaoClasse(): string
    {
        return $this->descricaoClasse;
    }

    public function setDescricaoClasse(string $descricaoClasse): void
    {
        $this->descricaoClasse = $descricaoClasse;
    }

    public function getEfeitoClasse(): int
    {
        return $this->efeitoClasse;
    }

    public function setEfeitoClasse(int $efeitoClasse): void
    {
        $this->efeitoClasse = $efeitoClasse;
    }


}