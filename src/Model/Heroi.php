<?php

declare(strict_types=1);

namespace App\Model;

class heroi
{
    private string $nomeHeroi;
    private int $nivelHeroi;
    private array $armasHeroi;
    private arma $armaEscolida;
    private int $vidaHeroi;
    private classe $classe;

    public function __construct(string $nomeHeroi, int $nivelHeroi, array $armasHeroi, int $vidaHeroi, string $nomeClasse, string $descricaoClasse, int $efeitoClasse)
    {
        $this->nomeHeroi = $nomeHeroi;
        $this->nivelHeroi = $nivelHeroi;
        $this->armasHeroi = $armasHeroi;
        $this->vidaHeroi = $vidaHeroi;
        $this->classe = new Classe($nomeClasse, $descricaoClasse, $efeitoClasse);
    }

    public function getNomeHeroi(): string
    {
        return $this->nomeHeroi;
    }

    public function setNomeHeroi(string $nomeHeroi): void
    {
        $this->nomeHeroi = $nomeHeroi;
    }

    public function getNivelHeroi(): int
    {
        return $this->nivelHeroi;
    }

    public function setNivelHeroi(int $nivelHeroi): void
    {
        $this->nivelHeroi = $nivelHeroi;
    }

    public function getArmasHeroi(): array
    {
        return $this->armasHeroi;
    }

    public function setArmasHeroi(array $armasHeroi): void
    {
        $this->armasHeroi = $armasHeroi;
    }

    public function getArmaEscolida(): arma
    {
        return $this->armaEscolida;
    }

    public function setArmaEscolida(arma $armaEscolida): void
    {
        $this->armaEscolida = $armaEscolida;
    }

    public function getVidaHeroi(): int
    {
        return $this->vidaHeroi;
    }

    public function setVidaHeroi(int $vidaHeroi): void
    {
        $this->vidaHeroi = $vidaHeroi;
    }

    public function getClasse(): classe
    {
        return $this->classe;
    }

    public function setClasse(classe $classe): void
    {
        $this->classe = $classe;
    }


}