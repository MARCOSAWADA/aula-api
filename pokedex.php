<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <div id="listaPokemon"></div>
    <script>
        var divListaPokemon = document.querySelector('#listaPokemon');
 
        fetch('https://pokeapi.co/api/v2/pokemon/').then(function(resposta){
            return resposta.json();
        }).then(function(respostaJson){
            // console.log(respostaJson.results);
            respostaJson.results.forEach(function(pokemon){
                // console.log(pokemon);
                listaPokemon.innerHTML += `<div><a href="${pokemon.url}">${pokemon.name}</a></div>`
            });
        })

    </script>
</body>
</html>