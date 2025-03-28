<?php

namespace App\Livewire\Components;

use App\Models\Contato;
use Livewire\Component;

class FormularioContatoCompleto extends Component
{

    public $sucesso = false;

    public $dark = true;

    public int $grid = 1;

    protected $rules = [
        'form.nome' => ['required', 'string', 'max:100'],
        'form.email' => ['required', 'email'],
        'form.telefone' => ['required', 'celular_com_ddd'],
        'form.assunto'  => ['required', 'string', 'max:350'],
        'form.mensagem' => ['required', 'string'],
    ];

    public array $form = [
        'nome'     => '',
        'telefone' =>  '',
    ];


    public function render()
    {
        return view('livewire.components.formulario-contato-completo');
    }

    public function submit()
    {
        $dados = $this->validate()['form'];

        Contato::create($dados);

        $this->reset('form');

        $this->sucesso = true;
    }
}
