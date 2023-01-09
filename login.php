<link rel="stylesheet" href="assets/css/login.css">
<title>Login</title>
</head>
<body>
<main>
    <form action="includes/logic/logica_usuario.php" method="post">
        <h3>Login</h3>

        <label for="email">Usuário</label><input type="text" placeholder="Email" name="email" id="email">
        <label for="senha">Senha</label><input type="password" placeholder="Senha" name="senha" id="senha">

        <button type="submit" id='entrar' name='entrar' value="Entrar">Entrar</button>
        <button type="button" onclick="location.href='./Usuario/cadastroUsuario.php'" id='cadastrar' name='cadastrar' value="Cadastro">Cadastro</button>
    </form>
</main>
</body>
</html>