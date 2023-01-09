<?php
require_once('conecta_DB.php');
require_once('funcoes_bandeira.php');

#CADASTRO BANDEIRA
if (isset($_POST['cadastrar'])) {
    session_start();
    $nome = $_POST['nome'];
    $img = $_FILES['img']['name'];
    $arq_temp = $_FILES['img']['tmp_name'];
    move_uploaded_file($arq_temp, "../../images/$img");
    $array = array($nome, $img);
    inserirBandeira($conexao, $array);
    header('location:../../band.php');
}

#DELETAR BANDEIRA
if (isset($_POST['deletar'])) {
    $codband = $_POST['deletar'];
    $array = array($codband);
    deletarBandeira($conexao, $array);
    header('Location:../../band.php');
}

#EDITAR BANDEIRA
if (isset($_POST['editar'])) {

    $codband = $_POST['editar'];
    $array = array($codband);
    $band = buscarBandeira($conexao, $array);
    require_once('../../Bandeira/alterarBand.php');
}

#ALTERAR BANDEIRA
if (isset($_POST['alterar'])) {

    $codband = $_POST['cod_band'];
    $nome = $_POST['nome'];
    $img_alter = $_POST['img_alter'];
    $img = $_FILES['img']['name'];
    $arq_temp = $_FILES['img']['tmp_name'];
    if (empty($img)) {
        $img = $img_alter;
    } else {
        move_uploaded_file($arq_temp, "../../images/$img");
    }
    $array = array($nome, $img, $codband);
    alterarBandeira($conexao, $array);
    header('location:../../band.php');
}

#PESQUISAR BANDEIRA
if (isset($_POST['pesquisar'])) {
    $nome = $_POST['nome'];
    $array = array('%' . $nome . '%');
    $bandeiras = pesquisarBandeira($conexao, $array);
    require_once('../../Bandeira/resultadoBand.php');
}
