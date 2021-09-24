<?php
namespace CadastroDeTelefones;

class Contato
{
    public string $nome;
    public string $telefone;
    
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }
    
    public function gravar()
    {
        
    }
}

