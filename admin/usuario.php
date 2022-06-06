<?php
    require_once('../class/usuarios.class.php');
    $usuarioObj->validateRol('Administrador'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $usuarios = $usuarioObj->create($data);
                if($usuarios){
                    $usuarioObj->alerta("Usuario insertado correctamente","success");
                    $usuario = $usuarioObj->read();
                    include('view/usuarios.php');
                }else{
                    $usuarioObj->alerta("El registro no se pudo insertar correctamente","danger");
                    include('view/usuarios.form.php');
                }
            }else{
                include("view/usuarios.form.php");    
            }
            break;

        case 'delete':
            $usuario =$usuarioObj->delete($id);
            if($usuario){
                $usuarioObj->alerta("Registro borrado exitosamente","success");
            }else{
                $usuarioObj->alerta("Registro no encontrado","danger");   
            }
            $usuario = $usuarioObj->read();
            include('view/usuarios.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $usuario = $usuarioObj->update($id, $data);
                }
                if($usuario){
                    $usuarioObj->alerta("Registro actualizado correctamente","success");
                    $usuario = $usuarioObj->read();
                    include('view/usuarios.php');
                }else{
                    $usuarioObj->alerta("Usuario no actualizado","danger");
                    include('view/usuarios.form.php');
                }
            }else{
                if(!is_null($id)){
                    $usuario = $usuarioObj->readOne($id);
                    if(isset($usuario[0])){
                        $data=$usuario[0];
                        include("view/usuarios.form.php");
                    }else{
                        $usuarioObj->alerta("Usuario no encontrado","danger");
                        $usuario = $usuarioObj->read();
                        include('view/usuarios.php');
                    }
                }
            }
            break;
        
        default:                
            $usuario = $usuarioObj->read();
            include('view/usuarios.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->