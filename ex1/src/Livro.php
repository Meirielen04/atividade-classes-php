<?php

namespace App;

class Livro {
    public String $titulo;
    public String $autor;
    public int $totalPaginas;
    public int $paginaAtual;

    public function ler(int $paginas) {
        if ($paginas <= 0) {
            return;
        }
        $this->paginaAtual = min($this->paginaAtual + $paginas, $this->totalPaginas);
    }

    public function porcentagemLida() {
        if ($this->totalPaginas <= 0) {
            return 0;
        }
        return ($this->paginaAtual / $this->totalPaginas) * 100;
    }

    public function exibirFicha() {
        $porcentagem = number_format($this->porcentagemLida(), 1);
        return "{$this->titulo} = {$this->autor} | Lidas {$this->paginaAtual} de {$this->totalPaginas} páginas ({$porcentagem}%)";
    }
}
