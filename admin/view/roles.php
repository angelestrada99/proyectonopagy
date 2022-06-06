<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>ROLES</h2>
            <a href="rol.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num</th>
        <th scope="col">Rol</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($rol as $rol):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $rol["rol"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="rol.php?accion=delete&id=<?php echo $rol["id_rol"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="rol.php?accion=update&id=<?php echo $rol["id_rol"]; ?>" role="button">Actualizacion</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." roles";
?>
</h4>