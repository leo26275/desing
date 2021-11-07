<?php
	require_once ("../config/Conexion.php");
if (isset($_REQUEST["action"])) {
    $action = (isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
    switch ($action) {
        case 'proveedorList':
            $query=(isset($_REQUEST["query"])) ? $_REQUEST["query"] : "";
    
            $tables="proveedor";
            $campos="*";
            $sWhere=" proveedor.nombre LIKE '%".$query."%'";
            $sWhere.=" order by proveedor.nombre";
            
            
            include 'pagination.php'; //include pagination file
            //pagination variables
            $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
            $per_page = intval($_REQUEST['per_page']); //how much records you want to show
            $adjacents  = 4; //gap between pages after number of adjacents
            $offset = ($page - 1) * $per_page;
            //Count the total number of row in your table*/
            $count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
            if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
            else {echo mysqli_error($con);}
            $total_pages = ceil($numrows/$per_page);
            //main query to fetch the data
            $query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
            //loop through fetched data
            if ($numrows>0){
                
            ?>
                                <?php 
                                $finales=0;
                                while($row = mysqli_fetch_array($query)){	
                                    $id_proveedor=$row['id_proveedor'];
                                    $nombre=$row['nombre'];
                                    $correo=$row['correo'];
                                    $direccion=$row['direccion'];
                                    $telefono=$row['telefono'];					
                                    $finales++;
                                ?>	
                                <tr class="<?php echo $text_class;?>">
                                    <td class='text-center'><?php echo $nombre;?></td>
                                    <td ><?php echo $correo;?></td>
                                    <td ><?php echo $direccion;?></td>
                                    <td ><?php echo $telefono;?></td>
                                    <td>
                                    <button
                                        title="Editar" type="button"
                                        class="btn btn-gradient-dark btn-rounded btn-icon" data-target="#addProveedorModal" 
                                        data-toggle="modal" data-nombre='<?php echo $nombre;?>' data-correo="<?php echo $correo;?>" 
                                        data-direccion="<?php echo $direccion;?>" data-telefono="<?php echo $telefono?>" 
                                        data-id="<?php echo $id_proveedor; ?>">
                                        <i class="mdi mdi-border-color"></i>
                                    </button>
                                    <button data-target="#deletePreoveedortModal" 
                                        type="button" title="Acivar"
                                        class="btn btn-gradient-danger btn-rounded btn-icon" 
                                        data-toggle="modal" data-id="<?php echo $id_proveedor; ?>">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan='6'> 
                                        <?php 
                                            $inicios=$offset+1;
                                            $finales+=$inicios -1;
                                            echo "Mostrando $inicios al $finales de $numrows registros";
                                            echo paginate( $page, $total_pages, $adjacents);
                                        ?>
                                    </td>
                                </tr>
            <?php	
            }else{
                echo "<tr><td colspan='5' class='text-center'>No se encontrarón registros</td></tr>";
            }	
            break;
        case 'cargoList':
            $query=(isset($_REQUEST["query"])) ? $_REQUEST["query"] : "";
    
            $tables="cargo";
            $campos="*";
            $sWhere=" cargo.nombre LIKE '%".$query."%'";
            $sWhere.=" order by cargo.nombre";
            
            
            include 'pagination.php'; //include pagination file
            //pagination variables
            $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
            $per_page = intval($_REQUEST['per_page']); //how much records you want to show
            $adjacents  = 4; //gap between pages after number of adjacents
            $offset = ($page - 1) * $per_page;
            //Count the total number of row in your table*/
            $count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
            if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
            else {echo mysqli_error($con);}
            $total_pages = ceil($numrows/$per_page);
            //main query to fetch the data
            $query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
            //loop through fetched data
            if ($numrows>0){
                
            ?>
                                <?php 
                                $finales=0;
                                while($row = mysqli_fetch_array($query)){	
                                    $id_cargo=$row['id_cargo'];
                                    $nombre=$row['nombre'];
                                    $funciones=$row['funciones'];				
                                    $finales++;
                                ?>	
                                <tr class="<?php echo $text_class;?>">
                                    <td class='text-center'><?php echo $nombre;?></td>
                                    <td ><?php echo $funciones;?></td>
                                    <td>
                                    <button
                                        title="Editar" type="button"
                                        class="btn btn-gradient-dark btn-rounded btn-icon" data-target="#addCargoModal" 
                                        data-toggle="modal" data-nombre='<?php echo $nombre;?>' data-funciones="<?php echo $funciones;?>" 
                                        data-id="<?php echo $id_cargo; ?>">
                                        <i class="mdi mdi-border-color"></i>
                                    </button>
                                    <button data-target="#deleteCargoModal" 
                                        type="button" title="Acivar"
                                        class="btn btn-gradient-danger btn-rounded btn-icon" 
                                        data-toggle="modal" data-id="<?php echo $id_cargo; ?>">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan='6'> 
                                        <?php 
                                            $inicios=$offset+1;
                                            $finales+=$inicios -1;
                                            echo "Mostrando $inicios al $finales de $numrows registros";
                                            echo paginate( $page, $total_pages, $adjacents);
                                        ?>
                                    </td>
                                </tr>
            <?php	
            }else{
                echo "<tr><td colspan='5' class='text-center'>No se encontrarón registros</td></tr>";
            }	
            break;
        case 'empleadoList':
            $query=(isset($_REQUEST["query"])) ? $_REQUEST["query"] : "";
    
            $tables="empleado as emp INNER JOIN cargo as cr on cr.id_cargo=emp.cargo";
            $campos="emp.codigo,emp.nombre,emp.apellido,emp.direccion,emp.telefono,emp.sexo,emp.correo,emp.documento,emp.fecha_nacimiento,cr.id_cargo,(cr.nombre) as cargo";
            $sWhere=" emp.nombre LIKE '%".$query."%'";
            $sWhere.=" order by emp.nombre asc";
            
            
            include 'pagination.php'; //include pagination file
            //pagination variables
            $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
            $per_page = intval($_REQUEST['per_page']); //how much records you want to show
            $adjacents  = 4; //gap between pages after number of adjacents
            $offset = ($page - 1) * $per_page;
            //Count the total number of row in your table*/
            $count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
            if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
            else {echo mysqli_error($con);}
            $total_pages = ceil($numrows/$per_page);
            //main query to fetch the data
            $query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
            //loop through fetched data
            if ($numrows>0){
                
            ?>
                                <?php 
                                $finales=0;
                                while($row = mysqli_fetch_array($query)){	
                                    $codigo=$row['codigo'];
                                    $nombre=$row['nombre'];
                                    $apellido=$row['apellido'];
                                    $direccion=$row['direccion'];
                                    $telefono=$row['telefono'];
                                    $sexo=$row['sexo'];
                                    $correo=$row['correo'];
                                    $documento=$row['documento'];
                                    $fecha_nacimiento=$row['fecha_nacimiento'];
                                    $cargo=$row['cargo'];					
                                    $finales++;

                                    

                                ?>	
                                <tr class="<?php echo $text_class;?>">
                                    <td class='text-center'><?php echo $nombre;?></td>
                                    <td ><?php echo $apellido;?></td>
                                    <td ><?php echo $telefono;?></td>
                                    <td ><?php echo $cargo;?></td>
                                    <td>
                                    <button
                                        title="Editar" type="button"
                                        class="btn btn-gradient-dark btn-rounded btn-icon" data-target="#addEmpleadoModal" 
                                        data-toggle="modal" data-nombre='<?php echo $nombre;?>' data-apellido="<?php echo $apellido;?>" 
                                        data-direccion="<?php echo $direccion;?>" data-telefono="<?php echo $telefono?>" 
                                        data-sexo="<?php echo $sexo;?>" data-correo="<?php echo $correo?>" 
                                        data-documento="<?php echo $documento;?>" data-fecha_nacimiento="<?php echo $fecha_nacimiento?>" 
                                        data-cargo="<?php echo $row['id_cargo'];?>"
                                        data-id="<?php echo $codigo; ?>">
                                        <i class="mdi mdi-border-color"></i>
                                    </button>
                                    <button data-target="#deleteEmpleadoModal" 
                                        type="button" title="Acivar"
                                        class="btn btn-gradient-danger btn-rounded btn-icon" 
                                        data-toggle="modal" data-id="<?php echo $codigo; ?>">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan='6'> 
                                        <?php 
                                            $inicios=$offset+1;
                                            $finales+=$inicios -1;
                                            echo "Mostrando $inicios al $finales de $numrows registros";
                                            echo paginate( $page, $total_pages, $adjacents);
                                        ?>
                                    </td>
                                </tr>
            <?php	
            }else{
                echo "<tr><td colspan='5' class='text-center'>No se encontrarón registros</td></tr>";
            }	
            break;
        case 'clienteList':
            $query=(isset($_REQUEST["query"])) ? $_REQUEST["query"] : "";
    
            $tables="cliente";
            $campos="*";
            $sWhere=" cliente.nombre LIKE '%".$query."%'";
            $sWhere.=" order by cliente.nombre";
            
            
            include 'pagination.php'; //include pagination file
            //pagination variables
            $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
            $per_page = intval($_REQUEST['per_page']); //how much records you want to show
            $adjacents  = 4; //gap between pages after number of adjacents
            $offset = ($page - 1) * $per_page;
            //Count the total number of row in your table*/
            $count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
            if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
            else {echo mysqli_error($con);}
            $total_pages = ceil($numrows/$per_page);
            //main query to fetch the data
            $query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
            //loop through fetched data
            if ($numrows>0){
                
            ?>
                                <?php 
                                $finales=0;
                                while($row = mysqli_fetch_array($query)){	
                                    $codigo_cliente=$row['codigo_cliente'];
                                    $nombre=$row['nombre'];
                                    $apellido=$row['apellido'];
                                    $direccion=$row['direccion'];
                                    $telefono=$row['telefono'];					
                                    $finales++;
                                ?>	
                                <tr class="<?php echo $text_class;?>">
                                    <td class='text-center'><?php echo $nombre;?></td>
                                    <td ><?php echo $apellido;?></td>
                                    <td ><?php echo $direccion;?></td>
                                    <td ><?php echo $telefono;?></td>
                                    <td>
                                    <button
                                        title="Editar" type="button"
                                        class="btn btn-gradient-dark btn-rounded btn-icon" data-target="#addClienteModal" 
                                        data-toggle="modal" data-nombre='<?php echo $nombre;?>' data-apellido="<?php echo $apellido;?>" 
                                        data-direccion="<?php echo $direccion;?>" data-telefono="<?php echo $telefono?>" 
                                        data-id="<?php echo $codigo_cliente; ?>">
                                        <i class="mdi mdi-border-color"></i>
                                    </button>
                                    <button data-target="#deleteClienteModal" 
                                        type="button" title="Acivar"
                                        class="btn btn-gradient-danger btn-rounded btn-icon" 
                                        data-toggle="modal" data-id="<?php echo $codigo_cliente; ?>">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td colspan='6'> 
                                        <?php 
                                            $inicios=$offset+1;
                                            $finales+=$inicios -1;
                                            echo "Mostrando $inicios al $finales de $numrows registros";
                                            echo paginate( $page, $total_pages, $adjacents);
                                        ?>
                                    </td>
                                </tr>
            <?php	
            }else{
                echo "<tr><td colspan='5' class='text-center'>No se encontrarón registros</td></tr>";
            }	
            break;
        
        default:
            echo "La petición solicitada no ha podido ser procesada";
            break;
    }
}