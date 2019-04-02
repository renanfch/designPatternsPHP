<?php
function autoload($class)
{
    include $class . ".php";
}

spl_autoload_register("autoload");

$orcamento = new Orcamento(501);

$icms = new ICMS();

$iss = new ISS();

$calculadorDeImposto = new calculadorDeImpostos();

echo $calculadorDeImposto->realizaCalculo($orcamento, $icms);
echo "<br />";
echo $calculadorDeImposto->realizaCalculo($orcamento, $iss);

//Descontos
echo '<br />';
echo 'Testes de descontos';
echo '<br />';
$calculadeDescontos = new CalculadoraDeDescontos();

echo 'Desconto';
echo '<br />';
$orcamento->addItem(new Item("Tijolo", 250));
$orcamento->addItem(new Item("Cimento", 250));
echo $calculadeDescontos->desconto($orcamento);
echo '<br />';

?>