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
                                            <div v-if="formularioregistros">
                                                <h5 class="card-title">Nueva compra</h5>
                                                <hr>
                                                <form class="form-sample">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Información general
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group row">
                                                                        <label>N° Factura<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="1010">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group row">
                                                                        <label>Fecha<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input type="date" class="form-control"
                                                                                placeholder="1010">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                      <div class="form-group row">
                                                                        <label>Proveedor<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="newActiveRegister.codedepartamento"
                                                                                class="form-control">
                                                                                <option disabled value="">-- Seleccione
                                                                                    proveedor --</option>
                                                                                <option v-for="elem in departaments"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group row">
                                                                        <button     
                                                                            type="button"
                                                                            class="btn btn-gradient-info"
                                                                            data-toggle="modal" data-target="#exampleModal">
                                                                            <i class="mdi mdi-clipboard-plus"></i>
                                                                        Nuevo producto</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            Detalles de compra
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="x_content">
                                                                <br>
                                                                <!-- Mostrar datos   -->
                                                                <table id="example" class="table table-striped table-bordered"
                                                                    style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Producto</th>
                                                                            <th>Cantidad</th>
                                                                            <th>Precio</th>
                                                                            <th>% ganancia</th>
                                                                            <th style="text-align: center;">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Pelota M</td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <div>
                                                                                    <button
                                                                                        title="Eliminar" type="button"
                                                                                        class="btn btn-gradient-danger btn-rounded btn-icon">
                                                                                        <i class="mdi mdi mdi-popcorn"></i>
                                                                                    </button>
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Camisa S</td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <div>
                                                                                    <button
                                                                                        title="Eliminar" type="button"
                                                                                        class="btn btn-gradient-danger btn-rounded btn-icon">
                                                                                        <i class="mdi mdi mdi-popcorn"></i>
                                                                                    </button>
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tacos 29</td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td>
                                                                            <input type="number" class="form-control"/>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <div>
                                                                                    <button
                                                                                        title="Eliminar" type="button"
                                                                                        class="btn btn-gradient-danger btn-rounded btn-icon">
                                                                                        <i class="mdi mdi mdi-popcorn"></i>
                                                                                    </button>
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <small>Los campos con <span style="color: red">*</span> son
                                                        obligatorios</small>
                                                    <hr>
                                                    <div style="text-align: center;">
                                                        <button @click="addActive();" type="button"
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

                                            <div class="col-md-12 col-sm-12" v-if="listadoregistros">
                                                <div class="x_title">
                                                    <h4>Lista de compras</h4>
                                                    <hr>
                                                    <div style="text-align: right;">
                                                    <a class="btn btn-light" href="../../reportes/ractivos.php" target="_blank" rel="noopener noreferrer">
                                                     <i class="mdi mdi-file-pdf"></i> Reporte</a>
                                                        <button
                                                            @click="listadoregistros=false, formularioregistros=true"
                                                            class="btn btn-gradient-success btn-rounded btn-fw"
                                                            id="btnagregar"><i class="mdi mdi mdi-plus-circle"></i>
                                                            Nueva compra
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
                                                                <th>N° Factura</th>
                                                                <th>Fecha</th>
                                                                <th>Proveedor</th>
                                                                <th style="text-align: center;">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1200</td>
                                                                <td>12/08/2021</td>
                                                                <td>Alvaro Misael Alas Fuentes</td>
                                                                <td style="text-align: center;">
                                                                    <div>

                                                                        <button
                                                                            title="factura" type="button"
                                                                            class="btn btn-gradient-dark btn-rounded btn-icon">
                                                                            <i class="mdi mdi-clipboard-text"></i>
                                                                        </button>
                                                                        <button
                                                                            title="detalles" type="button"
                                                                            class="btn btn-gradient-info btn-rounded btn-icon">
                                                                            <i class="mdi mdi mdi-eye"></i>
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

                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista de productos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label>Buscar</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control"
                                        placeholder="Código, nombre">
                                </div>
                            </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                            <!-- Mostrar datos   -->
                            <table id="example" class="table table-hover"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1200</td>
                                    <td>Camisa XL</td>
                                    <td style="text-align: center;">
                                        <div>

                                            <button
                                                title="factura" type="button"
                                                class="btn btn-gradient-dark btn-rounded btn-icon">
                                                <i class="mdi mdi-clipboard-plus"></i>
                                            </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1200</td>
                                    <td>Pelota M</td>
                                    <td style="text-align: center;">
                                        <div>

                                            <button
                                                title="factura" type="button"
                                                class="btn btn-gradient-dark btn-rounded btn-icon">
                                                <i class="mdi mdi-clipboard-plus"></i>
                                            </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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