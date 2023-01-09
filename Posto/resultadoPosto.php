<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION['aba'] = 3;
include_once('../components/cabecalho.php');
include_once('../logic/funcoes_posto.php');
include_once('../logic/conecta_DB.php');
?>
<link rel="stylesheet" href="../../assets/css/main.css">
<title>Postos</title>
</head>

<body>
    <main style="margin-top: 0;max-height: 100vh;">
        <div class="container2">
            <div class="text2">
                <h2>Listagem dos postos encontrados na pesquisa</h2>
            </div>
            <ul class="menu">
                <li><a href="../../postos.php">Voltar</a></li>
                <li><a href="../../Posto/pesquisaPosto.php">Pesquisar</a></li>
            </ul>
        </div>

        <div class="lista">
            <?php
            if (empty($postos)) {
            ?>
                <section>
                    <h1 style="font-size: 40px;">Não foi encontrado postos com a pesquisa.</h1>
                </section>
            <?php
            } else { ?>
                <section style="background: none; border: none; box-shadow: none; padding-block: 0; margin-right:325px;min-width: 1150px;">
                    <span>
                        <h2>NOME</h2>
                    </span>
                    <span>
                        <h2>CNPJ</h2>
                    </span>
                    <span>
                        <h2>ENDEREÇO</h2>
                    </span>
                    <span>
                        <h2>NOTA</h2>
                    </span>
                    <span>
                        <h2>BANDEIRA</h2>
                    </span>
                </section>
                <?php
                foreach ($postos as $posto) {
                ?>
                    <section>
                        <span>
                            <h2><?php echo $posto['nm_posto']; ?></h2>
                        </span>
                        <span>
                            <h2><?php echo $posto['cnpj']; ?></h2>
                        </span>
                        <span>
                            <h2><?php echo $posto['endereco']; ?></h2>
                        </span>
                        <span>
                            <h2><?php echo $posto['nota']; ?></h2>
                        </span>
                        <span>
                            <h2><?php echo $posto['nm_band']; ?></h2>
                        </span>
                        <form action="logica_posto.php" method="post">
                            <button type="submit" name="editar" value="<?php echo $posto['cod_posto']; ?>"> Editar </button>
                            <button type="submit" class="delete" name="deletar" value="<?php echo $posto['cod_posto']; ?>" onclick="return confirma_excluir()"> Deletar </button>
                        </form>
                        <br><br>
                    </section>
            <?php
                }
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