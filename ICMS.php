<?php

class ICMS implements IImposto
{

    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

}

?>