<?php

namespace App\Livewire\Components;

use App\Models\Contato;
use Livewire\Component;

class FormularioContato extends Component
{
    public $sucesso = false;

    protected $rules = [
        'form.nome' => ['required', 'string', 'max:100'],
        'form.telefone' => ['required', 'celular_com_ddd']
    ];

    public array $form = [
        'nome'     => '',
        'telefone' =>  '',
    ];

    public function render()
    {
        return view('livewire.components.formulario-contato');
    }

    public function submit()
    {
        $dados = $this->validate()['form'];

        Contato::create($dados);

        $this->reset('form');

        $this->sucesso = true;
    }
}
