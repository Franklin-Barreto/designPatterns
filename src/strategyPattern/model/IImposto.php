<?php
namespace App\StrategyPattern\Model;

interface IImposto
{
    public function calcula(Orcamento $orcamento);
}

