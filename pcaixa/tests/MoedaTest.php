<?php
use PHPUnit\Framework\TestCase;

use Caixa\Moeda;

class MoedaTest extends TestCase {
    
    /**
     * @covers Moeda
     */
	public function testConverterReaisEmDolar()
	{
		$moeda = new Moeda(1,'BRL');
		$this->assertEquals(1/5,$moeda->converterPara('USD'));
	}
	
	/**
	 * @covers Moeda
	 */
	public function testConverterReaisEmReais()
	{
	    $moeda = new Moeda(1100,'BRL');
	    $this->assertEquals(1100,$moeda->converterPara('BRL'));
	}
	
	/**
	 * @covers Moeda
	 */
	public function testFormatarReais()
	{
	    $moeda = new Moeda(1,'BRL');
	    $this->assertEquals('R$ 1,00', $moeda->exibir());
	}
	
	/**
	 * @covers Moeda
	 */
	public function testSomarMoedas()
	{
	    $real = new Moeda(10,'BRL');
	    $dolar = new Moeda(20, 'USD');
	    $this->assertEquals(110, $real->somar($dolar));
	}
}
