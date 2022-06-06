<?php
    require_once('../class/compras.class.php');
    $compraObj->validateRol('Empleado'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $compras = $compraObj->create($data);
                if($compras){
                    $compraObj->alerta("Registro insertado correctamente","success");
                    $compra = $compraObj->read();
                    include('view/compras.php');
                }else{
                    $compraObj->alerta("El registro no se pudo insertar correctamente","danger");
                    include('view/compras.form.php');
                }
            }else{
                include("view/compras.form.php");    
            }
            break;

        case 'delete':
            $compra =$compraObj->delete($id);
            if($compra){
                $compraObj->alerta("Registro borrado exitosamente","success");
            }else{
                $compraObj->alerta("Registro no encontrado","danger");   
            }
            $compra = $compraObj->read();
            include('view/compras.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $compra = $compraObj->update($id, $data);
                }
                if($compra){
                    $compraObj->alerta("Registro actualizado correctamente","success");
                    $compra = $compraObj->read();
                    include('view/compras.php');
                }else{
                    $compraObj->alerta("Registro no actualizado","danger");
                    include('view/compras.form.php');
                }
            }else{
                if(!is_null($id)){
                    $compra = $compraObj->readOne($id);
                    if(isset($compra[0])){
                        $data=$compra[0];
                        include("view/compras.form.php");
                    }else{
                        $compraObj->alerta("Registro no encontrado","danger");
                        $compra = $compraObj->read();
                        include('view/compras.php');
                    }
                }
            }
            break;
        
        case 'reporte':
                ob_clean();
                $compra = $compraObj->read();
                ob_start();
                include('view/ventas.reporte.php');
                $variable = ob_get_clean();
                $compraObj->pdf('P', 'A4', $variable, 'prueba.pdf');
            break;
        
        default:                
            $compra = $compraObj->read();
            include('view/compras.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->