<?php
use PHPUnit\Framework\TestCase;
use App\StrategyPattern\Model\Orcamento;

/**
 * test case.
 */
class CalculaDescontoTest extends TestCase
{

    private $orcamento;

    private $calculadoraDesconto;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->orcamento = new Orcamento(500);
        $this->calculadoraDesconto = new CalculadoraDesconto();
        // TODO Auto-generated CalculaDescontoTest::setUp()
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CalculaDescontoTest::tearDown()
        parent::tearDown();
    }

    public function testDesconto500Reais()
    {
        $this->assertEquals(50, $this->calculadoraDesconto->calcula($this->orcamento), 0.00001);
    }
}

