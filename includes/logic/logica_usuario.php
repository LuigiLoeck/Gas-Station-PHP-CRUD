<?php
require_once('conecta_DB.php');
require_once('funcoes_usuario.php');

#ENTRAR
if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $array = array($email, $senha);
    $pessoa = acessarUsuario($conexao, $array);
    if ($pessoa) {
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['cod_pessoa'] = $pessoa['cod_pessoa'];
        $_SESSION['nome'] = $pessoa['nm_pessoa'];
        $_SESSION['aba'] = 1;
        header('location:../../index.php');
    } else {
        header('location:../../login.php');
    }
}

#CADASTRO USUARIO
if (isset($_POST['cadastrar'])) {
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $array = array($nome, $email, $cpf, $senha);
    inserirUsuario($conexao, $array);
    if (!$_SESSION['logado']) {
        header('location:../../login.php');
    } else {
        header('location:../../usuarios.php');
    }
}

#SAIR
if (isset($_POST['sair'])) {
    session_start();
    session_destroy();
    header('location:../../login.php');
}

#DELETAR USUARIO
if (isset($_POST['deletar'])) {
    $codpessoa = $_POST['deletar'];
    $array = array($codpessoa);
    deletarUsuario($conexao, $array);
    header('Location:../../usuarios.php');
}

#EDITAR USUARIO
if (isset($_POST['editar'])) {

    $codpessoa = $_POST['editar'];
    $array = array($codpessoa);
    $usuario = buscarUsuario($conexao, $array);
    require_once('../../Usuario/alterarUsuario.php');
}

#ALTERAR USUARIO
if (isset($_POST['alterar'])) {

    $codpessoa = $_POST['cod_pessoa'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $array = array($nome, $email, $cpf, $senha, $codpessoa);
    alterarUsuario($conexao, $array);

    header('location:../../usuarios.php');
}

#PESQUISAR USUARIO
if (isset($_POST['pesquisar'])) {
    $email = $_POST['email'];
    $nome = $_POST['nome'];

    if (empty($email)) {
        $array = array('%' . $nome . '%');
        $op = 1;
    } else if (empty($nome)) {
        $array = array('%' . $email . '%');
        $op = 2;
    } else {
        $array = array('%' . $nome . '%', '%' . $email . '%');
        $op = 3;
    }

    $pessoas = pesquisarUsuario($conexao, $array, $op);
    require_once('../../Usuario/resultadoUsuario.php');
}
