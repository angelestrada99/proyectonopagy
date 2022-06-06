<?php
    require_once('../class/municipios.class.php');
    $municipioObj->validateRol('Empleado'); //Primero validame que tienes el rol para poder ver este crud
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){ 
                $municipios = $municipioObj->create($data);
                if($municipios){
                    $municipioObj->alerta("Registro insertado correctamente","success");
                    $municipio = $municipioObj->read();
                    include('view/municipios.php');
                }else{
                    $municipioObj->alerta("El registro no se pudo insertar correctamente","danger");
                    include('view/municipios.form.php');
                }
            }else{
                include("view/municipios.form.php");    
            }
            break;

        case 'delete':
            $municipio =$municipioObj->delete($id);
            if($municipio){
                $municipioObj->alerta("Registro borrado exitosamente","success");
            }else{
                $municipioObj->alerta("Registro no encontrado","danger");   
            }
            $municipio = $municipioObj->read();
            include('view/municipios.php');
            break;

        case 'update':
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $municipio = $municipioObj->update($id, $data);
                }
                if($municipio){
                    $municipioObj->alerta("Registro actualizado correctamente","success");
                    $municipio = $municipioObj->read();
                    include('view/municipios.php');
                }else{
                    $municipioObj->alerta("Registro no actualizado","danger");
                    include('view/municipios.form.php');
                }
            }else{
                if(!is_null($id)){
                    $municipio = $municipioObj->readOne($id);
                    if(isset($municipio[0])){
                        $data=$municipio[0];
                        include("view/municipios.form.php");
                    }else{
                        $municipioObj->alerta("Registro no encontrado","danger");
                        $municipio = $municipioObj->read();
                        include('view/municipios.php');
                    }
                }
            }
            break;
        
        default:                
            $municipio = $municipioObj->read();
            include('view/municipios.php');
    }
    include('view/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->