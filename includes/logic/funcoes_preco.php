<?php

function inserirPreco($conexao, $array)
{
  try {
    $query = $conexao->prepare("insert into preco (gasolina_cm, gasolina_at, etanol, diesel, diesel_at, posto_cod) values (?, ?, ?, ?, ?, ?)");

    $resultado = $query->execute($array);

    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function listarPreco($conexao)
{
  try {
    $query = $conexao->prepare("SELECT preco.*,posto.nm_posto from preco,posto where posto_cod = cod_posto;");
    $query->execute();
    $precos = $query->fetchAll();
    return $precos;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function deletarPreco($conexao, $array)
{
  try {
    $query = $conexao->prepare("delete from preco where cod_preco = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function buscarPreco($conexao, $array)
{
  try {
    $query = $conexao->prepare("select preco.*,posto.nm_posto from preco,posto where cod_preco=? and posto_cod = cod_posto");
    if ($query->execute($array)) {
      $preco = $query->fetch(); //coloca os dados num array $usuario
      return $preco;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function alterarPreco($conexao, $array)
{
  try {
    $query = $conexao->prepare("update preco set gasolina_cm= ?, gasolina_at = ?, etanol= ?, diesel= ?, diesel_at= ?, posto_cod= ? where cod_preco = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function pesquisarPreco($conexao, $array)
{

  try {
    $query = $conexao->prepare("select preco.*,posto.nm_posto from preco,posto where nm_posto like ? and posto_cod = cod_posto");
    if ($query->execute($array)) {
      $preco = $query->fetchAll(); //coloca os dados num array $usuario
      // var_dump($pessoa);
      return $preco;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
