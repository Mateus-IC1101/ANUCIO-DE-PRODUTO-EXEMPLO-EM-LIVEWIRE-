<?php

namespace App\Http\Livewire;

use App\Models\Produto;
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
        return view('livewire.teste1');
    }

    public function create()
    {
        $this->validate();

        $valor = floatval($this->preco);

        Produto::create([
            'produto' => $this->produto,
            'preco' => $valor,
            'obs' => $this->obs
        ]);
        return;
    }
}