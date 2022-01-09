
_init();

function _init(){
    getPeridos();
    getGrados();
    getParalelos();
    asignar();
}

function getPeridos() {
    const url = urlServidor + 'periodo/listar';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        if (data.data.length > 0) {
            const select = document.getElementById('select-periodo');
            
            let option = `<option value="0">Seleccione una opción</option>`;

            data.data.forEach(element => {
                option += `<option value="${element.id}">${element.desde} - ${element.hasta}</option>`;
            });

            select.innerHTML = option;
        }
    });
}

function getGrados() {
    const url = urlServidor + 'grados/listar';

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.grados.length > 0) {
                const select = document.getElementById('select-grado');
                const select2 = document.getElementById('select-grado-lista');

                let option = `<option value="0">Seleccione una opción</option>`;

                data.grados.forEach(element => {
                    option += `<option value="${element.id}">${element.nombre_grado}</option>`;
                });

                select.innerHTML = option;
                select2.innerHTML = option
            }
        });
}

function getParalelos() {
    const url = urlServidor + 'paralelo/listar';

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.data.length > 0) {
                const select = document.getElementById('select-paralelo');
                const select2 = document.getElementById('select-paralelo-lista');

                let option = `<option value="0">Seleccione una opción</option>`;

                data.data.forEach(element => {
                    option += `<option value="${element.id}">${element.detalle}</option>`;
                });

                select.innerHTML = option;
                select2.innerHTML = option;
            }
        });
}

function asignar(){
    const btn_asingar = document.getElementById('btn-asingar');

    btn_asingar.addEventListener('click', () => {
        console.log("Recoger la data y armar json");
    });
}