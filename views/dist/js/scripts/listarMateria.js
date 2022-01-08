_init();

function _init(){
    clearForm();
    getAreas();
    form_materia();
}

function clearForm(){
    document.getElementById('materia-nombre').value = ''
    document.getElementById('materia-select-area').value = '0',
    document.getElementById('materia-color').value = '',
    document.getElementById('materia-duracion').value = '';
}

function getAreas(){
    const url = urlServidor + 'area/listar';

    fetch(url)
    .then(response => response.json())
    .then(data => {
        if(data.area.length > 0){
            const select = document.getElementById('materia-select-area');
            let option = `<option value="0">Seleccione una opción</option>`;

            data.area.forEach(element => {
                option += `<option value="${element.id}">${element.detalle}</option>`;
            });

            select.innerHTML = option;
        }
    });
}

function form_materia(){
    const form = document.getElementById('nueva-materia');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const json = {
            materia:{
                materia: document.getElementById('materia-nombre').value.trim(),
                area_id: document.getElementById('materia-select-area').value,
                color: document.getElementById('materia-color').value,
                duracion: document.getElementById('materia-duracion').value.trim()
            }
        };

        if(validarForm(json.materia)){
            const url = urlServidor + 'materias/guardar';

            const myInit = {
                method: 'POST', // or 'PUT'
                headers:{
                    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
                    'Origin': '*'
                },
                body: "data=" + JSON.stringify(json), // data can be `string` or {object}!
            };

            fetch(url, myInit)
            .then(response => response.json())
            .then(data => {
                if(data.status){
                    clearForm();
                    
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
        
                    toastr["info"](data.mensaje, "Listo")
                }else{
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
        
                    toastr["error"](data.mensaje, "Error")
                }
            });
        }
    });

    function validarForm(materia){
        if(materia.materia.length == 0 || materia.materia.length < 3){
            toastr.options = {
                "closeButton": true,
                "preventDuplicates": true,
                "positionClass": "toast-top-center",
            };

            toastr["error"]("Ingrese un nombre", "Campo vacío")
            return false;
        }else
        if(materia.area_id == '0'){
            toastr.options = {
                "closeButton": true,
                "preventDuplicates": true,
                "positionClass": "toast-top-center",
            };

            toastr["error"]("Seleccione una materia", "Información")
            return false;
        }else
        if(materia.color.length == 0){
            toastr.options = {
                "closeButton": true,
                "preventDuplicates": true,
                "positionClass": "toast-top-center",
            };

            toastr["error"]("Establezca un color", "Error")
            return false;
        }else
        if(materia.duracion.length == 0 || materia.duracion.length < 3){
            toastr.options = {
                "closeButton": true,
                "preventDuplicates": true,
                "positionClass": "toast-top-center",
            };

            toastr["error"]("Ingrese una duración", "Campo vacío")

            return false;
        }else return true;
    }
}