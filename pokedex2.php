<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <h1>Pokedex</h1>

    <!-- Select -->
    <label for="selectPokemon">Escolha um Pokémon:</label>
    <select id="selectPokemon">
        <option value="">Selecione...</option>
    </select>

    <!-- info do Pokémon -->
    <div id="infoPokemon" style="margin-top: 20px;"></div>

    <!-- Lista de Pokémon -->
    <div id="listaPokemon"></div>

    <script>
        var divListaPokemon = document.querySelector('#listaPokemon');
        var selectPokemon = document.querySelector('#selectPokemon');
        var infoPokemon = document.querySelector('#infoPokemon');

        fetch('https://pokeapi.co/api/v2/pokemon?limit=200').then(function(resposta){
            return resposta.json();
        }).then(function(respostaJson){
            respostaJson.results.forEach(function(pokemon, index){
                
                divListaPokemon.innerHTML += `<div><a href="${pokemon.url}">${pokemon.name}</a></div>`;

                
                selectPokemon.innerHTML += `<option value="${index + 1}">${pokemon.name}</option>`;
            });
        });

        
        selectPokemon.addEventListener('change', function () {
            var id = this.value;

            if (!id) {
                infoPokemon.innerHTML = '';
                return;
            }

            fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
                .then(response => response.json())
                .then(pokemon => {
                    var nome = pokemon.name;
                    var imagem = pokemon.sprites.front_default;
                    var tipos = pokemon.types.map(t => t.type.name).join(', ');

                    infoPokemon.innerHTML = `
                        <h2>${nome.charAt(0).toUpperCase() + nome.slice(1)}</h2>
                        <img src="${imagem}" alt="${nome}">
                        <p><strong>Tipo:</strong> ${tipos}</p>
                    `;
                })
                .catch(error => {
                    infoPokemon.innerHTML = '<p>Erro ao buscar o Pokémon.</p>';
                    console.error('Erro:', error);
                });
        });
    </script>
</body>
</html>
