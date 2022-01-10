<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Asignación docente materia </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Gestión</a></li>
                    <li class="breadcrumb-item active">Docente - Materia</li>
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
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Nueva Asingnacíon</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="">Periodo Lectivo</label>
                                <select id="select-periodo" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 d-flex mb-3">
                                <input type="hidden" id="dm-materia-id">
                                <input type="text" class="form-control" placeholder="Materia" readonly id="dm-materia-texto">
                                <button class="btn btn-sm btn-primary" id="btn-modal-materia">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                            <div class="col-12 d-flex mb-3">
                                <input type="hidden" id="dm-docente-id">
                                <input type="text" class="form-control" placeholder="Docente" readonly id="dm-docente-texto">
                                <button class="btn btn-sm btn-primary" id="btn-modal-docente">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                            <div class="col-12 form-group">
                                <label for="">Grado</label>
                                <select id="select-grado" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 form-group">
                                <label for="">Paralelo</label>
                                <select id="select-paralelo" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" id="btn-asingar">
                                    Asignar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Nueva Asignación</h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12 col-md-5 col-lg-4">
                                <label for="">Periodo</label>
                                <select id="select-periodo-visualizar" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-5 col-lg-3">
                                <label for="">Grado</label>
                                <select id="select-grado-lista" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-5 col-lg-3">
                                <label for="">Paralelo</label>
                                <select id="select-paralelo-lista" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-2 col-lg-2">
                                <button class="btn btn-sm btn-primary" style="margin-top: 33px;">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table t-hover">
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Docente</th>
                                        <th scope="col">Materia</th>
                                        <th scope="col">Grado</th>
                                        <th scope="col">Paralelo</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                X
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Materia-->
<div class="modal fade" id="modalMateria" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalMateriaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMateriaLabel">Materias disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Areas</label>
                                <select id="modal-select-area" class="form-control">
                                    <option value="0">Todos</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Materia</th>
                                            <th scope="col">Duración</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-modal-materia">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" onclick="selectMateria(1)">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal docente -->
<div class="modal fade" id="modalDocente" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalMateriaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMateriaLabel">Materias disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Buscar docente</label>
                                <input type="text" class="form-control" id="txt-buscar-docente">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-modal-docente">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-dark" onclick="selectDocente(1)">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= BASE ?>views/dist/js/scripts/docente_materia.js"></script>