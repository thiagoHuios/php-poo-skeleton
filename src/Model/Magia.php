<?php

declare(strict_types=1);
namespace App\Model;

class Magia
{
    private string $nomeMagia;
    private string $descricaoMagia;
    private int $efeitoMagia;

    public function getNomeMagia(): string
    {
        return $this->nomeMagia;
    }

    public function setNomeMagia(string $nomeMagia): void
    {
        $this->nomeMagia = $nomeMagia;
    }

    public function getDescricaoMagia(): string
    {
        return $this->descricaoMagia;
    }

    public function setDescricaoMagia(string $descricaoMagia): void
    {
        $this->descricaoMagia = $descricaoMagia;
    }

    public function getEfeitoMagia(): int
    {
        return $this->efeitoMagia;
    }

    public function setEfeitoMagia(int $efeitoMagia): void
    {
        $this->efeitoMagia = $efeitoMagia;
    }



}