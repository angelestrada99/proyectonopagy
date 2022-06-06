<?php
include_once('../class/nopagy.class.php');
include_once('../class/clientes.class.php');
$accion = $_SERVER["REQUEST_METHOD"];
$datos = array();
switch($accion){
    case 'POST':
        $data = file_get_contents("php://input");
        $data = json_decode($data, true);
        if(isset($_GET['id_cliente'])){
            $data[0]=$_POST;
            $id=$_GET['id_cliente'];
            foreach($data as $cliente){
                $clientes = $Clientes->update($id, $cliente);
                $status = 200;
                $msj = "Se ha actualizado la informacion del cliente";
            }
        }else{
            foreach($data as $cliente){
                $clientes = $Clientes->create($cliente);
                $status = 200;
                $msj = "Se ha dado de alta un nuevo cliente";
            }
        }
        break;

    case 'DELETE':
        if(isset($_GET['id_cliente'])){
            $id_cliente = $_GET['id_cliente'];
            $cantidad = $Clientes->delete($id_cliente);
            $status = 200;
            $msj = "Se ha eliminado ".$cantidad." registro(s)";
        }else{
            $status = 404;
            $msj = "Ocurrio un error al tratar de eliminar el registro";
        }
        break;
    case 'GET':
    default:
    if(isset($_GET['id_cliente'])){
        $id_cliente = $_GET['id_cliente'];
        $datos = $Clientes->readOne($id_cliente);
    }else{
        $datos = $Clientes->read();
    }
    $status = 200;
    $mensaje = "Se han procesado con exito la consulta";      
    }
    $Nopagy->json($datos,$status,$msj);
?>
    