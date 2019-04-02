<?php

class calculadorDeImpostos
{
    #Padrão strategy
    public function realizaCalculo(Orcamento $orcamento, IImposto $imposto)
    {
        $valor = $imposto->calcula($orcamento);
        echo $valor;
    }
}

?>