<?php if($accion == "create"): 
error_reporting(E_ALL ^ E_WARNING);    
?>
<h1>Otorgar roles</h1>
<form method="POST" enctype="multipart/form-data" action="usuario_rol.php?accion=<?php echo $accion; ?><?php if($accion == "create") echo "&id=".$id; ?>">
    <label class="form-label">Id del usuario: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["id_usuario"]:""; ?>" name="data[id_usuario]">
    
    <label class="form-label">Id del rol: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["id_rol"]:""; ?>" name="data[id_rol]">

    <input class="btn btn-primary" type="submit" value="Guardar" name="data[enviar]"> 
</form> 
<?php endif; 
?>


<?php if($accion == "update"): ?>
<h1>Modificar roles del usuario</h1> 
<form method="POST" enctype="multipart/form-data" action="usuario_rol.php?accion=<?php echo $accion; ?><?php if($accion == "update") echo "&id=".$id; ?>">
<label class="form-label">Id del usuario: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "update")? $data["id_usuario"]:""; ?>" name="data[id_usuario]">
    
    <label class="form-label">Id del rol: </label>
    <input class="form-control" type="int" value="<?php echo ($accion == "update")? $data["id_rol"]:""; ?>" name="data[id_rol]">
    
    <input class="btn btn-primary" type="submit" value="Guardar" name="data[enviar]"> 
</form> 
<?php endif; 
?>
