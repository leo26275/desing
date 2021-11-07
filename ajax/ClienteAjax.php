<?php
	if (!empty($_POST['action'])){
	require_once ("../config/Conexion.php");

	$action=(isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
    $nombre =(isset($_REQUEST["nombre"])) ? $_REQUEST["nombre"] : "";
	$apellido =(isset($_REQUEST["apellido"])) ? $_REQUEST["apellido"] : "";
	$direccion = (isset($_REQUEST["direccion"])) ? $_REQUEST["direccion"] : "";
	$telefono = (isset($_REQUEST["telefono"])) ? intval($_REQUEST["telefono"]) : 0;
	$codigo_cliente = (isset($_REQUEST["codigo_cliente"])) ? intval($_REQUEST["codigo_cliente"]) : 0;
	
	switch ($action) {
        case 'add':
		case 'edit':
			if (intval($codigo_cliente)>0) {
				$sql = "UPDATE cliente SET nombre='".$nombre."', apellido='".$apellido."', direccion='".$direccion."', telefono='".$telefono."' WHERE codigo_cliente=".$codigo_cliente;
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Modificar Cliente",
                        "message"=>"El Cliente ha sido actualizado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Modificar Cliente",
                        "message"=>"Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}else{
				$sql = "INSERT INTO cliente(codigo_cliente, nombre, apellido, direccion, telefono) VALUES (NULL,'$nombre','$apellido','$direccion','$telefono')";
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Agregar cliente",
                        "message"=>"El cliente ha sido guardado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Agregar cliente",
                        "message"=>"Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}
            break;
        case 'delete':
            $sql = "DELETE FROM  cliente WHERE codigo_cliente=".$codigo_cliente;
            $query = mysqli_query($con,$sql);
            if ($query) {
                $alert=[
                    "title"=>"Eliminar cliente",
                    "message"=>"El cliente ha sido eliminado con éxito.",
                    "icon"=>"success"
                ];
                echo json_encode($alert);
            } else {
                $alert=[
                    "title"=>"Eliminar cliente",
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