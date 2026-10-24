<?php

namespace App;

class Zumbi {
    // classes de zumbis referenciados da obra The Last of Us
    protected string $tipo;
    protected string $tempoInfeccao;
    protected float $velocidade;

    function __construct(string $tipo, string $tempoInfeccao, float $velocidade) {
        $this->tipo = $tipo;
        $this->tempoInfeccao = $tempoInfeccao;
        $this->velocidade = $velocidade;
    }

    function atacar(): string {
        return "O zumbi do tipo {$this->tipo} ataca com velocidade {$this->velocidade}.";
    }

    function descreverInfeccao(): string {
        return "Este zumbi está na fase de infecção: {$this->tempoInfeccao}.";
    }
}