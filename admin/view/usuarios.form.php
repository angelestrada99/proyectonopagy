<?php if($accion=="create"):
error_reporting(E_ALL ^ E_NOTICE);
?>
<h1>Nuevo usuario</h1>
<?php else: $accion="update"
?>
<h1>Modificar usuario</h1> 
<?php endif; ?>

<script type="text/javascript">
function pwd_handler(form) {
    if (form.password.value != '') {
        form.md5password.value = md5(form.password.value);
        form.password.value = '';
    }
}
</script>

<form method="POST" enctype="multipart/form-data" action="usuario.php?accion=<?php echo $accion; ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del usuario: </label>
    <input class="form-control" type="email" value="<?php echo ($accion == "update")? $data["correo"]:""; ?>" name="data[correo]">
    <label class="form-label">Contraseña: </label>
    <input class="form-control" type="password" value="<?php echo ($accion == "update")? $data["contrasena"]:""; ?>" name="data[contrasena]">
    <input class="btn btn-primary" type="submit" value="Guardar usuario" name="data[enviar]"> 
</form> 
    