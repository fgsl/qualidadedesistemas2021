package jcaixa;

import junit.framework.TestCase;

public class MoedaTest extends TestCase {
	public void testConverterReaisEmDolar()
	{
		Moeda moeda = new Moeda(1,"BRL");
		assertEquals((float)1/5,moeda.converterPara("USD"));
	}
}
