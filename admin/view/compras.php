<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Registro de ventas</h2>
            <a href="compra.php?accion=create" class="btn btn-outline-success">Nuevo registro</i>
            <a> </i>
            <a href="compra.php?accion=reporte" class="btn btn-dark" role="button">Reporte</a>
            </a>
        </div>
    </div>
</div>
<br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">Num venta</th>
        <th scope="col">Venta (docenas)</th>
        <th scope="col">Fecha</th>
        <th scope="col">Id cliente</th>
        <th scope="col">Total ($)</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <?php $cont=1; foreach($compra as $compra):?>
    <tr>
      <th scope="row"><?php echo $cont; $cont++?></th>
      <td><?php echo $compra["compra"];?></td>
      <td><?php echo $compra["fecha"];?></td>
      <td><?php echo $compra["id_cliente"];?></td>
      <td><?php echo $compra["total"];?></td>
      <td>
        <a class="btn btn-outline-danger" href="compra.php?accion=delete&id=<?php echo $compra["id_compra"]; ?>" role="button">Borrar</a>
        <a class="btn btn-outline-dark" href="compra.php?accion=update&id=<?php echo $compra["id_compra"]; ?>" role="button">Actualizacion</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<h4 class="text-center">
<?php
$cont--;
echo "Se encontraron ".$cont." registros de ventas";
?>
</h4>