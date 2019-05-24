<?php


namespace Aplicacao\PadraoDecorator;


use Aplicacao\App\Orcamento;

class KCV extends TemplateDeImpostoCondicional
{

    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    public function deveUsarOMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 400;
    }

    public function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.5;
    }

    public function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.25;
    }
}