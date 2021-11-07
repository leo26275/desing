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
                                                <h4 class="card-title">Nuevo usuario</h4>
                                                <form class="form-sample">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label>Usuario<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="newUser.user" type="text"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label>Contraseña<span
                                                                        style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="newUser.clave" type="password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label>Empleado<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select v-model="newUser.id" class="form-control">
                                                                        <option disabled value="">-- Seleccione
                                                                            el empleado --</option>
                                                                        <option v-for="elem in empleados"
                                                                            v-bind:value="elem.codigo">
                                                                            {{elem.nombre}}
                                                                        </option>
                                                                    </select>
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
                                                <h4 class="card-title">Modificacion de usuario</h4>
                                                <form class="form-sample">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label>Usuario<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="correntAgency.usuario" type="text"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label>Contraseña<span
                                                                        style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input v-model="correntAgency.clave" type="password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label>Empleado<span style="color: red">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select v-model="correntAgency.idempleado"
                                                                        class="form-control">
                                                                        <option disabled value="">-- Seleccione
                                                                            el empleado --</option>
                                                                        <option v-for="elem in empleados"
                                                                            v-bind:value="elem.codigo">
                                                                            {{elem.nombre}}
                                                                        </option>
                                                                    </select>
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
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                                            Modificar
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
                                                    <h4>Lista de usuarios</h4>
                                                    <hr>
                                                    <div style="text-align: right;">
                                                        <button class="btn btn-default"><i class="mdi mdi-file-pdf"></i>
                                                            Reporte</button>
                                                        <button
                                                            @click="listadoregistros=false, formularioregistros=true"
                                                            class="btn btn-gradient-success btn-rounded btn-fw"
                                                            id="btnagregar"><i class="mdi mdi mdi-plus-circle"></i>
                                                            Nuevo usuario
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
                                                                <th>Nombre de usuario</th>
                                                                <th>Empleado</th>
                                                                <th>Estado</th>
                                                                <th style="text-align: center;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="item in users">
                                                                <td>{{item.usuario}}</td>
                                                                <td>{{item.nombre}}</td>
                                                                <td v-if="item.estado==0"><span
                                                                        class="badge badge-danger">Desactivado</span>
                                                                </td>
                                                                <td v-else><span class="badge bg-success"> Activado
                                                                    </span></td>
                                                                <td style="text-align: center;">
                                                                    <button
                                                                        @click="formularioregistrosEdit=true,listadoregistros=false, selectType(item);"
                                                                        title="Editar" type="button"
                                                                        class="btn btn-gradient-dark btn-rounded btn-icon">
                                                                        <i class="mdi mdi-border-color"></i>
                                                                    </button>

                                                                    <button v-if="item.estado==0"
                                                                        @click="selectType(item),alertaActivar();"
                                                                        type="button" title="Acivar"
                                                                        class="btn btn-gradient-danger btn-rounded btn-icon">
                                                                        <i class="mdi mdi-close"></i>
                                                                    </button>

                                                                    <button v-else
                                                                        @click="selectType(item),alertaDesabilitar();"
                                                                        title="Desactivar" type="button"
                                                                        class="btn btn-gradient-success btn-rounded btn-icon">
                                                                        <i class="mdi mdi-check"></i>
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
<script src="../scripts/user.js"></script>

</html>