<?php
require_once('conecta_DB.php');
require_once('funcoes_preco.php');

#CADASTRO PREÇO
if (isset($_POST['cadastrar'])) {
    session_start();
    $gasolina_cm = $_POST['gasolina_cm'];
    $gasolina_at = $_POST['gasolina_at'];
    $etanol = $_POST['etanol'];
    $diesel = $_POST['diesel'];
    $diesel_at = $_POST['diesel_at'];
    $posto_cod = $_POST['cod_posto'];
    $array = array($gasolina_cm, $gasolina_at, $etanol, $diesel, $diesel_at, $posto_cod);
    inserirPreco($conexao, $array);
    header('location:../../preco.php');
}

#DELETAR PREÇO
if (isset($_POST['deletar'])) {
    $codpreco = $_POST['deletar'];
    $array = array($codpreco);
    deletarPreco($conexao, $array);
    header('Location:../../preco.php');
}

#EDITAR PREÇO
if (isset($_POST['editar'])) {

    $codpreco = $_POST['editar'];
    $array = array($codpreco);
    $preco = buscarPreco($conexao, $array);
    require_once('../../Preco/alterarPreco.php');
}

#ALTERAR PREÇO
if (isset($_POST['alterar'])) {

    $codpreco = $_POST['cod_preco'];
    $gasolina_cm = $_POST['gasolina_cm'];
    $gasolina_at = $_POST['gasolina_at'];
    $etanol = $_POST['etanol'];
    $diesel = $_POST['diesel'];
    $diesel_at = $_POST['diesel_at'];
    $posto_cod = $_POST['cod_posto'];
    $array = array($gasolina_cm, $gasolina_at, $etanol, $diesel, $diesel_at, $posto_cod, $codpreco);
    alterarPreco($conexao, $array);

    header('location:../../preco.php');
}

#PESQUISAR PREÇO
if (isset($_POST['pesquisar'])) {
    $nome = $_POST['nome'];
    $array = array('%' . $nome . '%');
    $precos = pesquisarPreco($conexao, $array);
    require_once('../../Preco/resultadoPreco.php');
}
