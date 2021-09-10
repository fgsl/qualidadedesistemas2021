package jcaixa;
import java.util.HashMap;

class Moeda {
    private float valor;
    private String codigoMoeda;
    private HashMap<String,HashMap<String,Float>> cotacoes = new HashMap<>();
    private HashMap<String,String> simbolos = new HashMap<>();
    
    public Moeda(float valor, String codigoMoeda)
    {
    	HashMap<String,Float> cotacao;    	
        cotacao = new HashMap<>();
        cotacao.put("USD", (float) 0.2);
        cotacao.put("PYG", (float) 5);
    	this.cotacoes.put("BRL", cotacao);
    	cotacao = new HashMap<>();
        cotacao.put("BRL", (float) 5);
        cotacao.put("PYG", (float) 25);
    	this.cotacoes.put("USD", cotacao);
    	cotacao = new HashMap<>();
        cotacao.put("USD", (float) 1/25);
        cotacao.put("BRL", (float) 0.2);
    	this.cotacoes.put("PYG", cotacao); 
    	
    	simbolos.put("BRL","R$");
    	simbolos.put("USD","US$");
    	simbolos.put("PYG","₲");
        
        this.valor = valor;
        this.codigoMoeda = codigoMoeda;
                
    }
    
    public String getCodigoMoeda()
    {
        return this.codigoMoeda;
    }
    
    public float getValor()
    {
        return this.valor;
    }

	public float converterPara(String codigoMoeda){
        float valorConvertido = 
        (this.valor * (float) this.cotacoes.get(this.codigoMoeda).get(codigoMoeda));  	          	    
	    return valorConvertido;
	}
	
	public String exibir()
	{
	    String saida = this.simbolos.get(this.codigoMoeda) + " " + String.format("%.2f",this.valor);
	    return saida;
	}
	
	public float somar(Moeda moeda)
	{
	    float soma = this.valor;
	    
	    soma += (moeda.getValor() *  this.cotacoes.get(moeda.getCodigoMoeda()).get(this.codigoMoeda));
	    return soma;
	}
	
}
