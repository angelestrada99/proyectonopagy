<?php
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $consecutivo = isset($_GET['consecutivo'])?$_GET['consecutivo']:null;
    $id = is_numeric($id)?$id:null;
    $data=isset($_POST['data'])?$_POST['data']:null;
    include('view/header.php');
    include('view/footer.php');
?>