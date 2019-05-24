<?php


namespace Aplicacao\PadraoDecorator;
use Aplicacao\App\Orcamento;


abstract class TemplateDeImpostoCondicional extends Imposto
{

    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    public final function calcula(Orcamento $orcamento){
        if($this->deveUsarOMaximo($orcamento)){
            return $this->taxacaoMaxima($orcamento) + $this->calculaOutroImposto($orcamento);
        }else{
            return $this->taxacaoMinima($orcamento) + $this->calculaOutroImposto($orcamento);
        }
    }

    protected abstract function deveUsarOMaximo(Orcamento $orcamento);
    protected abstract function taxacaoMinima(Orcamento $orcamento);
    protected abstract function taxacaoMaxima(Orcamento $orcamento);
}