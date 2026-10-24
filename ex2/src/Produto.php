<?php 

namespace App;

class Produto {
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }

    public function setQuantidade(int $quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}