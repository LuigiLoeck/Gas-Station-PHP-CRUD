<?php 
    // session_start();
    $aba = $_SESSION['aba']
?>
<header>
    <nav id="nav_top">
            <a class="<?php if($aba==1){echo "active";} ?>" href="./index.php">Inicio</a>
            <a class="<?php if($aba==2){echo "active";} ?>" href="./usuarios.php">Usuários</a>
            <a class="<?php if($aba==3){echo "active";} ?>" href="./postos.php">Postos</a>
            <a class="<?php if($aba==4){echo "active";} ?>" href="./band.php">Bandeiras</a>
            <a class="<?php if($aba==5){echo "active";} ?>" href="./preco.php">Preços</a>
            <form action="includes/logic/logica_usuario.php" method="post"><input type="submit" name="sair" value="Sair"></form>
    </nav>
</header>

<!-- Aqui vai ficar o menu de links -->