<div class="container-sm text-center contenido-table">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Lista de estados</h2>
            <a href="estado.php?accion=create" class="btn btn-outline-success">Agregar</i>
            </a>
        </div>
    </div>
</div>
<br>

<div class="container-sm text-center">
    <div class="row row-cols-2 row-cols-md-5 g-3">
    <?php $cont=1;
    foreach ($estados as $estado):?>
        <div class="col">
            <div class="card h-40">
                <img src="../<?php echo $estado["foto"];?>" class="card-img-top" width="100px" height="200px">
                <div class="card-body">
                    <?php $cont; $cont++?>
                    <h4 class="card-title"><?php echo $estado["estado"];?></h4>
                    <a class="btn btn-outline-danger"
                        href="estado.php?accion=delete&id=<?php echo $estado["id_estado"]; ?>" role="button" onclick="return confirm('¿Estas seguro de eliminar este registro?')">Borrar</i>
                    </a>
                    <a class="btn btn-outline-info"
                        href="estado.php?accion=update&id=<?php echo $estado["id_estado"]; ?>" role="button">Actualizar</i>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
    <h4 class="text-center">
        <?php
            $cont--;
            echo "Se encontraron ".$cont." estados";
        ?>
    </h4>
</div>
<br>