<?php
namespace App\ChainOfResponsibility\Model;

use App\StrategyPattern\Model\Orcamento;

class Desconto500Reais implements IDesconto
{

    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.1;
        } else {

            return $this->proximo->calcula($orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximo = $proximo;
    }
}

