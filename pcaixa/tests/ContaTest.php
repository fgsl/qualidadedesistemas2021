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
}

