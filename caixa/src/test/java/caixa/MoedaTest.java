package caixa;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

class MoedaTest {

	@Test
	public void converterReaisEmDolar()
	{
		Moeda moeda = new Moeda(1,"BRL");
		assertEquals((float)1/5,moeda.converterPara("USD"));
	}
}
