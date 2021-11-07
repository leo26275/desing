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
                                                <h5 class="card-title">Nuevo activo</h5>
                                                <hr>
                                                <form class="form-sample">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Información general
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Código<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="newActiveRegister.codigo"
                                                                                type="text" class="form-control"
                                                                                placeholder="1010" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Sucursal<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="newActiveRegister.codesucursal"
                                                                                class="form-control">
                                                                                <option disabled value="">-- Seleccione
                                                                                    sucursal --</option>
                                                                                <option v-for="elem in agencies"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Departamento<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="newActiveRegister.codedepartamento"
                                                                                class="form-control">
                                                                                <option disabled value="">-- Seleccione
                                                                                    departamento --</option>
                                                                                <option v-for="elem in departaments"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Tipo de activo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="newActiveRegister.codetipo"
                                                                                class="form-control">
                                                                                <option disabled value="">-- Seleccione
                                                                                    tipo de activo --</option>
                                                                                <option v-for="elem in assetTypes"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Tipo adquisición<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select v-model="newActiveRegister.tipo"
                                                                                class="form-control">
                                                                                <option value="">-- Seleccione tipo --
                                                                                </option>
                                                                                <option value="Nuevo"> Nuevo </option>
                                                                                <option value="Usado"> Usado </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            Información específica del activo
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Nombre<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea v-model="newActiveRegister.nombre"
                                                                                placeholder="Bocina, color negro"
                                                                                class="form-control" rows="2"
                                                                                cols="50"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Marca<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="newActiveRegister.marca"
                                                                                type="text" class="form-control"
                                                                                placeholder="SONY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Modelo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="newActiveRegister.modelo"
                                                                                type="text" class="form-control"
                                                                                placeholder="RYDEME">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Serie<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="newActiveRegister.serie"
                                                                                type="text" class="form-control"
                                                                                placeholder="HR 1701">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Fecha de adquisición<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="newActiveRegister.fecha"
                                                                                type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Valor en dolares<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text bg-gradient-info text-white">$</span>
                                                                                </div>
                                                                                <input v-model="newActiveRegister.valor"
                                                                                    type="number" class="form-control"
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
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            Ubicación
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Encargado<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select
                                                                                v-model="newActiveRegister.codempleado"
                                                                                class="form-control">
                                                                                <option disabled value=0>-- Seleccione
                                                                                    el encargado --</option>
                                                                                <option v-for="elem in employees"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.nombre }} {{elem.apellido}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Ubicación<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea
                                                                                v-model="correntActiveRegister.ubicacion"
                                                                                placeholder="Depto de ventas"
                                                                                class="form-control" rows="2"
                                                                                cols="50"></textarea>
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

                                            <div v-if="formularioregistrosEdit">
                                                <h5 class="card-title">Nuevo activo</h5>
                                                <hr>
                                                <form class="form-sample">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Información general
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Código<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input
                                                                                v-model="correntActiveRegister.codigo"
                                                                                type="text" class="form-control"
                                                                                placeholder="1010" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Sucursal<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="correntActiveRegister.idsucursal"
                                                                                class="form-control" disabled>
                                                                                <option disabled value="">-- Seleccione
                                                                                    sucursal --</option>
                                                                                <option v-for="elem in agencies"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Departamento<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="correntActiveRegister.iddepartamento"
                                                                                class="form-control" disabled>
                                                                                <option disabled value="">-- Seleccione
                                                                                    departamento --</option>
                                                                                <option v-for="elem in departaments"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Tipo de activo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select @click="recuperar();"
                                                                                v-model="correntActiveRegister.idtipoactivo"
                                                                                class="form-control" disabled>
                                                                                <option disabled value="">-- Seleccione
                                                                                    tipo de activo --</option>
                                                                                <option v-for="elem in assetTypes"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.codigo }} {{elem.nombre}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Tipo adquisición<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select v-model="correntActiveRegister.tipo"
                                                                                class="form-control">
                                                                                <option value="">-- Seleccione tipo --
                                                                                </option>
                                                                                <option value="Nuevo"> Nuevo </option>
                                                                                <option value="Usado"> Usado </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            Información específica del activo
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Nombre<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea
                                                                                v-model="correntActiveRegister.nombre"
                                                                                placeholder="Bocina, color negro"
                                                                                class="form-control" rows="2"
                                                                                cols="50"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Marca<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="correntActiveRegister.marca"
                                                                                type="text" class="form-control"
                                                                                placeholder="SONY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Modelo<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input
                                                                                v-model="correntActiveRegister.modelo"
                                                                                type="text" class="form-control"
                                                                                placeholder="RYDEME">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Serie<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="correntActiveRegister.serie"
                                                                                type="text" class="form-control"
                                                                                placeholder="HR 1701">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Fecha de adquisición<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <input v-model="correntActiveRegister.fecha"
                                                                                type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Valor en dolares<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text bg-gradient-info text-white">$</span>
                                                                                </div>
                                                                                <input
                                                                                    v-model="correntActiveRegister.valor"
                                                                                    type="number" class="form-control"
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
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            Ubicación
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Encargado<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <select
                                                                                v-model="correntActiveRegister.idempleado"
                                                                                class="form-control">
                                                                                <option disabled value=0>-- Seleccione
                                                                                    el encargado --</option>
                                                                                <option v-for="elem in employees"
                                                                                    v-bind:value="elem.codigo">
                                                                                    {{ elem.nombre }} {{elem.apellido}}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label>Ubicación<span
                                                                                style="color: red">*</span></label>
                                                                        <div class="col-sm-12">
                                                                            <textarea
                                                                                v-model="correntActiveRegister.ubicacion"
                                                                                placeholder="Depto de ventas"
                                                                                class="form-control" rows="2"
                                                                                cols="50"></textarea>
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
                                                        <button @click="editActive();" type="button"
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
                                                    <h4>Lista de activos</h4>
                                                    <hr>
                                                    <div style="text-align: right;">
                                                    <a class="btn btn-light" href="../../reportes/ractivos.php" target="_blank" rel="noopener noreferrer">
                                        <i class="mdi mdi-file-pdf"></i> Reporte</a>
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
                                                                        <button
                                                                            v-if="item.clasificacion='Activo fijo intangible'"
                                                                            @click="selectActiveRegister(item),cargarDetalles();"
                                                                            data-toggle="modal" data-target=".bd-example-modal-lg"
                                                                            title="Calculos" type="button"
                                                                            class="btn btn-gradient-success btn-rounded btn-icon">
                                                                            <i class="mdi mdi-currency-usd"></i>
                                                                        </button>
                                                                        <button v-else
                                                                            @click="selectActiveRegister(item),cargarDetalles();"
                                                                            title="Calculos" type="button"
                                                                            data-toggle="modal" data-target=".bd-example-modal-lg"
                                                                            class="btn btn-gradient-success btn-rounded btn-icon">
                                                                            <i class="mdi mdi-currency-usd"></i>
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
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Dar de baja</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <hr>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Razón</label>
                                                            <select v-model="correntActiveRegister.razon"
                                                                class="form-control">
                                                                <option>Donado</option>
                                                                <option>Vendido</option>
                                                                <option>Desechado</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Observación</label>
                                                            <textarea v-model="correntActiveRegister.observacion"
                                                                class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer" style="text-align: center;">
                                                    <hr>
                                                    <button type="button"
                                                        class="btn btn-gradient-dark btn-rounded btn-fw"
                                                        data-dismiss="modal">Cerrar</button>
                                                    <button type="button" @click="darBaja();"
                                                        class="btn btn-gradient-success btn-rounded btn-fw">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Información</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <hr>
                                                </div>
                                                <div class="modal-body">
                                                    <p>El articulo fue: <strong>{{correntActiveRegister.razon}}</strong>
                                                    </p>

                                                    <p>Observaciones:
                                                        <strong>{{correntActiveRegister.observacion}}</strong></p>
                                                </div>
                                                <div class="modal-footer" style="text-align: center;">
                                                    <hr>
                                                    <button type="button"
                                                        class="btn btn-gradient-dark btn-rounded btn-fw"
                                                        data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade bd-example-modal-lg" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Depresiación
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="x_panel">
                                                    <div class="x_content">

                                                        <div class="card" style="width: 46  rem;">
                                                            <div class="card-header">
                                                                <strong>Código de activo:  </strong> <span
                                                                    style="color: red">{{ correntActiveRegister.codigo}}</span>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item"> <strong>Fecha:
                                                                    </strong>{{correntActiveRegister.fecha}}
                                                                </li>
                                                                <li class="list-group-item"> <strong>Monto:
                                                                    </strong>{{correntActiveRegister.valor}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <br>
                                                        <div class="clearfix"></div>
                                                        <div class="card" style="width: 46  rem;">
                                                            <div class="card-header">
                                                                <strong>Detalles </strong>
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Año</th>
                                                                                <th scope="col">Depreciación del año</th>
                                                                                <th scope="col">Depreciación acumulada</th>
                                                                                <th scope="col">valor residual</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr v-for="item in detalles">
                                                                <td>{{item.anio}}</td>
                                                                <td>{{item.depreciacion}}</td>
                                                                <td>{{item.acumulada}}</td>
                                                                <td>{{item.residuo}}</td>

                                                                </tr>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 col-sm-12  text-center">
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