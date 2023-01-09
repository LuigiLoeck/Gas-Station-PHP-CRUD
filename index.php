<?php
session_start();
$_SESSION['aba'] = 1;
include_once('includes/components/cabecalho.php');
include_once('includes/components/header.php');
include_once('includes/logic/funcoes_usuario.php');
include_once('includes/logic/conecta_DB.php');
?>
<title>Menu</title>
</head>

<body>

  <main>
    <div class="text">
      <h2>Bem vindo ao sistema de postos</h2>
      <h3> Usuário Logado: <?php echo $_SESSION['nome']; ?> </h3><br><br>
      <p>CRUD é um acrônimo que se refere a quatro operações básicas que são comumente realizadas em bases de dados ou em aplicações de computador: Criar, Ler, Atualizar e Deletar.</p>
      <p>Este sistema serve para listar, criar, editar, e excluir, dados de preços e bandeiras referente a postos, e a usuários do sistema.</p>
    </div>
    <div class="container">
      <div class="area">
        <a class="card" href="./usuarios.php">
          <div class="card-info">
            <h2>Usuários</h2>
            <p>Sistema de gerenciamento de usuários, com operações CRUDs como: criar um novo usuário, ler informações de um usuário, atualizar informações de um usuário, deletar um usuário.</p>
          </div>
        </a>
        <a class="card" href="./postos.php">
          <div class="card-info">
            <h2>Postos</h2>
            <p>Sistema de gerenciamento de postos, com operações CRUDs como: criar um novo posto, ler informações de um posto, atualizar informações de um posto, deletar um posto.</p>
          </div>
        </a>
        <a class="card" href="./band.php">
          <div class="card-info">
            <h2>Bandeiras</h2>
            <p>Sistema de gerenciamento de bandeiras dos postos, com operações CRUDs como: criar uma nova bandeira, ler informações de uma bandeira, atualizar informações de uma bandeira, deletar uma bandeira.</p>
          </div>
        </a>
        <a class="card" href="./preco.php">
          <div class="card-info">
            <h2>Preços</h2>
            <p>Sistema de gerenciamento de preços dos postos, com operações CRUDs como: inserir preço para um posto, lista de preços dos postos, atualizar informações de um preço, deletar preços.</p>
          </div>
        </a>
      </div>
    </div>
  </main>
</body>

</html>