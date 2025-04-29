<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <h1>Pokédex</h1>

    <!-- Select com 20 opções -->
    <label for="selectPokemon">Escolha um Pokémon:</label>
    <select id="selectPokemon">
        <option value="">Selecione...</option>
        <!-- Options de 1 a 20 -->
        <!-- Preenchido via JavaScript ou manualmente -->
        <!-- Aqui estão preenchidas manualmente -->
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
    </select>

    <div id="infoPokemon" style="margin-top: 20px;"></div>

    <script>
        const select = document.getElementById('selectPokemon');
        const infoDiv = document.getElementById('infoPokemon');

        select.addEventListener('change', function () {
            const id = this.value;

            if (!id) {
                infoDiv.innerHTML = '';
                return;
            }

            fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
                .then(response => response.json())
                .then(pokemon => {
                    const nome = pokemon.name;
                    const imagem = pokemon.sprites.front_default;
                    const tipos = pokemon.types.map(t => t.type.name).join(', ');

                    infoDiv.innerHTML = `
                        <h2>${nome.charAt(0).toUpperCase() + nome.slice(1)}</h2>
                        <img src="${imagem}" alt="${nome}">
                        <p><strong>Tipo:</strong> ${tipos}</p>
                    `;
                })
                .catch(error => {
                    infoDiv.innerHTML = '<p>Erro ao buscar o Pokémon.</p>';
                    console.error('Erro:', error);
                });
        });
    </script>
</body>
</html>
