<?php
require_once("../class/nopagy.class.php");
$Nopagy->validatePermiso('Portada');
include("view/header.php");
?>
<div class="container-sm text-center contenido-table">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <h1>Bienvenido al sistema
      <br>
      :)
      <!-- <img src="../images/nopa.jpg" class="card-img-top" width="00px" height="500px"> -->
  </h1>
</div>
        <?php
        /* $roles = $_SESSION['roles'];
        print_r($rol);
        foreach($roles as $rol){
          if(file_exists("view/menu.".$rol.".php")){
            include("view/menu.".$rol.".php");
          }
        } */
        ?>
    <div id="chart_div"></div>
<?php
include("view/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->