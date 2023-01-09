<?php

function inserirBandeira($conexao, $array)
{
  try {
    $query = $conexao->prepare("insert into bandeira (nm_band,img_band) values (?, ?)");

    $resultado = $query->execute($array);

    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function listarBandeira($conexao)
{
  try {
    $query = $conexao->prepare("SELECT * FROM bandeira");
    $query->execute();
    $bandeiras = $query->fetchAll();
    return $bandeiras;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function deletarBandeira($conexao, $array)
{
  try {
    $query = $conexao->prepare("delete from bandeira where cod_band = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function buscarBandeira($conexao, $array)
{
  try {
    $query = $conexao->prepare("select * from bandeira where cod_band=?");
    if ($query->execute($array)) {
      $band = $query->fetch(); //coloca os dados num array $usuario
      return $band;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function alterarBandeira($conexao, $array)
{
  try {
    $query = $conexao->prepare("update bandeira set nm_band= ?, img_band = ? where cod_band = ?");
    $resultado = $query->execute($array);
    return $resultado;
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}

function pesquisarBandeira($conexao, $array)
{

  try {
    $query = $conexao->prepare("select * from bandeira where nm_band like ?");
    if ($query->execute($array)) {
      $bandeiras = $query->fetchAll(); //coloca os dados num array $usuario
      // var_dump($pessoa);
      return $bandeiras;
    } else {
      return false;
    }
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
