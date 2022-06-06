<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>PERMISOS</h2>
            <a href="permiso.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num</th>
        <th scope="col">Permiso</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($permiso as $permiso):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $permiso["permiso"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="permiso.php?accion=delete&id=<?php echo $permiso["id_permiso"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="permiso.php?accion=update&id=<?php echo $permiso["id_permiso"]; ?>" role="button">Actualizacion</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." permisos";
?>
</h4>