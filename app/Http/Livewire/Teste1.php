<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;


use Livewire\Component;

class Teste1 extends Component
{
    use WithFileUploads;

    public $produto;
    public $preco;
    public $obs;
    public $photo;

    protected $rules = [
        'produto' => 'required',
        'preco' => 'required',
        'obs' => 'required|max:10',
        'photo' => 'max:1024'
    ];
    protected $messages = [
        'produto.required' => 'Campo obrigatório',
        'preco.required' => 'Campo obrigatório',
        'obs.required' => 'Campo obrigatório',
        'obs.max' => 'O limite máximo é de caracteres 10 caracters',
        'photo.max' => 'Imagem muito grande. Tente uma resolução igual ou abaixo de 1024'
    ];

    public function render()
    {
        $dados = ['mateus', 'Maria', 'Carlos'];
        return view('livewire.teste1', compact('dados'));
    }

    public function create()
    {
        $this->validate();
        // $dados = $this->renderToView();
        // dd($this->photo);
        // $this->photo->store('photos');
        return;
    }
}