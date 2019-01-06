<?php
use App\StrategyPattern\Model\Orcamento;
use App\ChainOfResponsibility\Model\Item;
use App\ChainOfResponsibility\CalculadoraDesconto;

require_once 'vendor\autoload.php';

$orcamento = new Orcamento(300);
$orcamento->addItem(new Item('Lapis', 75));
$orcamento->addItem(new Item('Caneta', 75));
$orcamento->addItem(new Item('Caderno', 75));
$orcamento->addItem(new Item('Borracha', 75));

$calculdora = new CalculadoraDesconto();
$calculdora->calcula($orcamento);