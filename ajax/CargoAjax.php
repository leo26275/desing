<?php
	if (!empty($_POST['action'])){
	require_once ("../config/Conexion.php");

	$action=(isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
    $nombre =(isset($_REQUEST["nombre"])) ? $_REQUEST["nombre"] : "";
	$funciones =(isset($_REQUEST["funciones"])) ? $_REQUEST["funciones"] : "";
	$id_cargo = (isset($_REQUEST["id_cargo"])) ? intval($_REQUEST["id_cargo"]) : 0;
	
	switch ($action) {
        case 'add':
		case 'edit':
			if (intval($id_cargo)>0) {
				$sql = "UPDATE cargo SET nombre='".$nombre."', funciones='".$funciones."' WHERE id_cargo=".$id_cargo;
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Modificar cargo",
                        "message"=>"El cargo ha sido actualizado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Modificar cargo",
                        "message"=>"Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}else{
				$sql = "INSERT INTO cargo(id_cargo, nombre, funciones) VALUES (NULL,'$nombre','$funciones')";
				$query = mysqli_query($con,$sql);
				if ($query) {
                    $alert=[
                        "title"=>"Agregar cargo",
                        "message"=>"El cargo ha sido guardado con éxito.",
                        "icon"=>"success"
                    ];
                    echo json_encode($alert);
				} else {
                    $alert=[
                        "title"=>"Agregar cargo",
                        "message"=>"Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.",
                        "icon"=>"error"
                    ];
                    echo json_encode($alert);
				}
			}
            break;
        case 'delete':
            $sql = "DELETE FROM  cargo WHERE id_cargo=".$id_cargo;
            $query = mysqli_query($con,$sql);
            if ($query) {
                $alert=[
                    "title"=>"Eliminar cargo",
                    "message"=>"El cargo ha sido eliminado con éxito.",
                    "icon"=>"success"
                ];
                echo json_encode($alert);
            } else {
                $alert=[
                    "title"=>"Eliminar cargo",
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