<?php
namespace Aplicacao\PadraoStrategy;

use Aplicacao\App\Orcamento;


class ISS implements IImposto {

    public function calcula(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }

}
?>