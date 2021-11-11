<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listar Docente</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Administración</a></li>
                    <li class="breadcrumb-item active">>Listar Docente</li>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Listar Docentes</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!--form-nuevo-descripcion /.card-header -->
                    <div class="card-body">
                        <div class="div" style="overflow: auto;">
                            <table id="tabla-docente" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Período</th>
                                        <th>Curso</th>
                                        <th>Paralelo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  <tr>
                                            <td class="pt-25">1</td>
                                            <td class="pt-25">imagen.jpg</td>
                                            <td class="pt-25">Burro</td>
                                            <td class="pt-25">Hourse</td>
                                            <td class="pt-25">Bu</td>
                                            <td class="pt-25">Tuuu crees</td>
                                            <td class="pt-25">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning  fa-lg">
                                                        <i class="fa fa-pencil-square fa-lg"></i>
                                                    </button>
                                                    <button class="btn btn-danger fa-lg">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr> -->
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
<div class="modal fade" id="actualizar_docente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Actualizar Docente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contanier-fluid">
                    <form id="update-usuario" method="post">
                        <input type="hidden" id="docentecurso-id">
                        <input type="hidden" id="docente-id">
                        <input type="hidden" id="per-id">
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label for="">Nombres</label>
                                <input id="upd-nombres" type="text" class="form-control letras-vd">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label for="">Apellidos</label>
                                <input id="upd-apellidos" type="text" class="form-control letras-vd">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label for="">Período</label>
                                <select id="upd-periodo" class="form-control">
                                    <!-- <option value="0">Seleccione un Cargo</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label for="">Curso</label>
                                <select id="upd-curso" class="form-control">
                                    <!-- <option value="0">Seleccione un Cargo</option> -->
                                </select>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label for="">Paralelo</label>
                                <select id="upd-paralelo" class="form-control">
                                    <!-- <option value="0">Seleccione un Cargo</option> -->
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <button id="btn-update" class="btn btn-primary"><i
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
<script src="<?=BASE?>views/dist/js/scripts/listarDocente.js?ver=1.1.1"></script>