<img src="../images/itc.jpg" alt="portada1reporte" style="width: 100%;">
<img src="../images/reporting.jpg" alt="portadareporte" align="middle" style="width: 50%;">
<h1 style="color: dark;">REPORTE DE VENTAS</h1>
<table>
    <tr>
        <th scope="col">Num  |  </th>
        <th scope="col">Docenas  |  </th>
        <th scope="col">Fecha  |  </th>
        <th scope="col">Id cliente  |  </th>
        <th scope="col">Total ($)  |</th>
    </tr>
<?php $cont=1; foreach($compra as $compra):?>
    <tr>
        <th scope="row"><?php echo $cont; $cont++?></th>
        <td><?php echo $compra["compra"];?></td>
        <td><?php echo $compra["fecha"];?></td>
        <td><?php echo $compra["id_cliente"];?></td>
        <td><?php echo $compra["total"];?></td>
    </tr>
<?php endforeach;?>
</table>