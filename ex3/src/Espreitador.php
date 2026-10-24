<?php

namespace App;

class Espreitador extends Zumbi {
    private bool $escondido;

    function __construct(string $tipo, string $tempoinfeccao, float $velocidade, bool $escondido) {
        parent::__construct($tipo, $tempoinfeccao, $velocidade);

        $this->escondido = $escondido;
    }

    function emboscar(): string {
        if ($this->escondido) {
            $this->escondido = false;
            return "O Espreitador estava escondido e ataca de surpresa!";
        }
        return "O Espreitador já foi visto e não consegue mais emboscar.";
    }
}