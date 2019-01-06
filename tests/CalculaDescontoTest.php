<?php
use PHPUnit\Framework\TestCase;
use App\StrategyPattern\Model\Orcamento;
use App\ChainOfResponsibility\CalculadoraDesconto;
use App\ChainOfResponsibility\Model\Item;

/**
 * test case.
 */
class CalculaDescontoTest extends TestCase
{

    private $calculadoraDesconto;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
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
        $orcamento = new Orcamento(600);
        
        $this->assertEquals(60, $this->calculadoraDesconto->calcula($orcamento), 0.00001);
    }

    public function testDesconto5Itens()
    {
        $orcamento = new Orcamento(650);
        $orcamento->addItem(new Item('Lapis', 170));
        $orcamento->addItem(new Item('Caderno', 120));
        $orcamento->addItem(new Item('Borracha', 120));
        $orcamento->addItem(new Item('Caneta', 120));
        $orcamento->addItem(new Item('Régua', 120));
        $this->assertEquals(32.5, $this->calculadoraDesconto->calcula($orcamento), 0.00001);
    }
}

