package jcaixa;

import junit.framework.TestCase;

public class MoedaTest extends TestCase {
	public void testConverterReaisEmDolar()
	{
		Moeda moeda = new Moeda(1,"BRL");
		assertEquals((float)1/5,moeda.converterPara("USD"));
	}
	
	public void testFormatarReais()
	{
	    Moeda moeda = new Moeda(1,"BRL");
	    assertEquals("R$ 1,00", moeda.exibir());
	}
	
	public void testSomarMoedas()
	{
	    Moeda real = new Moeda(10, "BRL");
	    Moeda dolar = new Moeda(20, "USD");
	    assertEquals(110, (int) real.somar(dolar));
	}
	
}
