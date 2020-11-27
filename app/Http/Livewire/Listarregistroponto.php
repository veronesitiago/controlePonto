<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Listarregistroponto extends Component
{
    public $data_inicio, $data_fim, $registros = [];

    public function render()
    {
        if (!$this->data_inicio) {
            $this->data_inicio = \date_format(new \Datetime(), 'Y-m-d');
        }
        if (!$this->data_fim) {
            $this->data_fim = \date_format(new \Datetime(), 'Y-m-d');
        }

        $this->registros = $this->listarRegistros();

        return view('livewire.listarregistroponto');
    }

    private function listarRegistros()
    {
        $sql = "SELECT users.id,
                       users.name,
                       users.cargo,
                       users.data_nascimento,
                       mov_pontos.created_at as data_registro,
                       refGestor.name as NomeGestor
                  FROM ((mov_pontos
                         INNER JOIN users
                                 ON mov_pontos.id_colaborador = users.id)
                        INNER JOIN users as refGestor
                                ON users.id_gestor = refGestor.id)
                 WHERE mov_pontos.created_at >= '$this->data_inicio 00:00:00'
                   AND mov_pontos.created_at <= '$this->data_fim 23:59:59'; ";
        $dados = DB::select($sql);

        if (!empty($dados)) {
            $dados = array_map(function($registro) {               
                
                $dataNascimento = new \DateTime($registro->data_nascimento );
                $interval = $dataNascimento->diff( new \DateTime( date('Y-m-d') ) );

                return [
                    'id' => $registro->id,
                    'name' => $registro->name,
                    'cargo' => $registro->cargo,
                    'idade' => $interval->format( '%Y anos' ),
                    'data_registro' => \date_format(new \Datetime($registro->data_registro), 'd-m-Y h:n:s'),
                    'NomeGestor' => $registro->NomeGestor
                ];

            }, $dados);
        }

        return !empty($dados) ? $dados: [];
    }
}
