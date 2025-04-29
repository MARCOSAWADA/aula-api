<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste API</title>
</head>
<body>
    <main>
        <section>
            <h2></h2>
            <span></span>
            <p></p>
        </section>
    </main>

    <script>
        var tituloNome = document.querySelector('h2');
        var spanIdade = document.querySelector('span');
        var paragrafoProfissao = document.querySelector('p');

        fetch('./dados.json').then(function(resposta){
            return resposta.json();
        }).then(function(dadosEmJson){
            tituloNome.innerText = dadosEmJson.nome;
            spanIdade.innerText = dadosEmJson.idade;
            paragrafoProfissao.innerText = dadosEmJson.profissao;
        })

    </script>
</body>
</html>