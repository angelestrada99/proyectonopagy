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
                        <img src="images/PportadaNopagy.jpg" class="d-block w-100" alt="portada">
                </div>
        </header>
        </div>
</div>

<div id="barranav">
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
                                                <a class="nav-link active" aria-current="page" href="mapa.php">Mapa de ubicación</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="costos.php">Costos</a> 
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="origen.php">Acerca de</a> 
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../proyectonopagy/admin/login.php">Iniciar sesión</a>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
        </div>
</div>

<div class="container about">
        <h1 class="about__title">BENEFICIOS</h1>
        <div class="about__main">
                <article class="about__icons">
                        <img src="images/salud.png" class="about__icon" alt="icon1">
                        <h3 class="about__title">MEJORES CUALIDADES ALIMENTICIAS</h3>
                        <p class="about__paragrah">
                                El nopal tiene una gran cantidad de fibra, que ayuda a nuestro aparato digestivo a funcionar mejor.
                                Aparte de que consumir 3 tortillas de nopal es equivalente a consumir 1 sola tortilla de maiz.
                                Asi que, ¿que prefieres? Llenarte y nutrirte con 9 tortillas o limitarte a consumir 3
                        </p>
                </article>
                <article class="about__icons">
                        <img src="images/ayuda.png" class="about__icon" alt="icon2">
                        <h3 class="about__title">AYUDA A COMBATIR ENFERMEDADES COMO LA DIABETES</h3>
                        <p class="about__paragrah">
                                Aunque todavía no hay estudios conclusivos y con resultados contundentes, se cree que el nopal podría ayudar a controlar la glucosa en los pacientes con diabetes.
                                Además consumir nopal nos ayuda a disminuir los niveles de colesterol en la sangre, reduciendo el riesgo de sufrir enfermedades o ataques provocados por el colesterol alto.    
                        </p>
                </article>
                <article class="about__icons">
                        <img src="images/dolar.png" class="about__icon" alt="icon3">
                        <h3 class="about__title">AL ALCANCE DE TODOS</h3>
                        <p class="about__paragrah">
                                Tomando en cuenta los considerables beneficios que la tortilla de nopal aporta a nuestras vidas, podemos decir con
                                gran seguridad que el precio es inclusive bastante generoso con su publico, ya que solo cuesta unos cuantos pesos más
                                que las tortillas de maiz a las que tanto estamos acostumbrados a consumir.
                        </p>
                </article>
        </div>
</div>

<div class="knowledge">
        <div class="knowledge__container container">
                <div class="knowledege__texts">
                        <h2 class="subtitle">Conoce nuestro origen</h2>
                        <p class="knowledge__paragraph">
                        Las tortillas de maíz son parte de la identidad de los mexicanos, pero cuando hablamos 
                        de las tortillas de nopal la cosa cambia. 
                        </p>
                        <p>
                        Es por eso que nos propusimos a cambiar eso...
                        </p>
                        <a href="origen.php" class="cta">Ver completa</a>
                </div>
                <figure class="knowledge__picture">
                        <img src="./images/team.jpeg" class="knowledge__img " alt="org">
                </figure>
        </div>
</div>

<div class="questions container">
        <h2 class="subtitle">Preguntas frecuentes</h2>
                <section class="questions__container">
                        <article class="questions__padding">
                                <div class="questions__answer">
                                        <h3 class="questions__title">¿Las tortillas son solo para gente diabetica??
                                                <span class="questions__arrow">
                                                        <img src="./images/arrow.svg" class="questions__img" alt="icon7">
                                                </span>
                                        </h3>
                                        <p class="questions__show">
                                        <br>
                                                Por supuesto que no, claro que ayudan a la gente diabetica en su alimentación
                                                pero las tortillas de NOPAGY son para todos y todas las necesidades.
                                        </p>
                                 </div>
                        </article>
                        <article class="questions__padding">
                                <div class="questions__answer">
                                        <h3 class="questions__title">¿Cambian solo las cualidades alimenticias o tambien cambia el sabor?
                                                <span class="questions__arrow">
                                                        <img src="./images/arrow.svg" class="questions__img" alt="icon6">
                                                </span>
                                        </h3>
                                        <p class="questions__show">
                                        <br>
                                                Si te refieres en comparación al sabor de una tortilla de maiz normal, entonces si, solo posee cualidades
                                                alimenticias diferentes y en cuanto al sabor prácticamente ni le notaras diferencia.
                                        </p>
                                </div>
                        </article>
                        <article class="questions__padding">
                                <div class="questions__answer">
                                        <h3 class="questions__title">¿Que precio tienen?
                                                <span class="questions__arrow">
                                                        <img src="./images/arrow.svg" class="questions__img" alt="icon8">
                                                </span>
                                        </h3>
                                        <p class="questions__show">
                                        <br>
                                                $20 la docena y a mayoreo (20 docenas o más) el precio baja a $17 pesos la docena.
                                                <br>
                                                Puedes consultar más información en la pestaña "Costos".
                                        </p>
                                </div>
                        </article>
                </section>
                <section class="questions__offer">
                        <h2 class="subtitle">Deseas sabes algo más?</h2>
                        <p class="questions__copy">Contactanos con las fuentes de datos que te dejamos al inferior de esta página</p>
                </section>
