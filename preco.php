<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION['aba'] = 5;
include_once('includes/components/cabecalho.php');
include_once('includes/components/header.php');
include_once('includes/logic/funcoes_preco.php');
include_once('includes/logic/conecta_DB.php');
?>
<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
<title>Preços</title>
</head>

<body>

    <main>
        <div class="container2">
            <div class="text2">
                <h2>Listagem dos preços</h2>
            </div>
            <ul class="menu">
                <li><a href="./Preco/cadastroPreco.php">Cadastrar</a></li>
                <li><a href="./Preco/pesquisaPreco.php">Pesquisar</a></li>
            </ul>
        </div>

        <div class="lista">
            <section style="background: none; border: none; box-shadow: none; padding-block: 0; margin-right:325px;">
                <span>
                    <h2>POSTO</h2>
                </span>
                <span>
                    <h2>GASOLINA COMUM</h2>
                </span>
                <span>
                    <h2>GASOLINA ADTIVADA</h2>
                </span>
                <span>
                    <h2>ETANOL</h2>
                </span>
                <span>
                    <h2>DIESEL</h2>
                </span>
                <span>
                    <h2>DIESEL ADTIVADA</h2>
                </span>
            </section>
            <?php
            $precos = listarPreco($conexao);
            if (empty($precos)) {
            ?>
                <section>
                    <p>Não há preços cadastrados.</p>
                </section>
            <?php
            }
            foreach ($precos as $preco) {
            ?>
                <section>
                    <span>
                        <h2><?php echo $preco['nm_posto']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $preco['gasolina_cm']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $preco['gasolina_at']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $preco['etanol']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $preco['diesel']; ?></h2>
                    </span>
                    <span>
                        <h2><?php echo $preco['diesel_at']; ?></h2>
                    </span>
                    <form action="includes/logic/logica_preco.php" method="post">
                        <button type="submit" name="editar" value="<?php echo $preco['cod_preco']; ?>"> Editar </button>
                        <button type="submit" class="delete" name="deletar" value="<?php echo $preco['cod_preco']; ?>" onclick="return confirma_excluir()"> Deletar </button>
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