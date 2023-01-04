<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;


use Livewire\Component;

class Teste1 extends Component
{
    use WithFileUploads;

    public $nome;
    public $preco;
    public $obs;
    public $photo;

    protected $rules = [
        'message' => 'required',
        'photo' => 'max:1024'
    ];
    protected $messages = [
        'message.required' => 'Campo não pode ser vazio',
        'message.max' => 'Imagem muito grande. Tente uma resolução igual ou abaixo de 1024'
    ];

    public function render()
    {
        $dados = ['mateus', 'Maria', 'Carlos'];
        return view('livewire.teste1', compact('dados'));
    }

    public function create()
    {
        // $this->validate();
        $dados = $this->renderToView();
        dd($this->photo);
        // $this->photo->store('photos');
    }
}