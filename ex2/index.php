<?php

require __DIR__ . "/vendor/autoload.php";

use App\Produto;

$produto = new Produto();
$produto->setNome("mouse");
$produto->setPreco(20.80);
$produto->setQuantidade(3);
$produto->calcularValorTotal();
echo "Produto é " . $produto->getNome()
    . " com preço de " . $produto->getPreco() . ". 
Contém " . $produto->getQuantidade() . " quantidades restantes e o valor total deles é " . $produto->calcularValorTotal() . "\n";

$produto2 = new Produto();
$produto2->setNome("teclado");
$produto2->setPreco(500.00);
$produto2->setQuantidade(4);
$produto2->calcularValorTotal();
echo "Produto é " . $produto2->getNome()
    . " com preço de " . $produto2->getPreco() . ". 
Contém " . $produto2->getQuantidade() . " restantes e o valor total deles é " . $produto2->calcularValorTotal();
