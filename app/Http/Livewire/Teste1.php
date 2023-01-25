<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Exception;
use Livewire\WithFileUploads;


use Livewire\Component;

class Teste1 extends Component
{
    use WithFileUploads;

    public $produto;
    public $preco;
    public $obs;
    public $photo;
    public $estados = [];

    private $check_validation_inputs = [];

    protected $rules = [
        'produto' => 'required',
        'preco' => 'required',
        'obs' => 'required|max:5000',
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
        // $this->validate();
        try {

            $valor = floatval($this->preco);

            $this->checkDadosVazios();

            !empty($this->photo) ? $photo_name = str_replace('photos/', '', $this->photo->store('photos')) : $photo_name = '';

            Produto::create([
                'produto' => $this->produto,
                'preco' => $valor,
                'obs' => $this->obs,
                'photo' => $photo_name,
                'estados' => $this->estados,
            ]);


            $this->dispatchBrowserEvent(
                'notifySuccess',
                ['enviando evento para front-end']
            );
            return;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function checkDadosVazios()
    {
        !$this->produto ? array_push($this->check_validation_inputs, 'produto') : false;
        !$this->preco ? array_push($this->check_validation_inputs, 'preco') : false;
        !$this->obs ? array_push($this->check_validation_inputs, 'obs') : false;

        if ($this->check_validation_inputs) {
            $this->dispatchBrowserEvent(
                'notifyValidation',
                ['enviando evento para front-end']
            );
            throw new Exception("Error vazios", 1);
        }
    }
}