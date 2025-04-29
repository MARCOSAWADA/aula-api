<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste API</title>
</head>
<body>
    <script>
        // _______________________________________
        // fetch('localhost/projeto/aula-api/dados.json') mostra um erro no console
        // fetch('./dados.json')
        // console.log(fetch('./dados.json'))
        // _______________________________________

        // then = tente

        // fetch('./dados.json').then(function(resposta){
        //     console.log(resposta.json());
        // })
        // _______________________________________

        // mostra o objeto que foi mostrado em dados.json
        fetch('./dados.json').then(function(resposta){
            return resposta.json();
        }).then(function(dadosEmJson){
            console.log(dadosEmJson)
        })

    </script>
</body>
</html>