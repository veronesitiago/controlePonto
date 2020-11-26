<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Services\BuscaCepService;

class Colaboradores extends Component
{

    public $colaboradores, $name, $data_nascimento, $cpf, $nivel, $cargo, $email, 
    $cep, $endereco, $password, $password_confirmation, $user_id;
    public $isOpen = false;
    
    
    protected $rules = [
            'name' => 'required|max:255',
            'cargo' => 'required|max:255',
            'email' => 'required|email',
            'cpf' => 'required|max:14|unique:users',
            'cep' => 'required|max:8',
            'nivel' => 'required|max:1',
            'password' => 'required',
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render(BuscaCepService $buscaCep)
    {
        $this->colaboradores = User::all();

        return view('livewire.colaboradores', [
            'endereco' => $buscaCep->buscaCep($this->cep)
        ]);
    }

    private function resetInputFields()
    {
        $this->name = ''; 
        $this->data_nascimento = ''; 
        $this->cpf = ''; 
        $this->cargo = ''; 
        $this->nivel = ''; 
        $this->email = ''; 
        $this->cep = ''; 
        $this->endereco = ''; 
        $this->password = ''; 
        $this->password_confirmation = '';
        $this->user_id = '';
    }

    public function create()
    {   
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {
        $this->validate();

        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'data_nascimento' => $this->data_nascimento,
            'cargo' => $this->cargo,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'nivel' => $this->nivel,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 
            $this->user_id ? 'Registro atualizado com sucesso.' : 'Registro cadastrado com sucesso.');
   
        $this->closeModal();
        $this->resetInputFields();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
  
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $usuario->name; 
        $this->data_nascimento = $usuario->data_nascimento; 
        $this->cpf = $usuario->cpf; 
        $this->cargo = $usuario->cargo; 
        $this->nivel = $usuario->nivel; 
        $this->email = $usuario->email; 
        $this->cep = $usuario->cep; 
        $this->endereco = $usuario->endereco;
     
        $this->openModal();
    }
}
