<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NOPAGY</title>
        <link rel="shortcut icon" href="./images/nopal.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!--repertorio delos css de botstraps-->
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
<div id="PantallaInicial">
        <div class="col">   
        <header>
                <div id="portda">
                        <img src="images/PportadaNopagy.jpg" class="d-block w-100" alt="portada" height="527px" width=100%>
                </div>
        </header>
        </div>
</div>

<div id="barranav"
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                        <a class="navbar-brand" href="../proyectonopagy/admin/login.php">NOPAGY</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="mapa.php">Mapa de ubicaci??n</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="costos.php">Costos</a> 
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="origen.php">Acerca de</a> 
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../proyectonopagy/admin/login.php">Iniciar sesi??n</a>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
        </div>
</div>

<div id="subdivv" class="row"> <!--Se coloca otro div para poder hacer subestructuras o subdivisiones definidas-->   
        <div class="col">
        <section>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">PAQUETES</h1>
                <p class="fs-5 text-muted">Conoce nuestras ofertas y suscripciones</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal">Normal</h4>
                                </div>
                                <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$20<small class="text-muted fw-light">/MXN</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                                <li>Precio normal por docena</li>
                                        </ul>
                                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar este paquete</button>
                                </div>
                        </div>
                </div>
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal">ESPECIAL</h4>
                                </div>
                                <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$17<small class="text-muted fw-light">/MXN</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                                <li>Precio normal por docena</li>
                                                <li>apartir de las 20 docenas</li>
                                        </ul> 
                                        <button type="button" class="w-100 btn btn-lg btn-primary">Comprar este paquete</button>
                                </div>
                        </div>
                </div>
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                <div class="card-header py-3 text-white bg-primary border-primary">
                                        <h4 class="my-0 fw-normal">VIP</h4>
                                </div>
                                <div class="card-body">
                                        <h1 class="card-title pricing-card-title">$1000<small class="text-muted fw-light">/MXN</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                                <li>Membresia anual</li>
                                                <li>$15 cada docena siempre</li>
                                        </ul>
                                        <button type="button" class="w-100 btn btn-lg btn-primary">Comprar este paquete</button>
                                </div>
                        </div>
                </div>
        </div>

        <footer class="footer">
        <section class="footer__container container">
                <nav class="nav nav--footer">
                        <h2 class="footer__title">NOPAGY</h2>
                        <ul class="nav__link nav__link--footer">
                                <li class="nav__items">
                                        <a href="index.php" class="nav__links">Inicio</a>
                                </li>
                                <li class="nav__items">
                                        <a href="origen.php" class="nav__links">Acerca de</a>
                                </li>
                                <li class="nav__items">
                                        <a href="https://wa.me/524612623620" class="nav__links">Contacto Directo</a>
                                </li>
                        </ul>
                </nav>
                <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                        <h2 class="footer__newsletter">Recibe las nuevas novedades</h2>
                        <div class="footer__inputs">
                                <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                                <a href="#" class="btn btn-success">Registrarse</a>
                        </div>
                </form>
        </section>
        <section class="footer__copy container">
                <div class="footer__social">
                        <a href="https://m.facebook.com/profile.php?id=100074142402873&refsrc=deprecated&_rdr" class="footer__icons"><img src="./images/facebook.svg" class="footer__img" alt="iconf1"></a>
                        <a href="https://twitter.com/" class="footer__icons"><img src="./images/twitter.svg" class="footer__img" alt="iconf2"></a>
                        <a href="https://www.youtube.com/" class="footer__icons"><img src="./images/youtube.svg" class="footer__img" alt="iconf3"></a>
                </div>
                <h3 class="footer__copyright">Derechos reservados &copy; Angel Estrada</h3>
                <h6>Empresa NOPAGY?? Zona de oro II, Av. el S??uz, 38015 Celaya, GTO. Hierro #105</h6>
                <h6>Lunes a sabados de 9am a 7pm</h6>
                <h6>?? A dispocisi??n del publico desde el a??o 2020</h6>
        </section>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->
<script src="./js/slider.js"></script>
<script src="./js/questions.js"></script>
<script src="./js/menu.js"></script> 
</body>

</html>