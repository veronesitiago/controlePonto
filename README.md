# Controle de Ponto

Sistema simples que tem o objetivo de registrar o ponto dos colaboradores pelo navegador.

<p>Existe dois níveis de acesso:</p>
<ol>
    <li>Funcionário</li>
    <li>Gestor</li>
</ol>

## Como instalar e rodar?

Para instalar as dependências:

`composer install`

Importe o arquivo BANCODEDADOS.sql que encontra-se na pasta raiz do projeto, no seu gerenciador de MYSQL favorito.

Para executar localmente: `php artisan serve`

Estará disponível em: http://127.0.0.1:8000/

## Funcionalidades

<p>Acesso Funcionário</p>
<ol>
    <li>Registrar o ponto</li>
    <li>Alterar a senha</li>
</ol>

<p>Acesso Gestor</p>
<ol>
    <li>Listar, Remover, Cadastrar e Editar Funcionários</li>
    <li>Listar todos os registros de pontos dos funcionários</li>
</ol>