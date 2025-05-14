<?php

declare(strict_types=1);
namespace App\Model;

class resultado {

    private string $vencedor;
    private array $log;

    public function getVencedor(): string
    {
        return $this->vencedor;
    }

    public function setVencedor(string $vencedor): void
    {
        $this->vencedor = $vencedor;
    }

    public function getLog(): array
    {
        return $this->log;
    }

    public function setLog(array $log): void
    {
        $this->log = $log;
    }



}