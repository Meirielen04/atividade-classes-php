<?php

require __DIR__ . "/vendor/autoload.php";

use App\Livro;

$livro = new Livro();
$livro->titulo = "Harry Potter e a Pedra Filosofal";
$livro->autor = "J.K Rowling";
$livro->totalPaginas = 300;
$livro->paginaAtual = 14;
echo "Foram lidas " . round($livro->porcentagemLida(), 2) . " até agora do livro " . $livro->titulo . "\n";
$livro->ler(20);
echo "página atual é " . $livro->paginaAtual . "\n";

$livro2 = new Livro();
$livro2->titulo = "Harry Potter e a Camera Secreta";
$livro2->autor = "J.K Rowling";
$livro2->totalPaginas = 280;
$livro2->paginaAtual = 18;
$livro2->porcentagemLida();
echo "Foram lidas " . round($livro2->porcentagemLida(), 2) . " até agora do livro " . $livro2->titulo . "\n";
$livro2->ler(20);
echo "página atual é " . $livro2->paginaAtual;
