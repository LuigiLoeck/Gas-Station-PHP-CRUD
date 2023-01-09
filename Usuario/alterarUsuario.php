<link rel="stylesheet" href="../../assets/css/cadastro.css">
<title>Alteração</title>
</head>

<body>
    <main>
        <form action="../logic/logica_usuario.php" method="post" autocomplete="off" id="cadastro">
            <h3>Alteração</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o seu Nome Completo" name="nome" id="nome" value="<?php echo $usuario['nm_pessoa']; ?>">
            <label for="email">Email</label><input class="input" type="email" placeholder="Digite o seu Email" name="email" id="email" value="<?php echo $usuario['email']; ?>">
            <label for="cpf">CPF</label><input class="input" type="text" placeholder="Digite o seu CPF" name="cpf" id="cpf" value="<?php echo $usuario['cpf']; ?>">
            <p id="cpf_txt"></p>
            <label for="senha">Senha</label><input class="input" type="password" placeholder="Digite a Senha" name="senha" id="senha" minlength="6" value="<?php echo $usuario['senha']; ?>">
            <label for="Cfsenha">Confirma Senha</label><input class="input" type="password" placeholder="Confirma a Senha" name="Cfsenha" id="Cfsenha" minlength="6" value="<?php echo $usuario['senha']; ?>">
            <p id="senha_txt"></p>
            <input type="hidden" id='cod_pessoa' name='cod_pessoa' value="<?php echo $usuario['cod_pessoa']; ?>">

            <button type="submit" id='alterar' name='alterar' value="alterar">Alterar</button>
            <button type="button" onclick="location.href='../../usuarios.php'" id="voltar">Voltar</button>

        </form>
    </main>
</body>
<script src="..\..\assets\js\validacao_cadastro.js"></script>

</html>