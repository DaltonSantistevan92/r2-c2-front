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
                        <h5 class="m-0">Nueva Materia</h5>
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
                                <input type="hidden">
                                <input type="text" class="form-control" placeholder="Materia" readonly>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                            <div class="col-12 d-flex mb-3">
                                <input type="hidden">
                                <input type="text" class="form-control" placeholder="Docente" readonly>
                                <button class="btn btn-sm btn-primary">
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
                        <h5 class="m-0">Nueva Materia</h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12 col-md-5 col-lg-4">
                                <label for="">Grado</label>
                                <select id="select-grado-lista" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-5 col-lg-4">
                                <label for="">Paralelo</label>
                                <select id="select-paralelo-lista" class="form-control">
                                    <option value="0">Seleccione una opción</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-2 col-lg-2">
                                <button class="btn btn-sm btn-primary" style="margin-top: 30px;">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table t-hover">
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
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

<script src="<?= BASE ?>views/dist/js/scripts/docente_materia.js"></script>