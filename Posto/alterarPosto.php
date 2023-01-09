<link rel="stylesheet" href="../../assets/css/cadastro.css">
<title>Alteração</title>
</head>
<?php
include_once('../logic/funcoes_bandeira.php');
include_once('../logic/conecta_DB.php');
$bandeiras = listarBandeira($conexao);
?>

<body>
    <main>
        <form action="../logic/logica_posto.php" method="post" autocomplete="off" id="cadastro">
            <h3>Alteração</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o nome do posto" name="nome" id="nome" value="<?php echo $posto['nm_posto']; ?>">
            <label for="cnpj">CNPJ</label><input class="input" type="text" placeholder="Digite o cnpj do estabelecimento" name="cnpj" id="cnpj" value="<?php echo $posto['cnpj']; ?>">
            <p id="cnpj_txt"></p>
            <label for="endereco">Endereço</label><input class="input" type="text" placeholder="Digite o endereço do posto" name="endereco" id="endereco" value="<?php echo $posto['endereco']; ?>">
            <label for="nota">Nota: <output id="range"></output></label><input class="input" type="range" placeholder="Avaliação do posto" name="nota" id="nota" min="0" max="5" step="0.1" default="3" value="<?php echo $posto['nota']; ?>">
            <label for="band">Bandeira </label><select name="bandeira">
                <?php
                foreach ($bandeiras as $band) {
                    if ($posto['band_cod'] == $band['cod_band']) {
                ?>
                        <option value="<?php echo $band['cod_band'] ?>" selected><?php echo $band['nm_band'] ?></option>
                    <?php

                    } else {
                    ?>
                        <option value="<?php echo $band['cod_band'] ?>"><?php echo $band['nm_band'] ?></option>
                <?php
                    }
                } ?>
            </select>
            <input type="hidden" id='cod_posto' name='cod_posto' value="<?php echo $posto['cod_posto']; ?>">

            <button type="submit" id='alterar' name='alterar' value="alterar">Alterar</button>
            <button type="button" onclick="location.href='../../postos.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script src="..\..\assets\js\validacao_posto.js"></script>

</html>