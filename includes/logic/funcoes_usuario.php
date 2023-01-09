<?php

function acessarUsuario($conexao, $array)
{
    try {
        $query = $conexao->prepare("select * from usuario where email=? and senha=?");
        if ($query->execute($array)) {
            $usuario = $query->fetch(); //coloca os dados num array $usuario
            if ($usuario) {
                return $usuario;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function inserirUsuario($conexao, $array)
{
    try {
        $query = $conexao->prepare("insert into usuario (nm_pessoa, email, cpf, senha) values (?, ?, ?, ?)");

        $resultado = $query->execute($array);

        return $resultado;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function listarUsuario($conexao)
{
    try {
        $query = $conexao->prepare("SELECT * FROM usuario");
        $query->execute();
        $usuarios = $query->fetchAll();
        return $usuarios;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function deletarUsuario($conexao, $array)
{
    try {
        $query = $conexao->prepare("delete from usuario where cod_pessoa = ?");
        $resultado = $query->execute($array);
        return $resultado;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function buscarUsuario($conexao, $array)
{
    try {
        $query = $conexao->prepare("select * from usuario where cod_pessoa=?");
        if ($query->execute($array)) {
            $usuario = $query->fetch(); //coloca os dados num array $usuario
            return $usuario;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function alterarUsuario($conexao, $array)
{
    try {
        $query = $conexao->prepare("update usuario set nm_pessoa= ?, email = ?, cpf= ?, senha= ? where cod_pessoa = ?");
        $resultado = $query->execute($array);
        return $resultado;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function pesquisarUsuario($conexao, $array, $op)
{

    try {
        switch ($op) {
            case 1:
                $query = $conexao->prepare("select * from usuario where nm_pessoa like ?");
                break;

            case 2:
                $query = $conexao->prepare("select * from usuario where email like ?");
                break;

            case 3:
                $query = $conexao->prepare("select * from usuario where nm_pessoa like ? and email like ?");
                break;

            default:
                break;
        }
        if ($query->execute($array)) {
            $pessoa = $query->fetchAll(); //coloca os dados num array $usuario
            // var_dump($pessoa);
            return $pessoa;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
