<link rel="stylesheet" href="../assets/css/cadastro.css">
<title>Pesquisa</title>
</head>

<body>
    <main>
        <form action="../includes/logic/logica_posto.php" method="post" autocomplete="off" id="cadastro">
            <h3>Pesquisa sobre postos</h3>

            <label for="nome">Nome</label><input class="input" type="text" placeholder="Pesquisa por nome contendo estes caracteres" name="nome" id="nome">
            <label for="nota">Nota minima: <output id="range"></output></label><input class="input" type="range" name="nota" id="nota" min="0" max="5" step="0.1" value="0">
            <label for="nota2">Nota maxima: <output id="range2"></output></label><input class="input" type="range" name="nota2" id="nota2" min="0" max="5" step="0.1" value="5">

            <button type="submit" id='pesquisar' name='pesquisar' value="Pesquisar">Pesquisar</button>
            <button type="button" onclick="location.href='../postos.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script>
    const range = document.querySelector("#range")
    const input = document.querySelector("#nota")
    range.textContent = input.value
    cadastro.nota.addEventListener("input", function(event) {
        range.textContent = event.target.value
    })
    const range2 = document.querySelector("#range2")
    const input2 = document.querySelector("#nota2")
    range2.textContent = input2.value
    cadastro.nota2.addEventListener("input", function(event) {
        range2.textContent = event.target.value
    })
</script>

</html>