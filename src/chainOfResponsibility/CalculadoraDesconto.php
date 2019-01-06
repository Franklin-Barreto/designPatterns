<?php
namespace App\ChainOfResponsibility;

use App\StrategyPattern\Model\Orcamento;
use App\ChainOfResponsibility\Model\Desconto500Reais;
use App\ChainOfResponsibility\Model\Desconto5Itens;
use App\ChainOfResponsibility\Model\SemDesconto;
use App\ChainOfResponsibility\Model\DescontoPorVendaCasada;

class CalculadoraDesconto
{

    public function calcula(Orcamento $orcamento)
    {
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $descontoVendaCasada = new DescontoPorVendaCasada();
        $semDesconto = new SemDesconto();
        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($descontoVendaCasada);
        $descontoVendaCasada->setProximo($semDesconto);
        return $desconto5Itens->calcula($orcamento);
    }
}

