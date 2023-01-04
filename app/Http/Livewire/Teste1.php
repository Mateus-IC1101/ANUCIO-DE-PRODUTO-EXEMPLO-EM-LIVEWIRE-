<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Teste1 extends Component
{
    public $message = 'Mensagem de texte para v-bind';
    protected $rules = [
        'message' => 'required'
    ];
    protected $messages = [
        'message.required' => 'Campo não pode ser vazio'
    ];

    public function render()
    {
        $dados = ['mateus', 'Maria', 'Carlos'];
        return view('livewire.teste1', compact('dados'));
    }
    public function create()
    {
        $this->validate();
        $dados = $this->renderToView();
        dd($dados);
    }
}