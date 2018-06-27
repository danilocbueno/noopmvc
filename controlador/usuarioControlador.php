<?php

require "modelo/usuarioModelo.php";
require "servicos/correiosServico.php";

/** anon */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $email, $sexo));
        redirect("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirect("usuario/index");
}

/** admin */
function editar($id) {
    if(ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirect("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}

/** @papel('admin') @method('POST') */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

function frete($cep) {
    $val = (calcular_frete('18202000', '18208450', 2, 0, '41106'));
    var_dump($val);
}