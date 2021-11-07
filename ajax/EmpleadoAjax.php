<?php
	if (!empty($_POST['action'])){
	require_once ("../config/Conexion.php");

	$action=(isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
    $nombre =(isset($_REQUEST["nombre"])) ? $_REQUEST["nombre"] : "";
    $apellido =(isset($_REQUEST["apellido"])) ? $_REQUEST["apellido"] : "";
    $direccion =(isset($_REQUEST["direccion"])) ? $_REQUEST["direccion"] : "";
    $telefono = (isset($_REQUEST["telefono"])) ? intval($_REQUEST["telefono"]) : 0;
    $sexo = (isset($_REQUEST["sexo"])) ? $_REQUEST["sexo"] : "";
	$correo =(isset($_REQUEST["correo"])) ? $_REQUEST["correo"] : "";
    $documento =(isset($_REQUEST["documento"])) ? $_REQUEST["documento"] : "";
	$fecha_nacimiento = (isset($_REQUEST["fecha_nacimiento"])) ? $_REQUEST["fecha_nacimiento"] : "";
    $cargo = (isset($_REQUEST["cargo"])) ? intval($_REQUEST["cargo"]) : 0;
	$codigo = (isset($_REQUEST["codigo"])) ? intval($_REQUEST["codigo"]) : 0;
    
	switch ($action) {
        case 'add':
		case 'edit':
			if (intval($codigo)>0) {
				$sql = "UPDATE empleado SET nombre='".$nombre."',  apellido='".$apellido."', direccion='".$direccion."', telefono='".$telefono."', sexo='".$sexo."', correo='".$correo."', documento='".$documento."', fecha_nacimiento='".$fecha_nacimiento."', cargo='".$cargo."' WHERE codigo=".$codigo;
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Modificar Empleado",
                        "message"=>"El Empleado ha sido actualizado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Modificar Empleado",
                        "message"=>"Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}else{
				$sql = "INSERT INTO empleado(codigo, nombre, apellido, direccion, telefono, sexo, correo, documento, fecha_nacimiento, cargo) VALUES (NULL,'$nombre','$apellido','$direccion','$telefono','$sexo','$correo','$documento','$fecha_nacimiento','$cargo')";
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Agregar Empleado",
                        "message"=>"El empleado ha sido guardado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Agregar empleado",
                        "message"=>"Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}
            break;
        case 'delete':
            $sql = "DELETE FROM  empleado WHERE codigo=".$codigo;
            $query = mysqli_query($con,$sql);
            if ($query) {
                $alert=[
                    "title"=>"Eliminar empleado",
                    "message"=>"El empleado ha sido eliminado con éxito.",
                    "icon"=>"success"
                ];
                echo json_encode($alert);
            } else {
                $alert=[
                    "title"=>"Eliminar emplado",
                    "message"=>"Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.",
                    "icon"=>"error"
                ];
                echo json_encode($alert);
            }
            break;
        
        default:
        $alert=[
            "title"=>"Error",
            "message"=>"La acción especificada no fue encontrada.",
            "icon"=>"error"
        ];
        echo json_encode($alert);
            break;
    }
	} else {
        $alert=[
            "title"=>"Error",
            "message"=>"La acción especificada no fue encontrada.",
            "icon"=>"error"
        ];
        echo json_encode($alert);
	}
    
?>