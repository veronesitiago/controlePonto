<?php

namespace App\Services;

class BuscaCepService
{
    public function buscaCep($cep)
    {
        if (strlen($cep) >= 8) {
            
            # code...
            $url = "http://viacep.com.br/ws/".$cep."/json/";
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);
            $curl_response = curl_exec($curl);
            if ($curl_response === false) {
                $info = curl_getinfo($curl);
                $decoded = ['erro' => '0'];
            }
            curl_close($curl);
            $decoded = json_decode($curl_response);
            
            return $this->normalizaDados($decoded);
        }
    }

    private function normalizaDados($dadosCep)
    {
        if (!($dadosCep instanceof stdClass) || (isset($dadosCep->response->status) && $dadosCep->response->status == 'ERROR')) {
            return 'cep não encontrado...';    
        }

        $endereco = \property_exists($dadosCep, 'logradouro') ? $dadosCep->logradouro : '';
        $endereco .= \property_exists($dadosCep, 'bairro') ? ', ' . $dadosCep->bairro: '';
        $endereco .= \property_exists($dadosCep, 'localidade') ? ' - ' . $dadosCep->localidade: '';
        $endereco .= \property_exists($dadosCep, 'uf') ? '/' . $dadosCep->uf: '';
        
        return $endereco;
        
    }
}
