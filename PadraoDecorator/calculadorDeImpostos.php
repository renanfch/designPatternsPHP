<?php
namespace Aplicacao\PadraoDecorator;

use Aplicacao\App\Orcamento;

class calculadorDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}

?>