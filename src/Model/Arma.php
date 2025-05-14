<?php

declare(strict_types=1);

namespace App\Model;

class Arma
{
    private string $nomeArma;
    private int $danoArma;
    private classe $classeArma;
    private magia $magiaArma;
    private string $descricaoArma;

    public function __construct(string $nomeArma, int $danoArma, string $nomeClasse, string $descricaoClasse, int $efeitoClasse, string $nomeMagia, string $descricaoMagia, int $efeitoMagia, string $descricaoArma)
    {
        $this->nomeArma = $nomeArma;
        $this->danoArma = $danoArma;
        $this->classeArma = new Classe($nomeClasse, $descricaoClasse, $efeitoClasse);
        $this->magiaArma = new Magia($nomeMagia, $descricaoMagia, $efeitoMagia);
        $this->$descricaoArma = $descricaoArma;
    }

    public function getNomeArma(): string
    {
        return $this->nomeArma;
    }

    public function setNomeArma(string $nomeArma): void
    {
        $this->nomeArma = $nomeArma;
    }

    public function getDanoArma(): int
    {
        return $this->danoArma;
    }

    public function setDanoArma(int $danoArma): void
    {
        $this->danoArma = $danoArma;
    }

    public function getClasseArma(): classe
    {
        return $this->classeArma;
    }

    public function setClasseArma(classe $classeArma): void
    {
        $this->classeArma = $classeArma;
    }

    public function getMagiaArma(): magia
    {
        return $this->magiaArma;
    }

    public function setMagiaArma(magia $magiaArma): void
    {
        $this->magiaArma = $magiaArma;
    }

    public function getDescricaoArma(): string
    {
        return $this->descricaoArma;
    }

    public function setDescricaoArma(string $descricaoArma): void
    {
        $this->descricaoArma = $descricaoArma;
    }

    public function calcularDanoTotal(): int
{
    return $this->danoArma + $this->magiaArma->getEfeitoMagia();
}
}