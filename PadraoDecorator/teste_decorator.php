<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use Aplicacao\App\Orcamento;
use Aplicacao\PadraoDecorator\calculadorDeImpostos;
use Aplicacao\PadraoDecorator\ICMS;
use Aplicacao\PadraoDecorator\ISS;

$orcamento = new Orcamento(400);
$calculadorDeImposto = new calculadorDeImpostos();

echo "ICMS mais ISS <br />";
echo $calculadorDeImposto->calcula($orcamento, new ICMS(new ISS()));
echo "ICMS <br />";
echo $calculadorDeImposto->calcula($orcamento, new ICMS());
echo "ISS <br />";
echo $calculadorDeImposto->calcula($orcamento, new ISS());


?>