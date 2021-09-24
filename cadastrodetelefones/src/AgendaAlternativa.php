<?php
namespace CadastroDeTelefones;

class AgendaAlternativa
{
    private $contato;
    
    public function __construct($contato)
    {
        $this->contato = $contato;
    }
    
    public function incluirContatoCom(string $nome, string $telefone)
    {
        $this->contato->setNome($nome);
        $this->contato->setTelefone($telefone);
    }
    
}

