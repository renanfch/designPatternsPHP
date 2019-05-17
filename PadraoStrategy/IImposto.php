<?php
namespace Aplicacao\PadraoStrategy;

use Aplicacao\App\Orcamento;

interface IImposto
{
    public function calcula(Orcamento $orcamento);
}

?>