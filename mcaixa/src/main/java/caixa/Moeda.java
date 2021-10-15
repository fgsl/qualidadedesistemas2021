package caixa;

import java.util.HashMap;

class Moeda {
    private float valor;
    private String codigoMoeda;
    private HashMap<String,HashMap<String,Float>> cotacoes = new HashMap<String, HashMap<String, Float>>();
    
    public Moeda(float valor, String codigoMoeda)
    {
    	HashMap<String,Float> cotacao;    	
        cotacao = new HashMap<String, Float>();
        cotacao.put("USD", (float) 0.2);
        cotacao.put("PYG", (float) 5);
    	this.cotacoes.put("BRL", cotacao);
    	cotacao = new HashMap<String, Float>();
        cotacao.put("BRL", (float) 5);
        cotacao.put("PYG", (float) 25);
    	this.cotacoes.put("USD", cotacao);
        cotacao.put("USD", (float) 1/25);
        cotacao.put("BRL", (float) 0.2);
    	this.cotacoes.put("PYG", cotacao);    	
        
        this.valor = valor;
        this.codigoMoeda = codigoMoeda;
                
    }

	public float converterPara(String codigoMoeda){
        float valorConvertido = 
        (this.valor * (float) this.cotacoes.get(this.codigoMoeda).get(codigoMoeda));  	          	    
	    return valorConvertido;
	}
}
