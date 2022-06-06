<?php
    require_once('../class/permisos.class.php');
    $permisoObj->validateRol('Administrador'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $permisos = $permisoObj->create($data);
                if($permisos){
                    $permisoObj->alerta("Permiso insertado correctamente","success");
                    $permiso = $permisoObj->read();
                    include('view/permisos.php');
                }else{
                    $permisoObj->alerta("El permiso no se pudo insertar correctamente","danger");
                    include('view/permisos.form.php');
                }
            }else{
                include("view/permisos.form.php");    
            }
            break;

        case 'delete':
            $permiso =$permisoObj->delete($id);
            if($permiso){
                $permisoObj->alerta("Permiso borrado exitosamente","success");
            }else{
                $permisoObj->alerta("Permiso no encontrado","danger");   
            }
            $permiso = $permisoObj->read();
            include('view/permisos.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $permiso = $permisoObj->update($id, $data);
                }
                if($permiso){
                    $permisoObj->alerta("Permiso actualizado correctamente","success");
                    $permiso = $permisoObj->read();
                    include('view/permisos.php');
                }else{
                    $permisoObj->alerta("Permiso no actualizado","danger");
                    include('view/permisos.form.php');
                }
            }else{
                if(!is_null($id)){
                    $permiso = $permisoObj->readOne($id);
                    if(isset($permiso[0])){
                        $data=$permiso[0];
                        include("view/permisos.form.php");
                    }else{
                        $permisoObj->alerta("Registro no encontrado","danger");
                        $permiso = $permisoObj->read();
                        include('view/permisos.php');
                    }
                }
            }
            break;
        
        default:                
            $permiso = $permisoObj->read();
            include('view/permisos.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->