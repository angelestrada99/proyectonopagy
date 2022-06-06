<?php
require_once('../class/nopagy.class.php');
$accion = isset($_GET['accion'])?$_GET['accion']:null;
include_once('view/header_sin_menu.php');
switch($accion){
    case 'login':
        //print_r($_POST);
        if(isset($_POST['correo']) && isset($_POST['contrasena'])){
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            if($Nopagy->validateEmail($correo)){
                if($Nopagy->login($correo, $contrasena)){
                    header('Location: index.php');
                }else{
                    $Nopagy->alerta('DATOS ERRONEOS', 'danger');
                }
                //redirigir
            }
        }
        break;
    case 'olvido':
        if(isset($_POST['correo'])){
            $correo=$_POST['correo'];
            if($Nopagy->validateEmail($correo)){
                if($Nopagy->recuperar($correo)){
                    echo 'Se envió correo de recuperación';
                }else{
                    $Nopagy->alertaError('Correo eléctronico no existente');
                }
            }else{
                $Nopagy->alertaError('Correo eléctronico no existente');
            }
        }
     
    include_once('view/login.olvido.php');
    break;
    case 'restablecer':
        if(isset($_GET['correo']) && isset($_GET['token'])){
            $correo = $_GET['correo'];
            $token = $_GET['token'];
            if($Nopagy->validateToken($correo, $token)){
                include_once("view/login.restablecer.php");
            }else{
                $Nopagy->alertaError('El token a caducado');
            }
        }else{
            $Nopagy->alertaError('Un error grave a ocurrido');
        }
    break;
    case 'nueva':
        if(isset($_GET['correo']) && isset($_POST['token']) && isset($_POST['contrasena'])){
            $correo = $_GET['correo'];
            $contrasena = $_POST['contrasena'];
            $token = $_POST['token'];
            if($Nopagy->validateToken($correo, $token)){
                if($Nopagy->nuevaContrasena($correo, $contrasena, $token)){
                    $Nopagy->alerta("Su contraseña ah sido actualizada", "success");
                    include_once('view/logins.php');
                }else{
                    $Nopagy->alertaError('Error al intentar cambiar contraseña');
                }
            }else{
                $Nopagy->alertaError('El token a caducado');
            }
        }else{
            $Nopagy->alertaError('Un error grave a ocurrido');
        }
    break;
    case 'logOut':
        $Nopagy->logOut();
    default: 
    include('view/logins.php');
}
include_once('view/footer.php');
?>