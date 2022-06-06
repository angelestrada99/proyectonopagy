<?php if($accion == "create"):
error_reporting(E_ALL ^ E_WARNING);     
?>
    <h1>Nuevo cliente</h1>
<form method="POST" enctype="multipart/form-data" action="cliente.php?accion=<?php echo $accion ?><?php if($accion == "create") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del cliente: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "create")? $data["nombre"]:"" ?>" name="data[nombre]"/>
    
    <label class="form-label">Apellidos: </label class="form-label">
    <input class="form-control" type="text" value="<?php echo ($accion == "create")? $data["apellidos"]:"" ?>" name="data[apellidos]"/>
    
    <label class="form-label">Foto: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "create")? $data["foto"]:"" ?>" name="data[foto]"/>
    
    <label class="form-label">id_municipio: </label class="form-label">
    <input class="form-control" type="int" value="<?php echo ($accion == "create")? $data["id_municipio"]:"" ?>" name="data[id_municipio]"/>
    
    <input type="submit" class="btn btn-primary" value="Guardar cliente" name="data[enviar]">
</form>
<?php endif;
?>


<?php if($accion == "update"):?>
    <h1>Modificar cliente</h1> 
<div class="row text-center">
        <div class="col">
        <img src ="../<?php echo $data["foto"];?>"height="427px" width=427px>
        </div>
</div>
<form method="POST" enctype="multipart/form-data" action="cliente.php?accion=<?php echo $accion ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del cliente: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["nombre"]:"" ?>" name="data[nombre]"/>
    
    <label class="form-label">Apellidos: </label class="form-label">
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["apellidos"]:"" ?>" name="data[apellidos]"/>
    
    <label class="form-label">Foto: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["foto"]:"" ?>" name="data[foto]"/>
    
    <input type="submit" class="btn btn-primary" value="Guardar cliente" name="data[enviar]">
</form>
<?php endif; 
?>
