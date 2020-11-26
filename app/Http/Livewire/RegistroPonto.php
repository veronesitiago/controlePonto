<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ponto;
use Illuminate\Support\Facades\Auth;

class RegistroPonto extends Component
{
    public function render()
    {
        return view('livewire.registro-ponto');
    }

    public function store()
    {
        $ponto = new Ponto;
        $ponto->id_colaborador = Auth::user()->id;
        session()->flash('message', 'Ponto registrado com sucesso.');
    }
}
