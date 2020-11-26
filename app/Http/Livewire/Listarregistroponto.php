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
                       DATEDIFF(CURDATE(), users.data_nascimento)/365.25 as Idade,
                       mov_pontos.created_at as data_registro
                  FROM mov_pontos
            INNER JOIN users
                    ON mov_pontos.id_colaborador = users.id
                 WHERE mov_pontos.created_at >= '$this->data_inicio 00:00:00'
                   AND mov_pontos.created_at <= '$this->data_fim 23:59:59'; ";
        $dados = DB::select($sql);
        return !empty($dados) ? $dados: [];
    }
}
