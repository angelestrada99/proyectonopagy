<?php if($accion=="create"): ?>
<h1>Nuevo permiso</h1>
<?php else: $accion="update" ?>
<h1>Modificar permiso</h1> 
<?php endif; ?>
<form method="POST" enctype="multipart/form-data" action="permiso.php?accion=<?php echo $accion; ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del permiso: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["permiso"]:""; ?>" name="data[permiso]">
    <input class="btn btn-primary" type="submit" value="Guardar permiso" name="data[enviar]"> 
</form> 