<?php
require_once('conecta_DB.php');
require_once('funcoes_posto.php');

// var_dump($_POST);
// return(A);
#CADASTRO POSTO
if (isset($_POST['cadastrar'])) {
    session_start();
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $nota = $_POST['nota'];
    $band_cod = $_POST['bandeira'];
    $array = array($nome, $cnpj, $endereco, $nota, $band_cod);
    inserirPosto($conexao, $array);
    header('location:../../postos.php');
}

#DELETAR POSTO
if (isset($_POST['deletar'])) {
    $codposto = $_POST['deletar'];
    $array = array($codposto);
    deletarPosto($conexao, $array);
    header('Location:../../postos.php');
}

#EDITAR POSTO
if (isset($_POST['editar'])) {

    $codposto = $_POST['editar'];
    $array = array($codposto);
    $posto = buscarPosto($conexao, $array);
    require_once('../../Posto/alterarPosto.php');
}

#ALTERAR POSTO
if (isset($_POST['alterar'])) {

    $codposto = $_POST['cod_posto'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $nota = $_POST['nota'];
    $band_cod = $_POST['bandeira'];
    $array = array($nome, $cnpj, $endereco, $nota, $band_cod, $codposto);
    alterarPosto($conexao, $array);

    header('location:../../postos.php');
}

#PESQUISAR POSTO
if (isset($_POST['pesquisar'])) {
    $nome = $_POST['nome'];
    $notamin = $_POST['nota'];
    $notamax = $_POST['nota2'];
    $array = array('%' . $nome . '%', $notamin, $notamax);
    $postos = pesquisarPosto($conexao, $array);
    require_once('../../Posto/resultadoPosto.php');
}