</div>

<div class="testimony">
        <br>>
        <h1 class="text-center">REFERENCIAS</h1>
        <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before" alt="icon10">
                <section class="testimony__body testimony__body--show" data-id="1">
                        <div class="testimony__texts">
                                <h2 class="subtitle">Mi nombre es Angel Aldair <span class="testimony__course">MANTIENE SABOR, AUMENTA NUTRICIÓN</span></h2>
                                <p class="testimony__review">
                                        La verdad es que estoy acostumbrado a comer 10 o 12 tortillas de maiz en cada comida, esto me parecía
                                        un mal hábito alimenticio hasta que conocí NOPAGY y sus propiedades, ya que consumo la misma cantidad 
                                        de tortillas y es como si solo comiera 4 tortillas de maiz en cada comida. 
                                        <br>
                                </p>
                                <p>
                                        La verdad es increible...mantiene sabor, aumenta nutrición.
                                </p>
                        </div>
                                <figure class="testimony__picture">
                                        <img src="./images/angelalda.jpg" class="testimony__img" alt="icon11">
                                </figure>
                </section>
                <section class="testimony__body" data-id="2">
                        <div class="testimony__texts">
                                <h2 class="subtitle">Mi nombre es Leticia Hernández <span class="testimony__course">APOYO ANTE LA DIABETES</span></h2>
                                <p class="testimony__review">
                                        Desde que me diagnosticarón diabetes se me recomendarón habitos alimenticios que aveces
                                        son bastantes atormentadores, pero las tortillas de nopal me ayudan a mantener controlados
                                        mis niveles de glucosa y a reducir mis niveles de colesterol.
                                        <br>
                                </p>
                                <p>
                                        Sin duda alguna es un apoyo ante la diabetes.
                                </p>
                        </div>
                                <figure class="testimony__picture">
                                        <img src="./images/abuelita.webp" class="testimony__img" alt="icon30">
                                </figure>
                </section>
                <section class="testimony__body" data-id="3">
                        <div class="testimony__texts">
                                <h2 class="subtitle">Mi nombre es Vicente Alejandro <span class="testimony__course">INCREIBLE PARA LA DIETA</span></h2>
                                <p class="testimony__review">
                                        Llevo 2 meses asistiendo al gimnacio y la parte de la dieta era la más dificil de cumplir, 
                                        la verdad no podia ver muchos resultados debido a que seguía comiendo en grandes cantidades, 
                                        asi que era como si se anulara o contrarrestara el proceso del gym, eso hasta que 
                                        conocí NOPAGY y pude complementar mi proceso correctamente.
                                </p>
                                <p>
                                        Resultó ser increible para la dieta.
                                </p>
                        </div>
                                <figure class="testimony__picture">
                                        <img src="./images/bajepeso.jpg" class="testimony__img" alt="icon31">
                                </figure>
                </section>
                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next" alt="icon27">
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
                <h6>Empresa NOPAGY® Zona de oro II, Av. el Sáuz, 38015 Celaya, GTO. Hierro #105</h6>
                <h6>Lunes a sabados de 9am a 7pm</h6>
                <h6>© A dispocisión del publico desde el año 2020</h6>
        </section>
</footer>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--recurso 2 de botstrap-->
<script src="./js/slider.js"></script>
<script src="./js/questions.js"></script>
<script src="./js/menu.js"></script> 
</body>

</html>
