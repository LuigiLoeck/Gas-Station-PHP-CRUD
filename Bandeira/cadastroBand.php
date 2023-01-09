<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Cadastro</title>
</head>

<body>
    <main>
        <form action="../includes/logic/logica_bandeira.php" method="post" autocomplete="off" id="cadastro" enctype="multipart/form-data">
            <h3>Cadastro</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o nome da marca" name="nome" id="nome">
            <label for="img">Image</label>
            <label for="img" class="" id="imagem">
                <input class="input" type="file" accept="image/png, image/jpg, image/jpeg" name="img" id="img">
                <span id="img_name">Inserir Arquivo</span>
            </label>
            <button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar">Cadastrar</button>
            <button type="button" onclick="location.href='../band.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script src="..\assets\js\validacao_band.js"></script>

</html>