
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
    getDocentes();
    reset();
}

function reset(){
    document.getElementById('dm-materia-id').value = '';
    document.getElementById('dm-materia-texto').value = '';

    document.getElementById('dm-docente-id').value = '';
    document.getElementById('dm-docente-texto').value = '';

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

        // reset();

        const json = {
            periodo_id: document.getElementById('select-periodo').value,
            docente_id: document.getElementById('dm-docente-id').value,
            materia_id: document.getElementById('dm-materia-id').value,
            grado_id: document.getElementById('select-grado').value,
            paralelo_id: document.getElementById('select-paralelo').value
        }

        if(validar(json)){
            console.log(json);
        }
    });

    function validar(data){
        toastr.options = {
            "closeButton": true,
            "preventDuplicates": true,
            "positionClass": "toast-top-center",
        };

        if(data.periodo_id == '0' || data.periodo_id == 0){

            toastr["error"]("Seleciones un periodo", "Información");
            return false;
        }else if(data.materia_id == "" ){
            toastr["error"]("Selecione una materia", "Información");
            return false;
        }else if(data.docente_id == ""){
            toastr["error"]("Selecione un docente", "Información");
            return false;
        }else if(data.grado_id == '0' || data.grado_id == 0){
            toastr["error"]("Selecione un grado", "Información");
            return false;
        }else if(data.paralelo_id == '0' || data.paralelo_id == 0){
            toastr["error"]("Selecione un paralelo", "Información");
            return false;
        }
        else return true;
    }
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

function getDocentes(){
    const url = urlServidor + 'docente/listar';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            let tr = '';
            const tbody = document.getElementById('table-modal-docente');

            data.docente.forEach((element, index) => {
                tr += `<tr>
                    <th scope="row">${index + 1}</th>
                    <td>${element.persona.cedula}</td>
                    <td>${element.persona.nombres}</td>
                    <td>${element.persona.apellidos}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-dark" onclick="selectDocente(${element.id}, '${element.persona.nombres}', '${element.persona.apellidos}' )">
                            <i class="fas fa-check"></i>
                        </button>
                    </td>
                </tr>`;
            });

            tbody.innerHTML = tr;
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
            input_materia_id = document.getElementById('dm-materia-id');
            input_materia_texto = document.getElementById('dm-materia-texto'); 

            input_materia_id.value = materia_id;
            input_materia_texto.value = data.materia.materia;
        }
    });

    $('#modalMateria').modal('hide');
}

function selectDocente(docente_id, nombres, apellidos){

    const input_id =  document.getElementById('dm-docente-id');
    const input_text =  document.getElementById('dm-docente-texto');

    input_id.value = docente_id;
    input_text.value = nombres + ' ' + apellidos;

    $('#modalDocente').modal('hide');
}