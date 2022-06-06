<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!--repertorio delos css de botstraps-->
        <link rel="stylesheet" href="css/main.css">
</head>


<body>
<div id="divv"> <!--Contenedor (en este caso llamado divv)-->

        <div class="row">
        <div class="col">   
        <header>
                <!--<img src="images/zooportada.jpg" alt="portada" class="img-fluid">-->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/zooportada.jpg" class="d-block w-100" alt="portada" height="327">
                </div>
                <div class="carousel-item">
                <img src="images/zooportada2.png" class="d-block w-100" alt="portada2" height="327">
                </div>
                <div class="carousel-item">
                <img src="images/zooportada3.jpg" class="d-block w-100" alt="portada3" height="327">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
                </div>
        </header>
        </div>
        </div>

        <!--<nav>
                <ul id="menu">
                <li><a href="index.html">inicio</a></li>
                <li><a href="atracciones.html">atracciones</a></li>
                <li><a href="info.html">acerca de nosotros</a></li>
                <li><a href="contacto.html">contacto</a></li>
                </ul> 
        </nav>-->
        <div class="row">
        <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="../zoologico/admin/login.php">ZOOLAYA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="mapa.php">Mapa de ubicación</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="costos.php">Costos</a> 
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atracciones</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="acuario.php">Acuario</a></li>
                <li><a class="dropdown-item" href="sabana.php">Sabana</a></li>
                <li><a class="dropdown-item" href="reptiles.php">Reptiles</a></li>
                <li><a class="dropdown-item" href="herpertario.php">Herpetario</a></li>
                <li><a class="dropdown-item" href="artico.php">Ártico</a></li>
                <li><hr class="dropdown-divider"></li> 
                <li><a class="dropdown-item" href="atracciones.php">Todas las atracciones</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/login.php">Iniciar sesión</a>
                </li>
                </ul>
                </div>
                </div>
        </nav>
        </div>
        </div>

        <div id="subdivv" class="row"> <!--Se coloca otro div para poder hacer subestructuras o subdivisiones definidas-->   
        <div class="col-7">
        <section>
                <h1>FACTURACIÓN</h1>
        </section>
        </div>

        <div class="col-5"> 
        <aside> <!--Contenido de un lado (solo dentro de su especificado "div")-->
                <h1>...</h1> 
         </aside>
         </div>
        </div>

        <div id="divvfoot" class="row">
        <div class="col-2"> 
        <nav id="menuinferior">
        <menufoot>
                <h3>Enlaces rápidos</h3>
                <ul id="menufot">
                <li><a href="atencion.php">Atención a grupos</a></li>
                <li><a href="factura.php">Facturación</a></li>
                <li><a href="reglamento.php">Reglamento</a></li>
                </ul>
        </menufoot>
        </nav>
        </div>  

        <div class="col-5">
        <contactofoot>
                <h3>Datos de contacto</h3>
                <h5>Télefono: 4612623620</h5>
                <h5>Correo: zoolayaoficcial@hotmail.com.mx</h5>
        </contactofoot>
        </div>
    
        <div class="col-5"> 
        <spritefoot>
                <h3>SIGUENOS</h3>
                <ul id="redes">
                <li id="iconofb"><a href="https://www.facebook.com"></a></li>}
                <li id="iconotw"><a href="https://www.twitter.com"></a></li>
                <li id="iconoyt"><a href="https://www.youtube.com"></a></li>
                </ul>
         </spritefoot>
        </div>  

        <div class="row">
        <footfooter>
                <h6>Parque Zoológico ZOOLAYA Benito Juárez, Calz. Juárez S/N, Félix Ireta, 58070 Morelia, Mich. #227/h6>
                <h6>Lunes a sabados de 9am a 7pm</h6>
                <h6>© A dispocisión del publico desde el año 1988</h6>
        </footfooter>
        </div>    
        </div> 

</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->
</body>

</html>