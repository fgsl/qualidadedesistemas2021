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
}
