<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistroPonto extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.registro-ponto');
    }

    public function registrar()
    {
        $this->message = 'registrado';
    }
}
