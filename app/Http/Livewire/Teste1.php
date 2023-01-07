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

        try {

            $valor = floatval($this->preco);

            // if (!$this->photo) {
            //     $this->dispatchBrowserEvent(
            //         'notifyError',
            //         ['enviando evento para front-end']
            //     );
            //     throw new Exception("imagem não inserida", 1);
            // }

            !empty($this->photo) ? $photo_name = str_replace('photos/', '', $this->photo->store('photos')) : $photo_name = '';

            Produto::create([
                'produto' => $this->produto,
                'preco' => $valor,
                'photo' => $photo_name,
                'obs' => $this->obs
            ]);

            $messages = [
                'A blessing in disguise',
                'Bite the bullet',
                'Call it a day',
                'Easy does it',
                'Make a long story short',
                'Miss the boat',
                'To get bent out of shape',
                'Birds of a feather flock together',
                "Don't cry over spilt milk",
                'Good things come',
                'Live and learn',
                'Once in a blue moon',
                'Spill the beans',
            ];


            $this->dispatchBrowserEvent(
                'notifySuccess',
                // $messages[array_rand($messages)]
                ['enviando evento para front-end']
            );
            return;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}