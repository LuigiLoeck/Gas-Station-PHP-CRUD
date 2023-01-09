<link rel="stylesheet" href="../../assets/css/cadastro.css">
<title>Alteração</title>
</head>

<body>
    <main>
        <form action="../logic/logica_bandeira.php" method="post" autocomplete="off" id="cadastro" enctype="multipart/form-data">
            <h3>Alteração</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o nome da marca" name="nome" id="nome" value="<?php echo $band['nm_band']; ?>">
            <label for="img">Image</label>
            <label for="img" class="" id="imagem">
                <input class="input img" type="file" accept="image/png, image/jpg, image/jpeg" name="img" id="img" onchange="loadFile(event)">
                <span id="img_name"><?php echo $band['img_band']; ?></span>
            </label>
            <img id="output" src="../../images/<?php echo $band['img_band']; ?>" width='150px' height='150px' style="margin: 10px 225px">

            <input type="hidden" id='cod_band' name='cod_band' value="<?php echo $band['cod_band']; ?>">
            <input type="hidden" id='img_alter' name='img_alter' value="<?php echo $band['img_band']; ?>">
            <button type="submit" id='alterar' name='alterar' value="alterar">Alterar</button>
            <button type="button" onclick="location.href='../../band.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script src="..\..\assets\js\validacao_band.js"></script>

</html>