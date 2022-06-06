<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Municipios</h2>
            <a href="municipio.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num municipio</th>
        <th scope="col">Municipio</th>
        <th scope="col">Costo por envio</th>
        <th scope="col">Id estado</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($municipio as $municipio):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $municipio["municipio"];?></td>
      <td><?php echo $municipio["costoxenvio"];?></td>
      <td><?php echo $municipio["id_estado"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="municipio.php?accion=delete&id=<?php echo $municipio["id_municipio"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="municipio.php?accion=update&id=<?php echo $municipio["id_municipio"]; ?>" role="button">Actualizacion</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." municipios";
?>
</h4>