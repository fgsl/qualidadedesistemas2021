<?php
use PHPUnit\Framework\TestCase;

/**
 *  test case.
 */
class ContatoTest extends TestCase 
{
    /**
     * @covers Contato
     */
    public function testIncluirContato()
    {
        $contato = $this->createMock('CadastroDeTelefones\Contato');
        $contato->nome = 'José de Abreu';
        $contato->telefone = '8198897454';
        $contato->method('gravar')->willReturn(1);
        $this->assertEquals(1,$contato->gravar());
    }
}

