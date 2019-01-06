<?php
namespace App\ChainOfResponsibility\Model;

use App\StrategyPattern\Model\Orcamento;

class DescontoPorVendaCasada implements IDesconto
{

    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if ($this->existe($orcamento, 'Lapis') and $this->existe($orcamento, 'Caneta')) {
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximo->calcula($orcamento);
        }
    }

    private function existe(Orcamento $orcamento, $nomeItem)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeItem) {
                return true;
            }
        }
        return false;
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximo = $proximo;
    }
}

