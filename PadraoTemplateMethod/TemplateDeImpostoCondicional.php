<?php


namespace Aplicacao\PadraoTemplateMethod;
use Aplicacao\App\Orcamento;
use Aplicacao\PadraoStrategy\IImposto;


abstract class TemplateDeImpostoCondicional implements IImposto
{
    public final function calcula(Orcamento $orcamento){
        if($this->deveUsarOMaximo($orcamento)){
            return $this->taxacaoMaxima();
        }else{
            return $this->taxacaoMinima();
        }
    }

    protected abstract function deveUsarOMaximo(Orcamento $orcamento);
    protected abstract function taxacaoMinima(Orcamento $orcamento);
    protected abstract function taxacaoMaxima(Orcamento $orcamento);
}