<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    desconn();
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    desconn();
    return $usuario;
}

function adicionarUsuario($nome, $email, $sexo) {
    $sql = "INSERT INTO usuario (nome, email, sexo) 
			VALUES ('$nome', '$email', '$sexo')";

    $resultado = mysqli_query(conn(), $sql);
    return  $resultado ? 'Usuario cadastrado com sucesso!' : 'Erro ao cadastrar usuário:';
}

function editarUsuario($id, $nome, $email) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = mysqli_query(conn(), $sql);
    return $resultado ?
            'Usuário alterado com sucesso!' :
            'Erro ao alterar usuário';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE id = $id";
    $resultado = mysqli_query(conn(), $sql);
    return $resultado ?
            'Usuario deletado com sucesso!' :
            'Erro ao deletar usuário';
}
