<?php
namespace Caixa;

class Conta
{
    private float $saldo = 0;
    private float $pagamentos = 0;
    
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
    
    public function receberPagamento(Moeda $moeda): void
    {
        $this->pagamentos += $moeda->converterPara('BRL');
    }
    
    public function valorDoTroco(): float
    {
        return $this->pagamentos - $this->saldo;
    }
/**    
    public function adicionarItem(Item $item)
    {
        $this->saldo += 10;    
    }
**/    
}

