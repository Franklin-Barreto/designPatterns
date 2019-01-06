<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use App\StrategyPattern\Model\Orcamento;
use App\strategyPattern\CalculadoraDeImpostos;
use App\StrategyPattern\Model\ICMS;
use App\StrategyPattern\Model\ISS;

class CalculaImpostoTest extends TestCase
{

    private $orcamento;

    protected function setUp()
    {
        parent::setUp();
        $this->orcamento = new Orcamento(100);
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->orcamento = null;
    }

    public function testCalculaICMS()
    {
        $icms = new ICMS();
        $this->assertEquals(5, $icms->calcula($this->orcamento), 0.00001);
    }

    public function testCalculaISS()
    {
        $iss = new ISS();
        $this->assertEquals(6, $iss->calcula($this->orcamento), 0.00001);
    }
}

