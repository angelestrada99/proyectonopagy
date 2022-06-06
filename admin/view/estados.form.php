<?php if($accion == "create"):
error_reporting(E_ALL ^ E_WARNING);     
?>
    <h1>Nuevo estado</h1>
<form method="POST" enctype="multipart/form-data" action="estado.php?accion=<?php echo $accion ?><?php if($accion == "create") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del estado: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "create")? $data["estado"]:"" ?>" name="data[estado]"/>
    
    <label class="form-label">Foto: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "create")? $data["foto"]:"" ?>" name="data[foto]"/>
    
    <input type="submit" class="btn btn-primary" value="Guardar estado" name="data[enviar]">
</form>
<?php endif;
?>


<?php if($accion == "update"):?>
    <h1>Modificar estado</h1> 
<div class="row text-center">
        <div class="col">
        <img src ="../<?php echo $data["foto"];?>"height="427px" width=527px>
        </div>
</div>
<form method="POST" enctype="multipart/form-data" action="estado.php?accion=<?php echo $accion ?><?php if($accion == "update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del estado: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["estado"]:"" ?>" name="data[estado]"/>
    
    <label class="form-label">Foto: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update")? $data["foto"]:"" ?>" name="data[foto]"/>
    
    <input type="submit" class="btn btn-primary" value="Guardar estado" name="data[enviar]">
</form>
<?php endif; 
?>
