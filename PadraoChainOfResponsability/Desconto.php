<?php
namespace Aplicacao\PadraoChainOfResponsability;

use Aplicacao\App\Orcamento;

    interface Desconto{
        public function desconto(Orcamento $orcamento);
        public function setProximo(Desconto $proximo);
    }
?>