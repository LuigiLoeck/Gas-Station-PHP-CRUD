<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION['aba'] = 2;
include_once('includes/components/cabecalho.php');
include_once('includes/components/header.php');
include_once('includes/logic/funcoes_usuario.php');
include_once('includes/logic/conecta_DB.php');
?>
<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<title>Usuários</title>
</head>

<body>
    <main>
        <div class="container2">
            <div class="text2">
                <h2>Listagem dos usuários</h2>
            </div>
            <ul class="menu">
                <li><a href="./Usuario/cadastroUsuario.php">Cadastrar</a></li>
                <li><a href="./Usuario/pesquisaUsuario.php">Pesquisar</a></li>
            </ul>
        </div>

        <div class="lista">
            <section style="background: none; border: none; box-shadow: none; padding-block: 0; ">
                <span>
                    <h2>NOME</h2>
                </span>
                <span>
                    <h2>EMAIL</h2>
                </span>
                <span style="margin-right: 30%">
                    <h2>CPF</h2>
                </span>
            </section>
            <?php
            $pessoas = listarUsuario($conexao);
            if (empty($pessoas)) {
            ?>
                <section>
                    <p>Não há usuários cadastrados.</p>
                </section>
            <?php
            }
            foreach ($pessoas as $pessoa) {
            ?>
                <section>
                    <span>
                        <h2><?php echo $pessoa['nm_pessoa']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $pessoa['email']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $pessoa['cpf']; ?></h2>
                    </span>
                    <form action="includes/logic/logica_usuario.php" method="post">
                        <button type="submit" name="editar" value="<?php echo $pessoa['cod_pessoa']; ?>"> Editar </button>
                        <button type="submit" class="delete" name="deletar" value="<?php echo $pessoa['cod_pessoa']; ?>" onclick="return confirma_excluir()"> Deletar </button>
                    </form>
                    <br><br>
                </section>
            <?php
            }
            ?>
        </div>
    </main>
</body>
<script type="text/javascript">
    function confirma_excluir() {
        resp = confirm("Confirma Exclusão?")

        if (resp == true) {
            return true;
        } else {
            return false;
        }

    }
</script>

</html>