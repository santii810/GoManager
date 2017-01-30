function countCandys() {
    var candys = document.getElementsByClassName('candys-input');
    var totalCandys = 0;
    for (var i = 0; i < candys.length; i++) {
        totalCandys += parseInt(candys[i].value);
    }

    document.getElementById('totalCandys').innerHTML = "Caramelos totales: " + totalCandys;
}
