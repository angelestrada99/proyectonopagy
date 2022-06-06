<?php if($accion == "create"): 
error_reporting(E_ALL ^ E_WARNING);    
?>
<h1>Registrar nueva compra</h1>
<form method="POST" enctype="multipart/form-data" action="compra.php?accion=<?php echo $accion; ?><?php if($accion == "create") echo "&id=".$id; ?>">
    <label class="form-label">Compra[docenas]: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["compra"]:""; ?>" name="data[compra]">
    
    <label class="form-label">Fecha: </label>
    <input class="form-control" type="date" value="<?php echo ($accion == "create")? $data["fecha"]:""; ?>" name="data[fecha]">

    <label class="form-label">Id cliente: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["id_cliente"]:""; ?>" name="data[id_cliente]">

    <label class="form-label">Total: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["total"]:""; ?>" name="data[total]">

    <input class="btn btn-primary" type="submit" value="Guardar registro de compra" name="data[enviar]"> 
</form> 
<?php endif; 
?>


<?php if($accion == "update"): ?>
<h1>Modificar registro de compra </h1> 
<form method="POST" enctype="multipart/form-data" action="compra.php?accion=<?php echo $accion; ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Compra[Docenas]: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "update")? $data["compra"]:""; ?>" name="data[compra]">
    
    <label class="form-label">Fecha: </label>
    <input class="form-control" type="date" value="<?php echo ($accion == "update")? $data["fecha"]:""; ?>" name="data[fecha]">

    <label class="form-label">Total: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "update")? $data["total"]:""; ?>" name="data[total]">

    <input class="btn btn-primary" type="submit" value="Guardar" name="data[enviar]"> 
</form> 
<?php endif; 
?>
