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
    
    public function __construct(float $valor, string $codigoMoeda)
    {
        $this->valor = $valor;
        $this->codigoMoeda = $codigoMoeda;
    }

	public function converterPara(string $codigoMoeda){
        $valorConvertido = 
        ($this->valor * $this->cotacoes[$this->codigoMoeda][$codigoMoeda]);  	          	    
	    return $valorConvertido;
	}
}