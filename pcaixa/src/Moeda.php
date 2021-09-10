<?php

namespace Caixa;

class Moeda {
    private float $valor;
    private string $codigoMoeda;
    private array $cotacoes = [
        'BRL' => [
            'USD' => 0.2,
            'PYG' => 5
        ],
        'USD' => [
            'BRL' => 5,
            'PYG' => 25  
        ],
        'PYG' => [
            'USD' => 1/25, // (1/5)/5,
            'BRL' => 0.2
        ]
    ];
    private array $simbolos = [
        'BRL' => 'R$',
        'USD' => 'US$',
        'PYG' => '₲'
    ]; 
    
    public function __construct(float $valor, string $codigoMoeda)
    {
        $this->valor = $valor;
        $this->codigoMoeda = $codigoMoeda;
    }
    
    public function getCodigoMoeda(): string
    {
        return $this->codigoMoeda;
    }
    
    public function getValor(): string
    {
        return $this->valor;
    }

	public function converterPara(string $codigoMoeda){
	    if ($codigoMoeda == $this->codigoMoeda){
	        return $this->valor;
	    }
        $valorConvertido = 
        ($this->valor * $this->cotacoes[$this->codigoMoeda][$codigoMoeda]);  	          	    
	    return $valorConvertido;
	}
	
	public function exibir()
	{
	    $saida = $this->simbolos[$this->codigoMoeda] . ' ' . str_replace('.',',',number_format($this->valor,2));
	    return $saida;
	}
	
	public function somar(Moeda $moeda)
	{
	    $soma = $this->valor;
	    $soma += ($moeda->getValor() *  $this->cotacoes[$moeda->getCodigoMoeda()][$this->codigoMoeda]);
	    return $soma;
	}
}
