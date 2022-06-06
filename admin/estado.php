<?php
    require_once('../class/estados.class.php');
    $Estados->validateRol('Empleado'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
    case 'create':
        $data = isset($_POST["data"])?$_POST["data"]:null;
        if(isset($data["enviar"])){
            $estados = $Estados->create($data);
                if($estados){
                    $Estados->alerta("Estado insertado correctamente", "success");
                    $estados = $Estados->read();
                    include('view/estados.php');
                }else{
                    $Estados->alerta("Error al registrar estado", "danger");
                    include("view/estados.form.php");
                }
        }else{
            include("view/estados.form.php");
        }
        break;

    case 'delete':
        $estados = $Estados->delete($id);
        if($estados)
            $Estados->alerta("Registro borrado", "success");
        else
            $Estados->alerta("Error al eliminar el registro o no existe", "danger");
            $estados = $Estados->read();
            include('view/estados.php');
        break;

    case 'update':
        $data = isset($_POST["data"])?$_POST["data"]:null;
        if(isset($data["enviar"])){
            if(!is_null($id)){
            $estados = $Estados->update($id, $data); 
            }
            if($estados){
                $Estados->alerta("Estado modificado correctamente", "success");
                $estados = $Estados->read();
                include('view/estados.php');
            }else{
                $Estados->alerta("Error al modificar el estado", "danger");
                include("view/estados.form.php");}
        }else{
            if(!is_null($id)){
            $estados = $Estados->readOne($id); 
                if(isset($estados[0])){
                    $data = $estados[0];
                    include("view/estados.form.php");
            }else{
                $Estados->alerta("El registro que esta tratando de modificar no existe", "danger");
                $estados = $Estados->read();
                include('view/estados.php');
            }
        }}
        //print_r($data);
        break;
    
    case 'reporte':
        ob_clean();
        $estados = $Estados->read();
        ob_start();
        include('view/estado$estados.reporte.php');
        $variable = ob_get_clean();
        $Estados->pdf('P', 'A4', $variable, 'prueba.pdf');
        break;
    case 'read':
        default:                
        $estados = $Estados->read();
        include('view/estados.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->