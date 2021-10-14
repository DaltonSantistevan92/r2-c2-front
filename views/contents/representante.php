<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gestión Representante</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Administración</a></li>
                    <li class="breadcrumb-item active">Gestión Representante</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-purple">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo Representante</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!--form-nuevo-descripcion /.card-header -->
                    <div class="card-body">
                        <div class="row text-right">
                            <div class="col-12 p-2">
                                <button class="btn btn-dark" id="buscar-cliente-venta" data-toggle="modal"
                                    data-target="#modal-representantes" data-backdrop="static" data-keyboard="false"><i
                                        class="fas fa-search mr-2"></i>Buscar Representante</button>
                            </div>
                        </div>
                        <form method="POST" id="form-datos-representante">

                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="hidden" id="form-repre-id">
                                    <input type="hidden" id="form-persona-id">
                                    <label for="">Cédula</label>
                                    <input type="text" class="form-control solo-numeros" placeholder="Cédula"
                                        id="form-cedula" name="cedula" maxlength="10" minlength="10" required>
                                </div>

                                <div class="col-6 form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" class="form-control solo-numeros" placeholder="Teléfono"
                                        id="form-telefono" name="telefono" maxlength="10" minlength="10">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" class="form-control solo-letras" placeholder="Nombres"
                                        id="form-nombres" maxlength="150" minlength="3" name="nombres" required>
                                </div>

                                <div class="col-6 form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control solo-letras" placeholder="Apellidos"
                                        id="form-apellidos" maxlength="150" minlength="3" name="apellido">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="">Correo</label>
                                    <input type="email" class="form-control" placeholder="Correo" id="form-correo"
                                        name="correo">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">Sexo</label>
                                    <select name="" id="form-sexo" class="form-control">
                                        <option value="0">Seleccione una opcion</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Parentesco</label>
                                        <select id="form-select-parentesco" class="form-control">
                                            <!-- <option value="0">Seleccione un Parentesco</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Especial</label>
                                        <select id="form-select-especial" class="form-control">
                                            <!-- <option value="0">Seleccione una Opción</option> -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento"
                                        id="form-fecha-nac">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-purple" id="btn-form-representante">
                                    <i class="fa fa-plus mr-2"></i>
                                    Agregar Representante
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #343a40; color: #fff;">
                        <h3 class="card-title">Lista de Representantes</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="div" style="overflow: auto;">
                            <table id="tabla-representante" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Sexo</th>
                                        <th>Parentesco</th>
                                        <th>Especial</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modales -->
<div class="modal fade" id="modal-representantes">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Representantes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Buscar Representante</label>
                            <input id="buscar-repre" type="text" class="form-control"
                                placeholder="Ingrese cedula o apellido del Representante">
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 200px !important; overflow: auto;">
                    <div class="col-12">
                        <div class="tabla-buscar-repre">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="display: none">ID</th>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Sexo</th>
                                        <th>OK</th>
                                    </tr>
                                </thead>
                                <tbody id="representante-body">
                                    <!-- <tr>
                                        <td>1</td>
                                        <td style="display: none">1</td>
                                        <td>2400487963</td>
                                        <td>Pedro</td>
                                        <td>Roca</td>
                                        <td>0987452123</td>
                                        <td>ejemplo@gmail.com</td>
                                        <td>Masculino</td>
                                        <td>
                                            <div class="div">
                                                <button class="btn btn-dark btn-sm"
                                                    onclick="seleccionar_representante(1)">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="actualizar_representante">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h4 class="modal-title">Actualizar Representante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contanier-fluid">
                    <form method="POST" id="update-representante">

                        <div class="row">
                            <div class="col-4 form-group">
                                <input type="hidden" id="upd-repre-id">
                                <input type="hidden" id="upd-persona-id">
                                <label for="">Cédula</label>
                                <input type="text" class="form-control solo-numeros" placeholder="Cédula"
                                    id="upd-cedula" name="cedula" readonly maxlength="10" minlength="10" required>
                            </div>

                            <div class="col-4 form-group">
                                <label for="">Nombres</label>
                                <input type="text" class="form-control solo-letras" placeholder="Nombres"
                                    id="upd-nombres" maxlength="150" minlength="3" name="nombres" required>
                            </div>

                            <div class="col-4 form-group">
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control solo-letras" placeholder="Apellidos"
                                    id="upd-apellidos" maxlength="150" minlength="3" name="apellido">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label for="">Teléfono</label>
                                <input type="text" class="form-control solo-numeros" placeholder="Teléfono"
                                    id="upd-telefono" name="telefono" maxlength="10" minlength="10">
                            </div>

                            <div class="col-4 form-group">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" placeholder="Correo" id="upd-correo"
                                    name="correo">
                            </div>

                            <div class="col-4 form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" placeholder="Fecha de Nacimiento"
                                    id="upd-fecha-nac">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label for="">Sexo</label>
                                <select name="" id="upd-sexo" class="form-control">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Parentesco</label>
                                    <select id="upd-select-parentesco" class="form-control">
                                        <!-- <option value="0">Seleccione un Parentesco</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Especial</label>
                                    <select id="upd-select-especial" class="form-control">
                                        <!-- <option value="0">Seleccione una Opción</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <button id="btn-update" class="btn btn-purple"><i
                                    class="fas fa-pencil-alt mr-2"></i>Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script src="<?=BASE?>views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=BASE?>views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=BASE?>views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=BASE?>views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=BASE?>views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=BASE?>views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=BASE?>views/plugins/jszip/jszip.min.js"></script>
<script src="<?=BASE?>views/plugins/pdfmake/pdfmake.min.js"></script>

<script src="<?=BASE?>views/plugins/Toast/js/Toast.min.js"></script>
<script src="<?=BASE?>views/dist/js/scripts/representante.js"></script>