package caixa;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;
import static org.mockito.Mockito.*;

class MoedaTest {

	@Test
	public void converterReaisEmDolar()
	{
		Moeda moeda = new Moeda(1,"BRL");
		assertEquals((float)1/5,moeda.converterPara("USD"));
	}
	
	@Test
	public void converterReaisDubleEmDolar()
	{
		Moeda moeda = mock(Moeda.class);
		when(moeda.converterPara("USD")).thenReturn((float)0.2);
		assertEquals((float)1/5,moeda.converterPara("USD"));
	}
	
}
