<?php
namespace App\ChainOfResponsibility\Model;

use App\StrategyPattern\Model\Orcamento;

class SemDesconto implements IDesconto
{

    public function calcula(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(IDesconto $proximo)
    {}
}

