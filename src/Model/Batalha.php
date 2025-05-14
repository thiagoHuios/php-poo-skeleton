<?php

declare(strict_types=1);

namespace App\Model;

class Batalha
{
    private heroi $heroi;
    private mostro $mostro;
    private resultado $resultado;
    private int $turno;


    public function __construct(heroi $heroi, mostro $mostro, resultado $resultado, int $turno)
    {
        $this->heroi = $heroi;
        $this->mostro = $mostro;
        $this->resultado = $resultado;
        $this->turno = $turno;
    }


    public function getHeroi(): heroi
    {
        return $this->heroi;
    }

    public function setHeroi(heroi $heroi): void
    {
        $this->heroi = $heroi;
    }

    public function getMostro(): mostro
    {
        return $this->mostro;
    }

    public function setMostro(mostro $mostro): void
    {
        $this->mostro = $mostro;
    }

    public function getResultado(): resultado
    {
        return $this->resultado;
    }

    public function setResultado(resultado $resultado): void
    {
        $this->resultado = $resultado;
    }

    public function getTurno(): int
    {
        return $this->turno;
    }

    public function setTurno(int $turno): void
    {
        $this->turno = $turno;
    }

    
}