<?php

declare(strict_types=1);
namespace App\Model;


class mostro
{
    private string $nomeMostro;
    private int $danoMostro;
    private int $pontosVidaMostro;
    private classe $classeMostro;

    public function __construct(string $nomeMostro, int $danoMostro, int $pontosVidaMostro, string $nomeClasse, string $descricaoClasse, int $efeitoClasse)
    {
        $this->nome = $nome;
        $this->danoMostro = $danoMostro;
        $this->pontosVida = $pontosVida;
        $this->classe = new Classe($nomeClasse, $descricaoClasse, $efeitoClasse);
    }

    public function getNomeMostro(): string
    {
        return $this->nomeMostro;
    }

    public function setNomeMostro(string $nomeMostro): void
    {
        $this->nomeMostro = $nomeMostro;
    }

    public function getDanoMostro(): int
    {
        return $this->danoMostro;
    }

    public function setDanoMostro(int $danoMostro): void
    {
        $this->danoMostro = $danoMostro;
    }

    public function getPontosVidaMostro(): int
    {
        return $this->pontosVidaMostro;
    }

    public function setPontosVidaMostro(int $pontosVidaMostro): void
    {
        $this->pontosVidaMostro = $pontosVidaMostro;
    }

    public function getClasseMostro(): classe
    {
        return $this->classeMostro;
    }

    public function setClasseMostro(classe $classeMostro): void
    {
        $this->classeMostro = $classeMostro;
    }


}