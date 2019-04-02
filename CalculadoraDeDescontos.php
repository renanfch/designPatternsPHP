<?php
require "Desconto5Itens.php";
require "Desconto500Reais.php";
class CalculadoraDeDescontos
{
    #Padrão chain of responsability
    /*
     * O padrão Chain of Responsibility cai como uma luva quando temos uma lista de comandos a serem executados de acordo com algum cenário em específico, e sabemos também qual o próximo cenário que deve ser validado, caso o anterior não satisfaça a condição.
        Nesses casos, o Chain of Responsibility nos possibilita a separação de responsabilidades em classes pequenas e enxutas, e ainda provê uma maneira flexível e desacoplada de juntar esses comportamentos novamente.
     */
    public function desconto(Orcamento $Orcamento)
    {
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $semDesconto= new SemDesconto();
        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($desconto500Reais);
        $semDesconto->setProximo($semDesconto);
        $valorDoDesconto = $desconto5Itens->desconto($Orcamento);

        return $valorDoDesconto;
    }
}

?>