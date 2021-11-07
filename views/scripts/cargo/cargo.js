$(function () {
    load(1);
});

function load(page) {
    var query = $("#q").val();
    var per_page = 10;
    var parametros = { "action": "cargoList", "page": page, 'query': query, 'per_page': per_page };
    $("#loader").fadeIn('slow');
    $.ajax({
        url: '../../ajax/ListingAjax.php',
        data: parametros,
        beforeSend: function (objeto) {
            $("#loader").html("Cargando...");
        },
        success: function (data) {
            $("#cargoList").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$('#btn-add').on('click', function (event) {
    $('#id_cargo').val(0);
    $("#title-modal").html("Nuevo cargo");
    $('#addCargoModal').modal('show');
})

$('#addCargoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    if (button.length > 0) {
        $("#title-modal").html("Modificar Cargo");
    }

    $('#nombre').val(button.data('nombre'));
    $('#funciones').val(button.data('funciones'));
    $('#id_cargo').val(button.data('id'));
})

$('#deleteCargoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $('#id_delete').val(id);
})

$("#add_cargo").submit(function (event) {
    event.preventDefault();
    var parametros = $(this).serializeArray();
    var data = {};
    $(parametros).each(function (index, obj) {
        data[obj.name] = obj.value;
    });
    if (!isNaN($("#id_cargo").val()) && parseInt($("#id_cargo").val()) > 0 &&
        $("#id_cargo").val() != undefined && $("#id_cargo").val() != null &&
        /^([0-9])*$/.test($("#id_cargo").val())) {
        data.action = "edit";
    } else {
        data.action = "add";
    }
    console.log(data);

    //Aqui comienza la validacion de los campos

    if (data.nombre == "") {
        swal({ "title": "Campos vacios", "message": "Ingrese el nombre", "icon": "error" });
        return;
    }

    if (data.nombre.length < 5) {
        swal({ "title": "Error", "message": "El nombre ingresado es menor que 5 caracteres", "icon": "error" });
        return;
    }
    if (data.funciones.length < 5) {
        swal({ "title": "Error", "message": "La funcion ingresada es menor que 5 caracteres", "icon": "error" });
        return;
    }

    if (data.funciones == "") {
        swal({ "title": "Campos vacios", "message": "Ingrese el campo Funciones", "icon": "error" });
        return;
    }

    $.ajax({
        type: "POST",
        url: '../../ajax/CargoAjax.php',
        data: data,
        success: function (obj) {
            swal(JSON.parse(obj));
            load(1);

            $('#addCargoModal').modal('hide');
        }
    });
});

$("#delete_cargo").submit(function (event) {
    let id = $("#id_delete").val();
    $.ajax({
        type: "POST",
        url: '../../ajax/CargoAjax.php',
        data: { id_cargo: id, action: "delete" },
        success: function (data) {
            swal(JSON.parse(data));
            load(1);
            $('#deleteCargoModal').modal('hide');
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
