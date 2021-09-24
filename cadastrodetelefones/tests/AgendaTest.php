<?php
use PHPUnit\Framework\TestCase;
use CadastroDeTelefones\Agenda;
use CadastroDeTelefones\Contato;
use CadastroDeTelefones\AgendaAlternativa;

/**
 *  test case.
 */
class AgendaTest extends TestCase
{
    /**
     * @covers Agenda
     */
    public function testIncluirContatoNaAgenda()
    {
        $agenda = new Agenda();
        $contato = $this->createMock('CadastroDeTelefones\Contato');
        $contato->expects($this->once())->method('gravar');
        $contato->nome = 'Suzana Vieira';
        $contato->telefone = '1156653223';
        $agenda->incluirContato($contato);
    }
    
    public function testIncluirContatoNaAgendaAlternativa()
    {
        $contato = $this->createMock('CadastroDeTelefones\Contato');
        $contato->expects($this->once())->method('setNome')
            ->withConsecutive([$this->stringContains('Suzana')]);
        $contato->expects($this->once())->method('setTelefone')
            ->withConsecutive([$this->stringContains('1156')]);
        $agenda = new AgendaAlternativa($contato);        
        $agenda->incluirContatoCom('Suzana Vieira','1156653223');
    }
}

