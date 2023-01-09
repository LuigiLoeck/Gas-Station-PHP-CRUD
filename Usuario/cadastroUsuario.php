<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Cadastro</title>
</head>
<body>
<main>
    <form action="../includes/logic/logica_usuario.php" method="post" autocomplete="off" id="cadastro">
        <h3>Cadastro</h3>

        <label for="nome">Nome</label><input class="input" type="text" placeholder="Digite o seu Nome Completo" name="nome" id="nome">
        <label for="email">Email</label><input class="input" type="email" placeholder="Digite o seu Email" name="email" id="email">
        <label for="cpf">CPF</label><input class="input" type="text" placeholder="Digite o seu CPF" name="cpf" id="cpf">
        <p id="cpf_txt"></p>
        <label for="senha">Senha</label><input class="input" type="password" placeholder="Digite a Senha" name="senha" id="senha" minlength="6">
        <label for="Cfsenha">Confirma Senha</label><input class="input" type="password" placeholder="Confirma a Senha" name="Cfsenha" id="Cfsenha" minlength="6">
        <p id="senha_txt"></p>

        <button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar">Cadastrar</button>
        <?php 
        session_start();
        if(isset($_SESSION['logado'])){
            ?><button type="button" onclick="location.href='../usuarios.php'" id="voltar">Voltar</button><?php
        } else {
            ?><button type="button" onclick="location.href='../login.php'" id="login">Entrar na conta</button><?php
        }
        ?>
        
    </form>
</main>
</body>
<script src="..\assets\js\validacao_cadastro.js"></script>
</html>