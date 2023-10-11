// Obtener la lista de departamentos mediante una solicitud GET a la API
fetch('https://www.datos.gov.co/resource/xdk5-pm3f.json?$query=SELECT%0A%20%20%60region%60%2C%0A%20%20%60c_digo_dane_del_departamento%60%2C%0A%20%20%60departamento%60%2C%0A%20%20%60c_digo_dane_del_municipio%60%2C%0A%20%20%60municipio%60')
    .then(response => response.json())
    .then(data => {
        //elimina los datos duplicados
        data = data.filter((departamento, index, self) => self.findIndex(t => t.departamento === departamento.departamento) === index)
        data = data.sort((a, b) => (a.departamento > b.departamento) ? 1 : -1);
        // Crear opciones de la lista desplegable
        const select = document.getElementById('Departamento');
        data.forEach(departamento => {
            const option = document.createElement('option');
            option.text = departamento.departamento;
            option.value = departamento.c_digo_dane_del_departamento;
            select.appendChild(option);
        });
    })
    .catch(error => console.error(error));


//crear un evento onChange para el select de departamento
document.getElementById('Departamento').addEventListener('change', function () {
    //obtener el valor del select de departamento
    var departamento = document.getElementById('Departamento').value;
    //obtener el select de municipio
    var municipio = document.getElementById('Municipio');
    //limpiar el select de municipio
    municipio.innerHTML = '';
    //crear una opción por defecto
    var option = document.createElement('option');
    option.text = 'Seleccione un municipio';
    option.value = '';
    municipio.appendChild(option);
    //obtener la lista de municipios del departamento seleccionado
    const departamentoSeleccionado = document.getElementById('Departamento').value;
    fetch('https://www.datos.gov.co/resource/xdk5-pm3f.json?$query=SELECT%0A%20%20%60region%60%2C%0A%20%20%60c_digo_dane_del_departamento%60%2C%0A%20%20%60departamento%60%2C%0A%20%20%60c_digo_dane_del_municipio%60%2C%0A%20%20%60municipio%60')
        .then(response => response.json())
        .then(data => {
            // Crear opciones de la lista desplegable
            data = data.filter(municipio => municipio.c_digo_dane_del_departamento === departamentoSeleccionado);
            data = data.sort((a, b) => (a.municipio > b.municipio) ? 1 : -1);
            const select2 = document.getElementById('Municipio');
            data.forEach(municipio => {
                const option = document.createElement('option');
                option.text = municipio.municipio;
                option.value = municipio.c_digo_dane_del_municipio;
                select2.appendChild(option);
            });
})
});