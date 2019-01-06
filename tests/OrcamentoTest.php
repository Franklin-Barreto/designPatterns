<?php
use PHPUnit\Framework\TestCase;
use App\StrategyPattern\Model\Orcamento;

class OrcamentoTest extends TestCase
{

    public function testOrcamento()
    {
        $orcamento = new Orcamento(100);
        $this->assertEquals(new Orcamento(100), $orcamento);
    }
}

