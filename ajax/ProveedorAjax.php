<?php
	if (!empty($_POST['action'])){
	require_once ("../config/Conexion.php");

	$action=(isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
    $nombre =(isset($_REQUEST["nombre"])) ? $_REQUEST["nombre"] : "";
	$correo =(isset($_REQUEST["correo"])) ? $_REQUEST["correo"] : "";
	$direccion = (isset($_REQUEST["direccion"])) ? $_REQUEST["direccion"] : "";
	$telefono = (isset($_REQUEST["telefono"])) ? intval($_REQUEST["telefono"]) : 0;
	$id_proveedor = (isset($_REQUEST["id_proveedor"])) ? intval($_REQUEST["id_proveedor"]) : 0;
	
	switch ($action) {
        case 'add':
		case 'edit':
			if (intval($id_proveedor)>0) {
				$sql = "UPDATE proveedor SET nombre='".$nombre."', correo='".$correo."', direccion='".$direccion."', telefono='".$telefono."' WHERE id_proveedor=".$id_proveedor;
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Modificar proveedor",
                        "message"=>"El proveedor ha sido actualizado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Modificar proveedor",
                        "message"=>"Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}else{
				$sql = "INSERT INTO proveedor(id_proveedor, nombre, correo, direccion, telefono) VALUES (NULL,'$nombre','$correo','$direccion','$telefono')";
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Agregar Proveedor",
                        "message"=>"El proveedor ha sido guardado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Agregar Proveedor",
                        "message"=>"Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}
            break;
        case 'delete':
            $sql = "DELETE FROM  proveedor WHERE id_proveedor=".$id_proveedor;
            $query = mysqli_query($con,$sql);
            if ($query) {
                $alert=[
                    "title"=>"Eliminar proveedor",
                    "message"=>"El proveedor ha sido eliminado con éxito.",
                    "icon"=>"success"
                ];
                echo json_encode($alert);
            } else {
                $alert=[
                    "title"=>"Eliminar Proveedor",
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