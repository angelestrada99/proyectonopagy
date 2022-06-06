<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>USUARIOS</h2>
            <a href="usuario.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num</th>
        <th scope="col">ID del usuario</th>
        <th scope="col">Usuario</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($usuario as $usuario):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $usuario["id_usuario"];?></td>
      <td><?php echo $usuario["correo"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="usuario.php?accion=delete&id=<?php echo $usuario["id_usuario"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="usuario.php?accion=update&id=<?php echo $usuario["id_usuario"]; ?>" role="button">Actualizacion</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." usuarios";
?>
</h4>