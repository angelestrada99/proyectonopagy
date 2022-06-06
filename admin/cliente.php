<?php
    require_once('../class/clientes.class.php');
    $Clientes->validateRol('Empleado'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
    case 'create':
        $data = isset($_POST["data"])?$_POST["data"]:null;
        if(isset($data["enviar"])){
            $clientes = $Clientes->create($data);
                if($clientes){
                    $Clientes->alerta("Cliente insertado correctamente", "success");
                    $clientes = $Clientes->read();
                    include('view/clientes.php');
                }else{
                    $Clientes->alerta("Error al registrar cliente", "danger");
                    include("view/clientes.form.php");
                }
        }else{
            include("view/clientes.form.php");
        }
        break;

    case 'delete':
        $clientes = $Clientes->delete($id);
        if($clientes)
            $Clientes->alerta("Registro borrado", "success");
        else
            $Clientes->alerta("Error al eliminar el registro o no existe", "danger");
            $clientes = $Clientes->read();
            include('view/clientes.php');
        break;

    case 'update':
        $data = isset($_POST["data"])?$_POST["data"]:null;
        if(isset($data["enviar"])){
            if(!is_null($id)){
            $clientes = $Clientes->update($id, $data); 
            }
            if($clientes){
                $Clientes->alerta("Cliente modificado correctamente", "success");
                $clientes = $Clientes->read();
                include('view/clientes.php');
            }else{
                $Clientes->alerta("Error al modificar el cliente", "danger");
                include("view/clientes.form.php");}
        }else{
            if(!is_null($id)){
            $clientes = $Clientes->readOne($id); 
                if(isset($clientes[0])){
                    $data = $clientes[0];
                    include("view/clientes.form.php");
            }else{
                $Clientes->alerta("El registro que esta tratando de modificar no existe", "danger");
                $clientes = $Clientes->read();
                include('view/clientes.php');
            }
        }}
        //print_r($data);
        break;
    
    case 'reporte':
        ob_clean();
        $clientes = $Clientes->read();
        ob_start();
        include('view/cliente$clientes.reporte.php');
        $variable = ob_get_clean();
        $Clientes->pdf('P', 'A4', $variable, 'prueba.pdf');
        break;
    case 'read':
        default:                
        $clientes = $Clientes->read();
        include('view/clientes.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->