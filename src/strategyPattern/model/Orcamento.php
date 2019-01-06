<?php
namespace App\StrategyPattern\Model;

class Orcamento
{

    private $valor;

    function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}
