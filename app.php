<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Model\Heroi;
use App\Model\Arma;
use App\Model\Classe;
use App\Model\Magia;
use App\Model\Mostro;
use App\Model\Resultado;
use App\Model\Batalha;

$espada = new Arma(
    "Espada Flamejante", 15,
    "Guerreiro", "Classe de combate corpo a corpo", 2,
    "Fogo", "Dano por queimadura", 3,
    "Espada que solta fogo"
);

$heroi = new Heroi("Arthas", 1, [$espada], 100, "Guerreiro", "Combate direto", 2);
$heroi->setArmaEscolida($espada);

$monstro = new Mostro("Orc", 10, 80, "Brutamontes", "Forte e resistente", 1);

$resultado = new Resultado();
$resultado->setLog([]);

$turno = 1;
$atacantePrimeiro = rand(0, 1) === 0 ? "heroi" : "monstro";

echo "⚔️ Início da Batalha entre {$heroi->getNomeHeroi()} e {$monstro->getNomeMostro()}!\n";
$log = [];

while ($heroi->getVidaHeroi() > 0 && $monstro->getPontosVidaMostro() > 0) {
    $log[] = "🔁 Turno {$turno}";

    if ($atacantePrimeiro === "heroi") {
        $danoBase = $heroi->getArmaEscolida()->calcularDanoTotal();
        $bonusClasse = $heroi->getClasse()->getEfeitoClasse();
        $danoTotal = $danoBase + $bonusClasse;
        $reduzClasse = $monstro->getClasseMostro()->getEfeitoClasse();
        $danoTotal -= $reduzClasse;
        $danoTotal = max(0, $danoTotal);
        $novoPV = $monstro->getPontosVidaMostro() - $danoTotal;
        $monstro->setPontosVidaMostro($novoPV);
        $log[] = "🗡️ {$heroi->getNomeHeroi()} ataca com {$heroi->getArmaEscolida()->getNomeArma()} causando {$danoTotal} de dano!";
        $log[] = "🧟 {$monstro->getNomeMostro()} agora tem {$novoPV} de vida.";

        if ($novoPV <= 0) {
            $log[] = "🏆 {$heroi->getNomeHeroi()} venceu!";
            $resultado->setVencedor($heroi->getNomeHeroi());
            break;
        }

        $dano = $monstro->getDanoMostro();
        $novaVida = $heroi->getVidaHeroi() - $dano;
        $heroi->setVidaHeroi($novaVida);
        $log[] = "👹 {$monstro->getNomeMostro()} ataca causando {$dano} de dano!";
        $log[] = "🛡️ {$heroi->getNomeHeroi()} agora tem {$novaVida} de vida.";

        if ($novaVida <= 0) {
            $log[] = "💀 {$monstro->getNomeMostro()} venceu!";
            $resultado->setVencedor($monstro->getNomeMostro());
            break;
        }

    } else {
        $dano = $monstro->getDanoMostro();
        $novaVida = $heroi->getVidaHeroi() - $dano;
        $heroi->setVidaHeroi($novaVida);
        $log[] = "👹 {$monstro->getNomeMostro()} ataca causando {$dano} de dano!";
        $log[] = "🛡️ {$heroi->getNomeHeroi()} agora tem {$novaVida} de vida.";

        if ($novaVida <= 0) {
            $log[] = "💀 {$monstro->getNomeMostro()} venceu!";
            $resultado->setVencedor($monstro->getNomeMostro());
            break;
        }

        $danoBase = $heroi->getArmaEscolida()->calcularDanoTotal();
        $bonusClasse = $heroi->getClasse()->getEfeitoClasse();
        $danoTotal = $danoBase + $bonusClasse;
        $reduzClasse = $monstro->getClasseMostro()->getEfeitoClasse();
        $danoTotal -= $reduzClasse;
        $danoTotal = max(0, $danoTotal);
        $novoPV = $monstro->getPontosVidaMostro() - $danoTotal;
        $monstro->setPontosVidaMostro($novoPV);
        $log[] = "🗡️ {$heroi->getNomeHeroi()} contra-ataca com {$heroi->getArmaEscolida()->getNomeArma()} causando {$danoTotal} de dano!";
        $log[] = "🧟 {$monstro->getNomeMostro()} agora tem {$novoPV} de vida.";

        if ($novoPV <= 0) {
            $log[] = "🏆 {$heroi->getNomeHeroi()} venceu!";
            $resultado->setVencedor($heroi->getNomeHeroi());
            break;
        }
    }

    $turno++;
}

$resultado->setLog($log);

echo "\n=== 🎉 Resultado da Batalha ===\n";
echo "🏅 Vencedor: " . $resultado->getVencedor() . "\n";
echo "📜 Log de combate:\n";

foreach ($resultado->getLog() as $linha) {
    echo $linha . PHP_EOL;
}
