<?php
namespace App\ChainOfResponsibility\Model;

use App\StrategyPattern\Model\Orcamento;

class Desconto5Itens implements IDesconto
{

    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximo->calcula($orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximo = $proximo;
    }
}

