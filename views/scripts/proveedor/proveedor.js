$(function () {
    load(1);
});

function load(page) {
    var query = $("#q").val();
    var per_page = 10;
    var parametros = { "action": "proveedorList", "page": page, 'query': query, 'per_page': per_page };
    $("#loader").fadeIn('slow');
    $.ajax({
        url: '../../ajax/ListingAjax.php',
        data: parametros,
        beforeSend: function (objeto) {
            $("#loader").html("Cargando...");
        },
        success: function (data) {
            $("#proveedortList").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$('#btn-add').on('click', function (event) {
    $('#id_proveedor').val(0);
    $("#title-modal").html("Nuevo proveedor");
    $('#addProveedorModal').modal('show');
})

$('#addProveedorModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    if (button.length > 0) {
        $("#title-modal").html("Modificar Proveedor");
    }

    $('#nombre').val(button.data('nombre'));
    $('#correo').val(button.data('correo'));
    $('#direccion').val(button.data('direccion'));
    $('#telefono').val(button.data('telefono'));
    $('#id_proveedor').val(button.data('id'));
})

$('#deletePreoveedortModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $('#id_delete').val(id);
})

$("#add_proveedor").submit(function (event) {
    event.preventDefault();
    var parametros = $(this).serializeArray();
    var data = {};
    $(parametros).each(function (index, obj) {
        data[obj.name] = obj.value;
    });
    if (!isNaN($("#id_proveedor").val()) && parseInt($("#id_proveedor").val()) > 0 &&
        $("#id_proveedor").val() != undefined && $("#id_proveedor").val() != null &&
        /^([0-9])*$/.test($("#id_proveedor").val())) {
        data.action = "edit";
    } else {
        data.action = "add";
    }
    console.log(data);

    //Aqui comienza la validacion de los campos
    
    if(data.nombre == ""){
        swal({"title":"Campos vacios","message":"Ingrese el nombre","icon":"error"});
        return;
    }

    if(data.nombre.length < 5){
        swal({"title":"Error","message":"El nombre ingresado es menor que 5 caracteres","icon":"error"});
        return;
    }

    if(data.direccion  == ""){
        swal({"title":"Campos vacios","message":"Ingrese el campo direccion","icon":"error"});
        return;
    }

    if(data.direccion.length < 25){
        swal({"title":"Error","message":"La direccion es menor que 25 caracteres","icon":"error"});
        return;
    }

    if(data.telefono  == ""){
        swal({"title":"Campos vacios","message":"Ingrese el campo teléfono","icon":"error"});
        return;
    }

    if(data.telefono.length < 8 || data.telefono.length > 8){
        swal({"title":"Error","message":"El teléfono ingresado es invalido","icon":"error"});
        return;
    }

     if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(data.correo))){
        swal({"title":"Error","message":"El email ingresado es invalido","icon":"error"});
        return;
    }

    //Aqui termina la validacion

    $.ajax({
        type: "POST",
        url: '../../ajax/ProveedorAjax.php',
        data: data,
        success: function (obj) {
            swal(JSON.parse(obj));
            load(1);

            $('#addProveedorModal').modal('hide');
        }
    });
});

$("#delete_proveedor").submit(function (event) {
    let id = $("#id_delete").val();
    $.ajax({
        type: "POST",
        url: '../../ajax/ProveedorAjax.php',
        data: { id_proveedor: id, action: "delete" },
        success: function (data) {
            swal(JSON.parse(data));
            load(1);
            $('#deletePreoveedortModal').modal('hide');
        }
    });
    event.preventDefault();
});


function swal(data) {
    Swal.fire(
        data.title,
        data.message,
        data.icon
    );
}
