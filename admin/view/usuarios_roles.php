<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>USUARIO-ROL</h2>
            <a href="usuario_rol.php?accion=create" class="btn btn-outline-success">Otorgar roles</i>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num</th>
        <th scope="col">id del usuario</th>
        <th scope="col">id del rol</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($usuario_rol as $usuario_rol):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $usuario_rol["id_usuario"];?></td>
      <td><?php echo $usuario_rol["id_rol"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="usuario_rol.php?accion=delete&id=<?php echo $usuario_rol["id_usuario"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="usuario_rol.php?accion=update&id=<?php echo $usuario_rol["id_usuario"]; ?>" role="button">Modificar rol</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." relaciones";
?>
</h4>