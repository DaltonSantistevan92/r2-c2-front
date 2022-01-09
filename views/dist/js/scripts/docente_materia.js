
const AREA_ID = 0;

_init();

function _init(){
    getPeridos();
    getGrados();
    getParalelos();
    asignar();
    openModalMateria();
    getAreas();
    loadTableMaterias(AREA_ID);
    changeSelectArea();
    openModalDocente();
}

function getPeridos() {
    const url = urlServidor + 'periodo/listar';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        if (data.data.length > 0) {
            const select = document.getElementById('select-periodo');
            const select2 = document.getElementById('select-periodo-visualizar');
            
            let option = `<option value="0">Seleccione una opción</option>`;

            data.data.forEach(element => {
                option += `<option value="${element.id}">${element.desde} - ${element.hasta}</option>`;
            });

            select.innerHTML = option;
            select2.innerHTML = option;
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

function getAreas(){
    const url = urlServidor + 'area/listar';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            const select = document.getElementById('modal-select-area');
            
            let option = '<option value="0">Todos</option>';
            
            data.area.forEach(element => {
                option += `<option value="${element.id}">${element.detalle}</option>`;
            });

            select.innerHTML = option;
        }
    });
}

 function openModalMateria(){
     const btn = document.getElementById('btn-modal-materia');

     btn.addEventListener('click', () => {
         $('#modalMateria').modal('show');
     })
 }

function openModalDocente(){
    const btn = document.getElementById('btn-modal-docente');

     btn.addEventListener('click', () => {
         $('#modalDocente').modal('show');
         const input = document.getElementById('txt-buscar-docente');
         input.value = '';
     })
}

function changeSelectArea(){
    const select = document.getElementById('modal-select-area');

    select.addEventListener('change', (event) => {
        const id = event.target.value;
        loadTableMaterias(id);
    });
}

function loadTableMaterias(area_id){
    const url = urlServidor + 'materias/listar/' + area_id;

    fetch(url)
    .then(response => response.json())
    .then(data => {
        const tbody = document.getElementById('table-modal-materia');
        tbody.innerHTML = '';

        if (data.status) {
            let tr = '';

            if(data.materia.length > 0){
                data.materia.forEach((element, index) => {
                    tr += `
                    <tr>
                        <th scope="row">${index+ 1}</th>
                        <td>${element.area.detalle}</td>
                        <td>${element.materia}</td>
                        <td>${element.duracion}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-dark" onclick="selectMateria(${element.id})">
                                <i class="fas fa-check"></i>
                            </button>
                        </td>
                    </tr>`;
                });
            }else{
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };
    
                toastr["error"]("No hay datos", "Información")
            }

            tbody.innerHTML = tr;
        }
    });
}

function selectMateria(materia_id){
    const url =  urlServidor + 'materias/listarId/' + materia_id;

    fetch(url)
    .then(response => response.json())
    .then(data => {
       
        if (data.status) {
            console.log(data);   

            input_materia_id = document.getElementById('dm-materia-id');
            input_materia_texto = document.getElementById('dm-materia-texto'); 

            input_materia_id.value = materia_id;
            input_materia_texto.value = data.materia.materia;
        }
    });

    $('#modalMateria').modal('hide');
}

function selectDocente(docente_id){
    console.log(docente_id);
    $('#modalDocente').modal('hide');
}