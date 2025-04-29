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
        </section>
    </main>

    <script>
        var tituloNome = document.querySelector('h2');
        // var tituloNome = document.querySelector('h2');

        fetch("https://pokeapi.co/api/v2/pokemon?limit=1500/").then(function(resposta){
            return resposta.json();
        }).then(function(dadosEmJson){
            console.log(dadosEmJson)
        })

    </script>
</body>
</html>