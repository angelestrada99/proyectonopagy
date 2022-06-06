<?php if($accion=="create"): ?>
<h1>Nuevo rol</h1>
<?php else: $accion="update" ?>
<h1>Modificar rol</h1> 
<?php endif; ?>
<form method="POST" enctype="multipart/form-data" action="rol.php?accion=<?php echo $accion; ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del rol: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["rol"]:""; ?>" name="data[rol]">
    <input class="btn btn-primary" type="submit" value="Guardar rol" name="data[enviar]"> 
</form> 