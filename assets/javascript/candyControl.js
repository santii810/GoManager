function candysInputOnBlur(pokemonId, necesaryCandys) {
    countCandys();
    calcPokemonEvolutions(pokemonId, necesaryCandys);
    countEvolutions();
}


function countCandys() {
    var candys = document.getElementsByClassName('candys-input');
    var totalCandys = 0;
    for (var i = 0; i < candys.length; i++) {
        totalCandys += parseInt(candys[i].value);
    }

    document.getElementById('totalCandys').innerHTML = "Caramelos totales: " + totalCandys;
}

function calcPokemonEvolutions(pokemonId, necesaryCandys) {
    var caramelos = document.getElementById('candys-' + pokemonId).value;
    var evolutions = Math.trunc(caramelos / (necesaryCandys - 2));

    document.getElementById('numEvolutions-' + pokemonId).innerHTML = "Ev: " + evolutions;
}

function countEvolutions() {
    var totalEvolutions = 0;
    var evolutionsOutputText = document.getElementsByClassName("num-evolutions");

    for (var i = 0; i < evolutionsOutputText.length; i++) {
        var candys = (evolutionsOutputText[i].innerHTML).split(":")[1];
        totalEvolutions += parseInt(candys)
    }
    document.getElementById('totalEvolutions').innerHTML = "Evoluciones totales: " + totalEvolutions;
}
