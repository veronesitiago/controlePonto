<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class RegistrarColaboradores extends Component
{
    public $colaboradores;    
    public $isOpen = false;
    
    public function render()
    {
        $this->colaboradores = User::all();
        
        return view('livewire.registrar-colaboradores');
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
