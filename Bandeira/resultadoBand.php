<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION['aba'] = 4;
include_once('../components/cabecalho.php');
include_once('../logic/funcoes_bandeira.php');
include_once('../logic/conecta_DB.php');
?>
<link rel="stylesheet" href="../../assets/css/main.css">
<title>Bandeira</title>
</head>

<body>
    <main style="margin-top: 0;max-height: 100vh;">
        <div class="container2">
            <div class="text2">
                <h2>Listagem das bandeiras encontrados na pesquisa</h2>
            </div>
            <ul class="menu">
                <li><a href="../../band.php">Voltar</a></li>
                <li><a href="../../Bandeira/pesquisaBand.php">Pesquisar</a></li>
            </ul>
        </div>

        <div class="lista">
            <?php
            if (empty($bandeiras)) {
            ?>
                <section>
                    <h1 style="font-size: 40px;">Não foi encontrado usuários com a pesquisa.</h1>
                </section>
            <?php
            } else { ?>
                <section style="background: none; border: none; box-shadow: none; padding-block: 0; margin-left:300px;">
                    <span>
                        <h2>NOME</h2>
                    </span>
                    <span>
                        <h2>LOGO</h2>
                    </span>
                </section>
                <?php
                foreach ($bandeiras as $band) {
                ?>
                    <section>
                        <span style="margin-left: 300px;">
                            <h2><?php echo $band['nm_band']; ?></h2>
                        </span>
                        <span>
                            <h2><img src="../../images/<?php echo $band['img_band']; ?>" width='100px' height='100px' /></h2>
                        </span>
                        <form action="logica_bandeira.php" method="post">
                            <button type="submit" name="editar" value="<?php echo $band['cod_band']; ?>"> Editar </button>
                            <button type="submit" class="delete" name="deletar" value="<?php echo $band['cod_band']; ?>" onclick="return confirma_excluir()"> Deletar </button>
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