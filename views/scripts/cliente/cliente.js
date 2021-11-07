$(function () {
    load(1);
});

function load(page) {
    var query = $("#q").val();
    var per_page = 10;
    var parametros = { "action": "clienteList", "page": page, 'query': query, 'per_page': per_page };
    $("#loader").fadeIn('slow');
    $.ajax({
        url: '../../ajax/ListingAjax.php',
        data: parametros,
        beforeSend: function (objeto) {
            $("#loader").html("Cargando...");
        },
        success: function (data) {
            $("#clientetList").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$('#btn-add').on('click', function (event) {
    $('#id_cliente').val(0);
    $("#title-modal").html("Nuevo cliente");
    $('#addClienteModal').modal('show');
})

$('#addClienteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    if (button.length > 0) {
        $("#title-modal").html("Modificar Cliente");
    }

    $('#nombre').val(button.data('nombre'));
    $('#apellido').val(button.data('apellido'));
    $('#direccion').val(button.data('direccion'));
    $('#telefono').val(button.data('telefono'));
    $('#codigo_cliente').val(button.data('id'));
})

$('#deleteClienteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $('#id_delete').val(id);
})

$("#add_cliente").submit(function (event) {
    event.preventDefault();
    var parametros = $(this).serializeArray();
    var data = {};
    $(parametros).each(function (index, obj) {
        data[obj.name] = obj.value;
    });
    if (!isNaN($("#codigo_cliente").val()) && parseInt($("#codigo_cliente").val()) > 0 &&
        $("#codigo_cliente").val() != undefined && $("#codigo_cliente").val() != null &&
        /^([0-9])*$/.test($("#codigo_cliente").val())) {
        data.action = "edit";
    } else {
        data.action = "add";
    }
    console.log(data);
    $.ajax({
        type: "POST",
        url: '../../ajax/ClienteAjax.php',
        data: data,
        success: function (obj) {
            swal(JSON.parse(obj));
            load(1);

            $('#addClienteModal').modal('hide');
        }
    });
});

$("#delete_cliente").submit(function (event) {
    let id = $("#id_delete").val();
    $.ajax({
        type: "POST",
        url: '../../ajax/ClienteAjax.php',
        data: { codigo_cliente: id, action: "delete" },
        success: function (data) {
            swal(JSON.parse(data));
            load(1);
            $('#deleteClienteModal').modal('hide');
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
