<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cliente</title>
    <!-- plugins:css -->
    <?php require_once "../includes/_head.php"; ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php require_once "../includes/_navbar.php"; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php require_once "../includes/_sidebar.php"; ?>
            <!-- partial -->
            <div class="main-panel" id="app">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            <i style="display: none" class="mdi mdi-close" id="bannerClose"></i>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab"
                                                        data-toggle="tab" href="#nav-home" role="tab"
                                                        aria-controls="nav-home" aria-selected="true">Cliente
                                                        Natural</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                        aria-selected="false">Cliente juridico</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <br>
                                                    <div v-if="formularioregistros">
                                                        <small>Información geneneral de los clientes naturales</small>
                                                        <form class="form-sample">
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Nombre<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Nombre">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Apellido<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Apellido">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>DUI<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="00000000-0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Teléfono<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="0000-0000">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Estado civil<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select class="form-control">
                                                                                <option>Soltero</option>
                                                                                <option>Casado</option>
                                                                                <option>Divorciado</option>
                                                                                <option>Viudo</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Dirección<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea class="form-control"
                                                                                placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Tipo de empleo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select class="form-control">
                                                                                <option>Formal</option>
                                                                                <option>Informal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Lugar de trabajo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea class="form-control"
                                                                                placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Estado civil<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select class="form-control">
                                                                                <option>Soltero</option>
                                                                                <option>Casado</option>
                                                                                <option>Divorciado</option>
                                                                                <option>Viudo</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Ingresos<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text bg-gradient-info text-white">$</span>
                                                                                </div>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    aria-label="Amount (to the nearest dollar)">
                                                                                <div class="input-group-append">
                                                                                    <span
                                                                                        class="input-group-text">.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small>Los campos con <span style="color: red">*</span> son
                                                                obligatorios</small>
                                                            <hr>
                                                            <div style="text-align: center;">
                                                                <button type="button"
                                                                    class="btn btn-gradient-success btn-rounded btn-fw">
                                                                    <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                                                    Guardar
                                                                </button>
                                                                <button type="button" @click="listadoregistros=true, formularioregistros=false"
                                                                    class="btn btn-gradient-light btn-rounded btn-fw">
                                                                    <i
                                                                        class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                                                    Cancelar
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12" v-if="listadoregistros">
                                                        <div class="x_title">
                                                            
                                                            <div style="text-align: right;">
                                                                <button class="btn btn-default"><i
                                                                        class="mdi mdi-file-pdf"></i>
                                                                    Reporte</button>
                                                                <button
                                                                    @click="listadoregistros=false, formularioregistros=true"
                                                                    class="btn btn-gradient-success btn-rounded btn-fw"
                                                                    id="btnagregar"><i
                                                                        class="mdi mdi-account-check"></i>
                                                                    Nuevo Cliente
                                                                </button>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <br>
                                                            <!-- Mostrar datos   -->
                                                            <table id="example"
                                                                class="table table-striped table-bordered"
                                                                style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Código</th>
                                                                        <th>Nombre completo</th>
                                                                        <th>Documento</th>
                                                                        <th>Teléfono</th>
                                                                        <th>Cargo</th>
                                                                        <th>Estado</th>
                                                                        <th style="text-align: center;">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    <br>
                                                    <div v-if="formularioregistros">
                                                        <small>Información geneneral de los clientes juridicos</small>
                                                        <form class="form-sample">
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Nombre de la empresa<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Empresa">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Nombre del representante legal<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Nombre completo">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>NIT de la empresa<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="0000-000000-000-0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Teléfono de contacto(1)<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="0000-0000">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Teléfono de contacto(2)<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="0000-0000">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Correo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="example@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Dirección<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea class="form-control"
                                                                                placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Observaciones</label>
                                                                        <div class="col-sm-12">
                                                                            <textarea class="form-control"
                                                                                placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-toggle="collapse" data-target=".multi-collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">Información
                                                                    financiera</button>
                                                            </p>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="collapse multi-collapse"
                                                                        id="multiCollapseExample1">
                                                                        <div class="card card-body">
                                                                            <form class="form-sample">
                                                                                Balance General
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group row">
                                                                                            <label>Activo Corriente<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group row">
                                                                                            <label>Pasivo corriente<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group row">
                                                                                            <label>Activo no
                                                                                                corriente<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group row">
                                                                                            <label>Pasivo no
                                                                                                corriente<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6"></div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group row">
                                                                                            <label>Capital<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="collapse multi-collapse"
                                                                        id="multiCollapseExample2">
                                                                        <div class="card card-body">
                                                                            <form class="form-sample">
                                                                                Estado de resultado
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group row">
                                                                                            <label>Ventas<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group row">
                                                                                            <label>Total de gastos<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group row">
                                                                                            <label>Utilidad<span
                                                                                                    style="color: red">*</span></label>
                                                                                            <div class="col-sm-12">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <div
                                                                                                        class="input-group-prepend">
                                                                                                        <span
                                                                                                            class="input-group-text bg-gradient-info text-white">$</span>
                                                                                                    </div>
                                                                                                    <input type="number"
                                                                                                        class="form-control"
                                                                                                        aria-label="Amount (to the nearest dollar)">
                                                                                                    <div
                                                                                                        class="input-group-append">
                                                                                                        <span
                                                                                                            class="input-group-text">.00</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapse multi-collapse"
                                                                id="multiCollapseExample3">
                                                                <small>Los campos con <span style="color: red">*</span>
                                                                    son
                                                                    obligatorios</small>
                                                                <hr>
                                                                <div style="text-align: center;">
                                                                    <button type="button"
                                                                        class="btn btn-gradient-success btn-rounded btn-fw">
                                                                        <i
                                                                            class="mdi mdi-file-check btn-icon-prepend"></i>
                                                                        Guardar
                                                                    </button>
                                                                    <button type="button" @click="listadoregistros=true, formularioregistros=false"
                                                                        class="btn btn-gradient-light btn-rounded btn-fw">
                                                                        <i
                                                                            class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                                                        Cancelar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12" v-if="listadoregistros">
                                                        <div class="x_title">
                                                            <div style="text-align: right;">
                                                                <button class="btn btn-default"><i
                                                                        class="mdi mdi-file-pdf"></i>
                                                                    Reporte</button>
                                                                <button
                                                                    @click="listadoregistros=false, formularioregistros=true"
                                                                    class="btn btn-gradient-success btn-rounded btn-fw"
                                                                    id="btnagregar"><i
                                                                        class="mdi mdi-account-check"></i>
                                                                    Nuevo Cliente
                                                                </button>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <br>
                                                            <!-- Mostrar datos   -->
                                                            <table id="example"
                                                                class="table table-striped table-bordered"
                                                                style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Código</th>
                                                                        <th>Nombre completo</th>
                                                                        <th>Documento</th>
                                                                        <th>Teléfono</th>
                                                                        <th>Cargo</th>
                                                                        <th>Estado</th>
                                                                        <th style="text-align: center;">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>


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
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <?php require_once "../includes/_footer.php"; ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>
<script src="../../scripts/client.js"></script>

</html>