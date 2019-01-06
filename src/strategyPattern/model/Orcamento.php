<?php
namespace App\StrategyPattern\Model;

use App\ChainOfResponsibility\Model\Item;

class Orcamento
{

    private $valor;

    private $itens = array();

    function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    public function getItens()
    {
        return $this->itens;
    }
}
