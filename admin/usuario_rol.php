<?php
    require_once('../class/usuarios_roles.class.php');
    $usuario_rolObj->validateRol('Empleado'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $usuarios_roles = $usuario_rolObj->create($data);
                if($usuarios_roles){
                    $usuario_rolObj->alerta("Registro insertado correctamente","success");
                    $usuario_rol = $usuario_rolObj->read();
                    include('view/usuarios_roles.php');
                }else{
                    $usuario_rolObj->alerta("El registro no se pudo insertar correctamente","danger");
                    include('view/usuarios_roles.form.php');
                }
            }else{
                include("view/usuarios_roles.form.php");    
            }
            break;

        case 'delete':
            $usuario_rol =$usuario_rolObj->delete($id);
            if($usuario_rol){
                $usuario_rolObj->alerta("Registro borrado exitosamente","success");
            }else{
                $usuario_rolObj->alerta("Registro no encontrado","danger");   
            }
            $usuario_rol = $usuario_rolObj->read();
            include('view/usuarios_roles.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $usuario_rol = $usuario_rolObj->update($id, $data);
                }
                if($usuario_rol){
                    $usuario_rolObj->alerta("Registro actualizado correctamente","success");
                    $usuario_rol = $usuario_rolObj->read();
                    include('view/usuarios_roles.php');
                }else{
                    $usuario_rolObj->alerta("Registro no actualizado","danger");
                    include('view/usuarios_roles.form.php');
                }
            }else{
                if(!is_null($id)){
                    $usuario_rol = $usuario_rolObj->readOne($id);
                    if(isset($usuario_rol[0])){
                        $data=$usuario_rol[0];
                        include("view/usuarios_roles.form.php");
                    }else{
                        $usuario_rolObj->alerta("Registro no encontrado","danger");
                        $usuario_rol = $usuario_rolObj->read();
                        include('view/usuarios_roles.php');
                    }
                }
            }
            break;
        
        default:                
            $usuario_rol = $usuario_rolObj->read();
            include('view/usuarios_roles.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->