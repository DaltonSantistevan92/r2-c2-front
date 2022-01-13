$(function(){

    _init();

    function _init(){
        //cargarTabla();
        //form_periodo();
        //listarPeriodos();
        //
        guardarHora();
        guardarNuevaBase();
        reset_horas();
        cargarHoras();
        cargarDias();
    }

    function cargarTabla(){
        $.ajax({
            url : urlServidor + 'rol/listar',
            type : 'GET',
            dataType : 'json',
            success : function(response) {
                if(response.status){
                    let tr = "";    let i = 1;

                    response.roles.forEach(element => {
                        tr += `<tr>
                        <td>${i}</td>
                        <td>${element.rol}</td>
                        <td>
                          <div><button class="btn btn-primary btn-sm" onclick="editar(${element.id})">
                              <i class="fa fa-edit"></i>
                            </button>
                          </div>
                        </td>

                        <td>
                          <div><button class="btn btn-dark btn-sm" onclick="eliminar(${element.id})">
                              <i class="fa fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>`;
                        i++;
                    });

                    $('#table-roles').html(tr);
                }
            },
            error : function(xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                // console.log('Petición realizada');
            }
        });
    }

    function guardarNuevaBase(){
        $('#btn-crear-nombre-base').click(function() {

            let nombre = $('#form-nombre-base').val();
            let horario_id = localStorage.getItem('_id_horario');

            if(detalle.length == 0){
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };

                toastr["error"]("Ingrese un período", "Campo vacío")
            }else
            if(desde.length == 0){
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };

                toastr["error"]("Seleccione una fecha desde", "Campo vacío")
            }else
            if(hasta.length == 0){
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };

                toastr["error"]("Seleccione una fecha hasta", "Campo vacío")
            }
            else{
              let data = {
                  periodo: {
                      detalle: detalle, 
                      desde: desde,
                      hasta: hasta
                  },
              };

              //console.log(data);
              guardar_periodo(data);
            }
        });
    }

    function guardar_periodo(json){
        $.ajax({
            // la URL para la petición
            url : urlServidor + 'periodo/guardar',
            data : "data=" + JSON.stringify(json),
            // especifica si será una petición POST o GET
            type : 'POST',
            // el tipo de información que se espera de respuesta
            dataType : 'json',
            success : function(response) {
    
                if(response.status){
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
    
                    toastr["success"]("El período se ha guardado correctamente", "Períodos y Otros")
                    $('#form-periodo-val')[0].reset();
                    $('#modalPeriodo').modal('hide');
                    //cargarTablaPeriodo();
                }else{
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
    
                    toastr["error"](response.mensaje, "Períodos y Otros")
                }
                //console.log(response);
            },
            error : function(jqXHR, status, error) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(jqXHR, status) {
                // console.log('Petición realizada');
            }
        });
    }

    function listarPeriodos(){
        $.ajax({
            url: urlServidor + 'periodo/listar',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.status) {
                    let tr = ""; let i = 1;

                    response.data.forEach(element => {
                        tr += `<tr>
                        <td>${i}</td>
                        <td>${element.desde} - ${element.hasta}</td>
                        <td>
                          <div class="btn-group"><button class="btn btn-primary btn-sm" onclick="editar_periodo_lista(${element.id})">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-dark btn-sm" onclick="eliminar_periodo_lista(${element.id})">
                              <i class="fa fa-trash"></i>
                            </button>
                          </div>
                        </td>
    
                       
                      </tr>`;
                        i++;
                    });

                    $('#periodos-body').html(tr);
                }
            },
            error: function (xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete: function (xhr, status) {
                // console.log('Petición realizada');
            }
        });
    }

    function guardarHora(){
        $('#btn-guardar-hora').click(function(){
            let inicio = $('#form-hora-inicio').val();
            let fin = $('#form-hora-fin').val();

            if(inicio.length == 0){
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };

                toastr["error"]("Ingrese una hora de inicio", "Campo vacío")
            }else
            if(fin.length == 0){
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                    "positionClass": "toast-top-center",
                };

                toastr["error"]("Seleccione una hora fin", "Campo vacío")
            }
            else{
              let data = {
                  horas: {
                      inicio: inicio,
                      fin: fin
                  },
              };

              guardandoHora(data);
            }

        });
    }

    function guardandoHora(json){
        $.ajax({
            // la URL para la petición
            url : urlServidor + 'horas/guardarHora',
            data : "data=" + JSON.stringify(json),
            // especifica si será una petición POST o GET
            type : 'POST',
            // el tipo de información que se espera de respuesta
            dataType : 'json',
            success : function(response) {
    
                if(response.status){
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
    
                    toastr["success"]("Las horas se han guardado correctamente", "Nueva Base");
                    reset_horas();
                    cargarHoras();
                    //cargarTablaPeriodo();
                }else{
                    toastr.options = {
                        "closeButton": true,
                        "preventDuplicates": true,
                        "positionClass": "toast-top-center",
                    };
    
                    toastr["error"](response.mensaje, "Nueva Base")
                }
                //console.log(response);
            },
            error : function(jqXHR, status, error) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(jqXHR, status) {
                // console.log('Petición realizada');
            }
        });
    }

    function reset_horas(){
        $('#form-hora-inicio').val('');
        $('#form-hora-fin').val('');
    }

    function cargarHoras(){
        $.ajax({
            url : urlServidor + 'horas/listar',
            type : 'GET',
            dataType : 'json',
            success : function(response) {
                if(response.status){
                    let option = '<option value=0>Seleccione una Hora</option>';
                    
                    response.hora.forEach(element =>{
                        option += `<option value=${element.id}>${element.inicio} - ${element.fin}</option>`;
                    });
                    $('#select-horas-base').html(option);
   
                }   
            },
            error : function(xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                // console.log('Petición realizada');
            }
        });
    }

    function cargarDias(){
        $.ajax({
            url: urlServidor + 'dia/listar',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                console.log(response);
                if (response.status) {
                    $('#form-dias')
                }
            },
            error: function (xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete: function (xhr, status) {
                // console.log('Petición realizada');
            }
        });
    }

});

