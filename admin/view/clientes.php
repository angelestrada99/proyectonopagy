<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Lista de clientes</h2>
            <a href="cliente.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>

<div class="container-sm text-center">
    <div class="row row-cols-2 row-cols-md-5 g-3">
    <?php $cont=1;
    foreach ($clientes as $cliente):?>
        <div class="col">
            <div class="card h-40">
                <img src="../<?php echo $cliente["foto"];?>" class="card-img-top" width="100px" height="200px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cont; $cont++?></h5>
                    <h4 class="card-title"><?php echo $cliente["nombre"]."<br>".$cliente["apellidos"];?></h4>
                    <h6 class="card-title"><?php echo "Id Municipio:"." ".$cliente["id_municipio"]/*."[".$municipio["municipio"]."]"*/;?></h6>
                    <a class="btn btn-outline-danger"
                        href="cliente.php?accion=delete&id=<?php echo $cliente["id_cliente"]; ?>" role="button" onclick="return confirm('¿Estas seguro de eliminar este registro?')">Borrar</i>
                    </a>
                    <a class="btn btn-outline-info"
                        href="cliente.php?accion=update&id=<?php echo $cliente["id_cliente"]; ?>" role="button">Actualizar</i>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
    <h4 class="text-center">
        <?php
            $cont--;
            echo "Se encontraron ".$cont." clientes";
        ?>
    </h4>
</div>
<br>