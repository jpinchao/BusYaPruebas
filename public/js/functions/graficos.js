function grafico() {
    var placa=[];
    var capacidad=[];

    let data= JSON.parse(document.getElementById("vehi-data").value);
    data.forEach(element => {
        placa.push(element.placa);
        capacidad.push(element.capacidad);        
    });

    var graf1 = {
        x: placa,
        y: capacidad,
        type: 'bar'
    }
    var datosGraficas = [graf1];

    var layout = {
        title: 'Capacidad de los vehiculos',
        barmode: 'stack'
    };
    Plotly.newPlot('grafico', datosGraficas, layout);

}




grafico();