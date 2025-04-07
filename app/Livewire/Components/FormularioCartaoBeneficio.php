<?php

namespace App\Livewire\Components;

use App\Models\Contato;
use Livewire\Component;
use App\Models\CartaoBeneficio;
use Illuminate\Validation\Rule;

class FormularioCartaoBeneficio extends Component
{
    public $sucesso = false;

    public array $form = [
        'nome'     => '',
        'celular'  => '',
    ];

    public function rules()
    {
        return [
            'form.nome' => ['required', 'string', 'max:100'],
            // 'form.cpf' => ['required', 'cpf', Rule::unique(CartaoBeneficio::class, 'cpf')]
            'form.celular' => ['required', 'celular_com_ddd'],
        ];
    }


    public function submit()
    {
        $dados = $this->validate(attributes: ['form.nome' => 'nome', 'form.cpf' => 'CPF', 'form.celular' => 'celular'])['form'];

        // $dados['cpf'] = preg_replace('/\D+/', '', $dados['cpf']);

        CartaoBeneficio::create($dados);

        $this->reset('form');

        $this->sucesso = true;
    }

    public function render()
    {
        return view('livewire.components.formulario-cartao-beneficio');
    }
}
