$(function () {
    load(1);
});

function load(page) {
    var query = $("#q").val();
    var per_page = 10;
    var parametros = { "action": "empleadoList", "page": page, 'query': query, 'per_page': per_page };
    $("#loader").fadeIn('slow');
    $.ajax({
        url: '../../ajax/ListingAjax.php',
        data: parametros,
        beforeSend: function (objeto) {
            $("#loader").html("Cargando...");
        },
        success: function (data) {
            $("#empleadoList").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$('#btn-add').on('click', function (event) {
    $('#codigo').val(0);
    $("#title-modal").html("Nuevo empleado");
    $('#addEmpleadoModal').modal('show');
})

$('#addEmpleadoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    if (button.length > 0) {
        $("#title-modal").html("Modificar empleado");
    }

    $('#nombre').val(button.data('nombre'));
    $('#apellido').val(button.data('apellido'));
    $('#direccion').val(button.data('direccion'));
    $('#telefono').val(button.data('telefono'));
    $('#sexo').val(button.data('sexo'));
    $('#correo').val(button.data('correo'));
    $('#documento').val(button.data('documento'));
    $('#fecha_nacimiento').val(button.data('fecha'));
    $('#cargo').val(button.data('cargo'));
    $('#codigo').val(button.data('id'));
})

$('#deleteEmpleadoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $('#id_delete').val(id);
})

$("#add_empleado").submit(function (event) {
    event.preventDefault();
    var parametros = $(this).serializeArray();
    var data = {};
    $(parametros).each(function (index, obj) {
        data[obj.name] = obj.value;
    });
    if (!isNaN($("#codigo").val()) && parseInt($("#codigo").val()) > 0 &&
        $("#codigo").val() != undefined && $("#codigo").val() != null &&
        /^([0-9])*$/.test($("#codigo").val())) {
        data.action = "edit";
    } else {
        data.action = "add";
    }
    console.log(data);

    //Validar que el empleado sea mayor de edad
    let edad = calcularEdad(data.fecha_nacimiento);
    if(edad < 18){
        swal({"title":"Error de validación","message":"El empleado es menor de edad","icon":"error"});
        return;
    }


    $.ajax({
        type: "POST",
        url: '../../ajax/EmpleadoAjax.php',
        data: data,
        success: function (obj) {
            swal(JSON.parse(obj));
            load(1);
            $('#addEmpleadoModal').modal('hide');
        }
    });
});

$("#delete_empleado").submit(function (event) {
    let id = $("#id_delete").val();
    $.ajax({
        type: "POST",
        url: '../../ajax/EmpleadoAjax.php',
        data: { codigo: id, action: "delete" },
        success: function (data) {
            swal(JSON.parse(data));
            load(1);
            $('#deleteEmpleadoModal').modal('hide');
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

function calcularEdad(fecha_nacimiento) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha_nacimiento);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return edad;
}