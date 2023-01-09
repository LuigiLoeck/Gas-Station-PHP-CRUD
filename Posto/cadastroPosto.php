<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Cadastro</title>
</head>
<?php
include_once('../includes/logic/funcoes_bandeira.php');
include_once('../includes/logic/conecta_DB.php');
$bandeiras = listarBandeira($conexao);
?>

<body>
    <main>
        <form action="../includes/logic/logica_posto.php" method="post" autocomplete="off" id="cadastro">
            <h3>Cadastro</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o nome do posto" name="nome" id="nome">
            <label for="cnpj">CNPJ</label><input class="input" type="text" placeholder="Digite o cnpj do estabelecimento" name="cnpj" id="cnpj">
            <p id="cnpj_txt"></p>
            <label for="endereco">Endereço</label><input class="input" type="text" placeholder="Digite o endereço do posto" name="endereco" id="endereco">
            <label for="nota">Nota: <output id="range"></output></label><input class="input" type="range" placeholder="Avaliação do posto" name="nota" id="nota" min="0" max="5" step="0.1" default="3">
            <label for="band">Bandeira </label><select name="bandeira">
                <?php
                foreach ($bandeiras as $band) {
                ?>
                    <option value="<?php echo $band['cod_band'] ?>"><?php echo $band['nm_band'] ?></option>
                <?php
                } ?>
            </select>
            <button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar">Cadastrar</button>
            <button type="button" onclick="location.href='../postos.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script src="..\assets\js\validacao_posto.js"></script>

</html>