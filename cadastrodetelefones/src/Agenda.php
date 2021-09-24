<?php
namespace CadastroDeTelefones;

class Agenda
{
    public function incluirContato(Contato $contato)
    {
        $contato->gravar();
    }
}

