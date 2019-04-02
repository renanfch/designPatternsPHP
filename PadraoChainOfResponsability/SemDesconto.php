<?php

class SemDesconto implements Desconto
{
    public function Desconto(Orcamento $Orcamento){
        return 0;
    }
    public function setProximo(Desconto $proximo)
    {
        //Faz nada
    }
}

?>