<?php

require __DIR__ . "/vendor/autoload.php";

use App\Espreitador;
use App\Estalador;
use App\Zumbi;

$zumbi = new Zumbi("Infectado comum", "fase inicial", 3.5);
echo $zumbi->atacar() . "\n";
echo $zumbi->descreverInfeccao() . "\n";

$estalador = new Estalador("Estalador","fase avançada", 2.0, 8.0);
echo $estalador->atacar() . "\n";
echo $estalador->descreverInfeccao() . "\n";
echo $estalador->ecolocalizar() . "\n";

$espreitador = new Espreitador("Espreitador","fase intermediária", 4.0, true);
echo $espreitador->atacar() . "\n";
echo $espreitador->descreverInfeccao() . "\n";
echo $espreitador->emboscar() . "\n";