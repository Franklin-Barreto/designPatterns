<?php
namespace App\ChainOfResponsibility\Model;

use App\StrategyPattern\Model\Orcamento;

interface IDesconto
{

    public function calcula(Orcamento $orcamento);

    public function setProximo(IDesconto $proximo);
}

