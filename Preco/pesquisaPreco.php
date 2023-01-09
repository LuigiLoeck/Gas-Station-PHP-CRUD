<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Pesquisa</title>
</head>

<body>
    <main>
        <form action="../includes/logic/logica_preco.php" method="post" autocomplete="off" id="cadastro">
            <h3>Pesquisa sobre preços</h3>

            <label for="nome">Nome do posto</label><input class="input" type="text" placeholder="Pesquisa por preços de postos contendo estes caracteres" name="nome" id="nome">

            <button type="submit" id='pesquisar' name='pesquisar' value="Pesquisar">Pesquisar</button>
            <button type="button" onclick="location.href='../preco.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script></script>

</html>