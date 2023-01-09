<?php

function inserirPosto($conexao, $array)
{
  try {
    $query = $conexao->prepare("insert into posto (nm_posto,cnpj,endereco,nota,band_cod) values (?, ?, ?, ?, ?)");

    $resultado = $query->execute($array);

    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function listarPosto($conexao)
{
  try {
    $query = $conexao->prepare("SELECT posto.*,bandeira.nm_band from posto,bandeira where band_cod = cod_band;");
    $query->execute();
    $postos = $query->fetchAll();
    return $postos;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function listarPostoSemPreco($conexao)
{
  try {
    $query = $conexao->prepare("SELECT * from posto where cod_posto NOT IN(select posto_cod from preco);");
    $query->execute();
    $postos = $query->fetchAll();
    return $postos;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function deletarPosto($conexao, $array)
{
  try {
    $query = $conexao->prepare("delete from posto where cod_posto = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function buscarPosto($conexao, $array)
{
  try {
    $query = $conexao->prepare("select posto.*,bandeira.nm_band from posto,bandeira where cod_posto=? and cod_band = band_cod");
    if ($query->execute($array)) {
      $posto = $query->fetch(); //coloca os dados num array $usuario
      return $posto;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function alterarPosto($conexao, $array)
{
  try {
    $query = $conexao->prepare("update posto set nm_posto= ?, cnpj = ?, endereco= ?, nota= ?, band_cod= ? where cod_posto = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function pesquisarPosto($conexao, $array)
{

  try {
    $query = $conexao->prepare("select posto.*,bandeira.nm_band from posto,bandeira where nm_posto like ? and nota between ? and ? and band_cod = cod_band");
    if ($query->execute($array)) {
      $posto = $query->fetchAll(); //coloca os dados num array $usuario
      // var_dump($pessoa);
      return $posto;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
