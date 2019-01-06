<?php
namespace App\ChainOfResponsibility;

use App\ChainOfResponsibility\Model\Desconto500Reais;
use App\ChainOfResponsibility\Model\Desconto5Itens;
use App\ChainOfResponsibility\Model\SemDesconto;
use App\StrategyPattern\Model\Orcamento;

class CalculadoraDesconto
{

    public function calcula(Orcamento $orcamento)
    {
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $semDesconto = new SemDesconto();
        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($semDesconto);
        return $desconto5Itens->calcula($orcamento);
        
    }
}

