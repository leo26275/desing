<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tipo de activo</title>
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
            <div class="main-panel">
                <div class="content-wrapper" id="app">
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            <i style="display: none" class="mdi mdi-close" id="bannerClose"></i>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div v-if="formularioregistros">
                                                <h4 class="card-title">Nuevo tipo de activo/ <small>Información
                                                        geneneral
                                                        del tipo de activo</small> </h4>
                                                <form class="form-sample">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group row">
                                                                <label>Código<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="newType.codigo" type="text"
                                                                        class="form-control" placeholder="1010"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group row">
                                                                <label>Clasificación<span
                                                                        style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select v-model="newType.clasificacion"
                                                                        class="form-control">
                                                                        <option value="">-- Seleccione clasificación --
                                                                        </option>
                                                                        <option> Activo fijo tangible </option>
                                                                        <option> Activo fijo intangible
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group row">
                                                                <label>Nombre<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="newType.nombre" type="text"
                                                                        class="form-control" placeholder="Nombre">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>Los campos con <span style="color: red">*</span> son
                                                        obligatorios</small>
                                                    <hr>
                                                    <div style="text-align: center;">
                                                        <button @click="addType();" type="button"
                                                            class="btn btn-gradient-success btn-rounded btn-fw">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Guardar
                                                        </button>
                                                        <button type="button"
                                                            @click="listadoregistros=true, formularioregistros=false"
                                                            class="btn btn-gradient-light btn-rounded btn-fw">
                                                            <i class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                                            Cancelar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div v-if="formularioregistrosEdit">
                                                <h4 class="card-title">Nuevo tipo de activo/ <small>Información
                                                        geneneral
                                                        del tipo de activo</small> </h4>
                                                <form class="form-sample">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group row">
                                                                <label>Código<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="correntType.codigo" type="text"
                                                                        class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group row">
                                                                <label>Clasificación<span
                                                                        style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select v-model="correntType.clasificacion"
                                                                        class="form-control">
                                                                        <option value="">-- Seleccione clasificación --
                                                                        </option>
                                                                        <option> Activo fijo tangible </option>
                                                                        <option> Activo fijo intangible
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group row">
                                                                <label>Nombre<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="correntType.nombre" type="text"
                                                                        class="form-control" placeholder="Nombre">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>Los campos con <span style="color: red">*</span> son
                                                        obligatorios</small>
                                                    <hr>
                                                    <div style="text-align: center;">
                                                        <button @click="editType();" type="button"
                                                            class="btn btn-gradient-success btn-rounded btn-fw">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Guardar
                                                        </button>
                                                        <button type="button"
                                                            @click="listadoregistros=true, formularioregistrosEdit=false"
                                                            class="btn btn-gradient-light btn-rounded btn-fw">
                                                            <i class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                                            Cancelar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="col-md-12 col-sm-12" v-if="listadoregistros">
                                                <div class="x_title">
                                                    <h4>Lista de tipos de activo</h4>
                                                    <hr>
                                                    <div style="text-align: right;">
                                                        <button class="btn btn-default"><i class="mdi mdi-file-pdf"></i>
                                                            Reporte</button>
                                                        <button
                                                            @click="listadoregistros=false, formularioregistros=true"
                                                            class="btn btn-gradient-success btn-rounded btn-fw"
                                                            id="btnagregar"><i class="mdi mdi mdi-plus-circle"></i>
                                                            Nuevo tipo de activo
                                                        </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <br>
                                                    <!-- Mostrar datos   -->
                                                    <table id="example" class="table table-striped table-bordered"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Código</th>
                                                                <th>Nombre</th>
                                                                <th>Clasificación</th>
                                                                <th style="text-align: center;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="item in departamentos">
                                                                <td>{{item.codigo}}</td>
                                                                <td>{{item.nombre}}</td>
                                                                <td>{{item.clasificacion}}</td>
                                                                <td style="text-align: center;">
                                                                    <button
                                                                        @click="formularioregistrosEdit=true,listadoregistros=false, selectType(item);"
                                                                        title="Editar" type="button"
                                                                        class="btn btn-gradient-dark btn-rounded btn-icon">
                                                                        <i class="mdi mdi-border-color"></i>
                                                                    </button>
                                                                </td>
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
<script src="../scripts/assetType.js"></script>
</html>