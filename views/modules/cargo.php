<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cargos</title>
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
                                                    <h4>Lista de Cargos</h4>
                                                    <hr>
                                                    <div class="row">
                                                        <div class='col-sm-8 align-right'>
                                                            <button class="btn btn-gradient-success btn-rounded btn-fw"
                                                                id="btn-add"><i class="mdi mdi mdi-plus-circle"></i>
                                                                Nuevo Cargo
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
                                                                <th>Funciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="cargoList">

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
    <div id="addCargoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <form name="add_cargo" id="add_cargo" autocomplete="off">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title" id="title-modal">Agregar Cargo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <input type="hidden" name="id_cargo" id="id_cargo">

                        </div>
                        <div class="form-group">
                            <label>Funciones</label>
                            <input type="text" name="funciones" id="funciones" class="form-control">
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
    <div id="deleteCargoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <form name="delete_cargo" id="delete_cargo">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Cargo</h4>
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
<script src="../scripts/cargo/cargo.js"></script>

</html>