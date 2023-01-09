<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Pesquisa</title>
</head>

<body>
    <main>
        <form action="../includes/logic/logica_usuario.php" method="post" autocomplete="off" id="cadastro">
            <h3>Pesquisa sobre usuários</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Pesquisa por nome contendo estes caracteres" name="nome" id="nome">
            <label for="email">Email</label><input class="input" type="text" placeholder="Pesquisa por email contendo estes caracteres" name="email" id="email">

            <button type="submit" id='pesquisar' name='pesquisar' value="Pesquisar">Pesquisar</button>
            <button type="button" onclick="location.href='../usuarios.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script></script>

</html>