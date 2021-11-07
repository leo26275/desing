<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Activo</title>
    <!-- plugins:css -->
    <?php require_once "../includes/_head.php"; ?>
</head>

<body>
    <div class="container-scroller" id="app">
        <!-- partial:../../partials/_navbar.html -->
        <?php require_once "../includes/_navbar.php"; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php require_once "../includes/_sidebar.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            <i style="display: none" class="mdi mdi-close" id="bannerClose"></i>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-md-12 col-sm-12" v-if="listadoregistros">
                                                <div class="x_title">
                                                    <h4>Lista de activos</h4>
                                                    <hr>
                                                    <div style="text-align: right;">
                                                        <button class="btn btn-default"><i class="mdi mdi-file-pdf"></i>
                                                            Reporte</button>
                                                        <button
                                                            @click="listadoregistros=false, formularioregistros=true"
                                                            class="btn btn-gradient-success btn-rounded btn-fw"
                                                            id="btnagregar"><i class="mdi mdi mdi-plus-circle"></i>
                                                            Nuevo activo
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
                                                                <th>Tipo</th>
                                                                <th>F. adquisición</th>
                                                                <th>Valor ($)</th>
                                                                <th>Estado</th>
                                                                <th style="text-align: center;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="item in activos">
                                                                <td>{{item.codigo}}</td>
                                                                <td>{{item.nombre}}</td>
                                                                <td>{{item.tipo}}</td>
                                                                <td>{{forFecha(item.fecha)}}</td>
                                                                <td>{{item.valor}}</td>
                                                                <td v-if="item.estado==0"><span
                                                                        class="badge badge-danger">Dado de baja</span>
                                                                </td>
                                                                <td v-else><span class="badge bg-success"> Activo
                                                                    </span></td>
                                                                <td style="text-align: center;">
                                                                    <div>

                                                                        <button @click="selectActiveRegister(item);"
                                                                            title="Detalles" type="button"
                                                                            class="btn btn-gradient-info btn-rounded btn-icon">
                                                                            <i class="mdi mdi mdi-eye"></i>
                                                                        </button>
                                                                        <button @click="selectActiveRegister(item);"
                                                                            title="Depresiacion" type="button"
                                                                            class="btn btn-gradient-info btn-rounded btn-icon">
                                                                            <i class="mdi mdi mdi-eye"></i>
                                                                        </button>
                                                                        <button @click="selectActiveRegister(item);"
                                                                            title="Amortizacion" type="button"
                                                                            class="btn btn-gradient-info btn-rounded btn-icon">
                                                                            <i class="mdi mdi mdi-eye"></i>
                                                                        </button>
                                                                        <button
                                                                            @click="formularioregistrosEdit=true,listadoregistros=false, selectActiveRegister(item);"
                                                                            title="Editar" type="button"
                                                                            class="btn btn-gradient-dark btn-rounded btn-icon">
                                                                            <i class="mdi mdi-border-color"></i>
                                                                        </button>
                                                                        <button v-if="item.estado==0" type="button"
                                                                            title="Dado de baja"
                                                                            @click="selectActiveRegister(item);"
                                                                            data-toggle="modal"
                                                                            data-target="#exampleModal2"
                                                                            class="btn btn-gradient-danger btn-rounded btn-icon">
                                                                            <i class="mdi mdi-close"></i>
                                                                        </button>

                                                                        <button v-else title="Activo" type="button"
                                                                            @click="selectActiveRegister(item);"
                                                                            data-toggle="modal"
                                                                            data-target="#exampleModal"
                                                                            class="btn btn-gradient-success btn-rounded btn-icon">
                                                                            <i class="mdi mdi-check"></i>
                                                                        </button>
                                                                    </div>
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
<script src="../scripts/activeRegister.js"></script>

</html>