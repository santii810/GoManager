function candysInputOnBlur(pokemonId, necesaryCandys) {
    countCandys();
    countEvolutions(pokemonId, necesaryCandys);

}


function countCandys() {
    var candys = document.getElementsByClassName('candys-input');
    var totalCandys = 0;
    for (var i = 0; i < candys.length; i++) {
        totalCandys += parseInt(candys[i].value);
    }

    document.getElementById('totalCandys').innerHTML = "Caramelos totales: " + totalCandys;
}

function countEvolutions(pokemonId, necesaryCandys) {
    var caramelos = document.getElementById('candys-' + pokemonId).value;

}
