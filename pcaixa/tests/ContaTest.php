<?php

use PHPUnit\Framework\TestCase;
use Caixa\Conta;
use Caixa\Moeda;

/**
 *  test case.
 */
class ContaTest extends TestCase
{
    /**
     * @covers Conta
     */
    public function testPagamentoDaConta()
    {
        $conta = new Conta();
        $conta->setSaldo(130);
        $reais = new Moeda(20,'BRL');
        $conta->receberPagamento($reais);
        $guaranis = new Moeda(50,'PYG');
        $conta->receberPagamento($guaranis);
        $dolares = new Moeda(10,'USD');
        $conta->receberPagamento($dolares);
        
        $this->assertEquals(-50,$conta->valorDoTroco());
    }
    
    /**
     * @covers Conta
     */
    public function testPagamentoDaContaDuble()
    {
        $conta = $this->createMock('Caixa\Conta');
        $conta->method('valorDoTroco')->willReturn((float)30);
        
        $this->assertEquals(30,$conta->valorDoTroco());
    }
    
    /**
     * @covers Conta
     * @covers Moeda
     */
    public function testPagamentoDaContaComMoedaDuble()
    {
        $conta = new Conta();
        $conta->setSaldo(130);
        $reais = $this->createMock('Caixa\Moeda');
        $reais->method('converterPara')->willReturn((float)20);
        $conta->receberPagamento($reais);
        $guaranis = $this->createMock('Caixa\Moeda');
        $guaranis->method('converterPara')->willReturn((float)10);
        $conta->receberPagamento($guaranis);
        $dolares = $this->createMock('Caixa\Moeda');
        $dolares->method('converterPara')->willReturn((float)50);
        $conta->receberPagamento($dolares);
        
        $this->assertEquals(-50,$conta->valorDoTroco());
    }
}

