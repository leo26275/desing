<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Proveedores</title>
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
                                            <div class="col-md-12 col-sm-12">
                                                <div class="x_title">
                                                    <h4>Lista de proveedores</h4>
                                                    <hr>
                                                    <div class="row">
                                                        <div class='col-sm-8 align-right'>
                                                            <button class="btn btn-gradient-success btn-rounded btn-fw"
                                                                id="btn-add"><i class="mdi mdi mdi-plus-circle"></i>
                                                                Nuevo proveedor
                                                            </button>
                                                        </div>

                                                        <div class='col-sm-4 align-right'>
                                                            <div id="custom-search-input">
                                                                <div class="input-group col-md-12">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Buscar" id="q"
                                                                        onkeyup="load(1);" />
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                                <th>Nombre</th>
                                                                <th>Correo</th>
                                                                <th>Dirección</th>
                                                                <th>Teléfono</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="proveedortList">

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
    <div id="addProveedorModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <form name="add_proveedor" id="add_proveedor" autocomplete="off">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title" id="title-modal">Agregar proveedor</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <input type="hidden" name="id_proveedor" id="id_proveedor">

                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="correo" id="correo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <textarea type="text" name="direccion" id="direccion" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" name="telefono" id="telefono" class="form-control">
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-success" value="Guardar datos">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="deletePreoveedortModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <form name="delete_proveedor" id="delete_proveedor">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar proveedor</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>¿Seguro que quieres eliminar este registro?</p>
                        <p class="text-dark"><small>Esta acción no se puede deshacer.</small></p>
                        <input type="hidden" name="id_delete" id="id_delete">
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-danger" value="Sí, eliminar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../scripts/proveedor/proveedor.js"></script>

</html>