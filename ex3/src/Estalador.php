<?php

namespace App;

class Estalador extends Zumbi {
    private float $alcanceLocalizacao;

    function __construct(string $tipo, string $tempoinfeccao, float $velocidade, float $alcanceLocalizacao) {
        parent::__construct($tipo, $tempoinfeccao, $velocidade);

        $this->alcanceLocalizacao = $alcanceLocalizacao;
    }

    function ecolocalizar(): string {
        return "O Estalador emite um clique e ecolocaliza num raio de {$this->alcanceLocalizacao} metros.";
    }
}