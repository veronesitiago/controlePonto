<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Services\BuscaCepService;

class Colaboradores extends Component
{
    public $colaboradores, $cep;
    public $isOpen = false;
    
    public function render(BuscaCepService $buscaCep)
    {
        $this->colaboradores = User::all();

        return view('livewire.colaboradores', [
            'endereco' => $buscaCep->buscaCep($this->cep)
        ]);
    }

    public function create()
    {
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
  
    public function closeModal()
    {
        $this->isOpen = false;
    }
}
