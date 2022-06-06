<?php
    require_once('../class/roles.class.php');
    $rolObj->validateRol('Administrador'); //Prim ero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $roles = $rolObj->create($data);
                if($roles){
                    $rolObj->alerta("Rol insertado correctamente","success");
                    $rol = $rolObj->read();
                    include('view/roles.php');
                }else{
                    $rolObj->alerta("El rol no se pudo insertar correctamente","danger");
                    include('view/roles.form.php');
                }
            }else{
                include("view/roles.form.php");    
            }
            break;

        case 'delete':
            $rol =$rolObj->delete($id);
            if($rol){
                $rolObj->alerta("Rol borrado exitosamente","success");
            }else{
                $rolObj->alerta("Rol no encontrado","danger");   
            }
            $rol = $rolObj->read();
            include('view/roles.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $rol = $rolObj->update($id, $data);
                }
                if($rol){
                    $rolObj->alerta("Rol actualizado correctamente","success");
                    $rol = $rolObj->read();
                    include('view/roles.php');
                }else{
                    $rolObj->alerta("Rol no actualizado","danger");
                    include('view/roles.form.php');
                }
            }else{
                if(!is_null($id)){
                    $rol = $rolObj->readOne($id);
                    if(isset($rol[0])){
                        $data=$rol[0];
                        include("view/roles.form.php");
                    }else{
                        $rolObj->alerta("Registro no encontrado","danger");
                        $rol = $rolObj->read();
                        include('view/roles.php');
                    }
                }
            }
            break;
        
        default:                
            $rol = $rolObj->read();
            include('view/roles.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->