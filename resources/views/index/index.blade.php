<!DOCTYPE html>
<html lang="en">
<!-- Esta etiqueta <head> contiene todos los links que ocupamos para darle estilo a nuesta pagina con boostrap,
    hay tanto links para estilo css como tambien hay links para la interactividad con JS -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principalcss/Style.css">
    <link rel="stylesheet" href="css/principalcss/StyleRedesS.css">
    <link rel="stylesheet" href="css/principalcss/Styleform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/15f4060a8e.js" crossorigin="anonymous"></script>
    <title>CBTa.67 - Pagina Oficial</title>
    <link rel="shortcut icon" href="img\iconos\LogoCbta.jpeg" type="image/x-icon">

</head>

<body id="colorp">
    <!--La funcionalidad de esta etiqueta <header> es crear un "NavBar" con 5 direcciones ubicadas a
        la derecha y un logo ubicado a la izquierda, una de ellas cuenta con una funcionalidad de
        despliege de opciones para seguir navegando -->
    <header class="header">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed" id="prin">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid" id="logo">
                        <a class="navbar-brand" href="#prin">
                            <img src="img/iconos/LogoCbta.jpeg" alt="Avatar Logo" style="width: 50px;"
                                class="rounded-pill">
                        </a>
                    </div>
                </nav>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#acercade">ACERCA DE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="carreras/carrera1" role="button"
                            data-bs-toggle="dropdown">CARRERAS TECNICAS</a>
                        <ul class="dropdown-menu">
                            <!--Lista desplegable-->
                            <li><a class="dropdown-item" href="ExplotacionGanadera_r">Explotacion Ganadera</a></li>
                            <li><a class="dropdown-item" href="Horticultura_r">Horticultura</a></li>
                            <li><a class="dropdown-item" href="Administracion_r">Administracion y Contabilidad Rural</a></li>
                            <li><a class="dropdown-item" href="DesarrolloCom_r">Desarrollo Comunitario</a></li>
                            <li><a class="dropdown-item" href="Informatica_r">Informatica</a></li>
                            <li><a class="dropdown-item" href="Agroindustrias_r">Agroindustrias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Ubi">UBICACION</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#RS">REDES SOCIALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">SIICBTA.67</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Este div contiene al titulo principal de la pagina-->
    <div class="container-fluid" style="align-items: center">
        <div class="col-sm-12">
            <h1 class="tittle1">CENTRO DE BACHILLERATO TECNOLOGICO AGROPECUARIO N0.67</h1>
        </div>
    </div>



    <main class="main2">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/imgcomplementarias/img_fondo1.jpg" alt="img_fondo1" class="d-block img_principal"
                        style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="/img/imgcomplementarias/cbta1.jpg" alt="img_fondo2" class="d-block img_principal"
                        style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="/img/imgcomplementarias/cbta2.jpg" alt="img_fondo3" class="d-block img_principal"
                        style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </main>
    <br>
    <!--Este div contiene un section y un aside, el section contiene una imagen del instituto y el aside tiene una descripcion
    del instituto-->
    <div class="container mt-3" id="acercade" name="acercadee">
        <section class="container-fluid row">
            <div class="col-sm-7">
                <img src="/img/imgcomplementarias/QueSomos.jpg" alt="" class="col-sm-8"
                    style="width: 100%;">
            </div>
            <aside class="col-sm-5">
                <h2 class="tittle">ACERCA DE</h2>
                <p class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam placeat fugit animi
                    temporibus
                    exercitationem voluptatibus reiciendis, nam possimus ratione deserunt officiis quae molestiae
                    voluptas
                    praesentium et alias totam quas pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Excepturi quae optio eius. Ad ipsam non rem cumque beatae odit eligendi fugiat, blanditiis porro at,
                    incidunt animi sint, dolores soluta illo!</p>
            </aside>
        </section>
    </div>
    <br>
    <!--Este div contiene la tabla de carreras que ofrece esta institucion dividida por filas y columnas-->
    <div class="container mt-3" id="carreras">
        <h2 class="tittle">Carreras Tecnicas</h2>
        <p class="texto">CBTa.67 te ofrece las siguientes carreras tecnicas que puedes cursar en nuestra instalacion
        </p>
        <table class="table table-hover texto">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Grado</th>
                    <th>Carrera</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tecnico</td>
                    <td><a href="ExplotacionGanadera_r">Explotacion Ganadera</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tecnico</td>
                    <td><a href="Horticultura_r">Horticultura</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tecnico</td>
                    <td><a href="Administracion_r">Administracion y Contabilidad Rural</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Tecnico</td>
                    <td><a href="DesarrolloCom_r">Desarrollo Comunitario</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Tecnico</td>
                    <td><a href="Informatica_r">Informatica</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Tecnico</td>
                    <td><a href="Agroindustrias_r">Agroindustrias</a></td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam iusto totam, sapiente
                        explicabo
                        quia dolore voluptas accusantium quod officiis repellendus, illo numquam, dolorem pariatur
                        quasi
                        impedit minima velit corporis quos.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <!--este div contiene un section y un aside dividido en porsiones col-sm-7 y col-sm-5 para una buena
    distribucion dentro de la pagina, incluimos una descripcion de la ubicacion como tambien un mapa que nos
    otorga googleMaps sus respectivos parametros-->
    <div class="container mt-3">
        <section class="container-fluid row" id="Ubi">
            <div class="col-sm-5">
                <h2 class="tittle">UBICACION</h2>
                <p class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam placeat fugit animi
                    temporibus
                    exercitationem voluptatibus reiciendis, nam possimus ratione deserunt officiis quae molestiae
                    voluptas
                    praesentium et alias totam quas pariatur.</p>
            </div>
            <aside class="col-sm-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.6142213999046!2d-99.16879892612302!3d20.439950707744185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1604723830f6f%3A0x2a2142802436b0af!2sCBTa%20No.%2067%20-%20Centro%20de%20Bachillerato%20Tecnol%C3%B3gico%20Agropecuario%20No.%2067!5e0!3m2!1ses-419!2smx!4v1696712068272!5m2!1ses-419!2smx"
                    style="border:0; width: 100%" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </aside>
        </section>
    </div>
    <br><br><br>
    <!--este div contiene un section y un aside dividido en porsiones col-sm-7 y col-sm-5 para una buena
    distribucion dentro de la pagina, como tambien un mapa que nos
    otorga googleMaps sus respectivos parametros-->
    <div class="container mt-3">
        <section class="container-fluid row">
            <div class="preguntasf col-sm-5">
                <h2>Preguntas Frecuentes</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe totam enim, officiis voluptatem
                    aliquam delectus aperiam molestias facere perspiciatis cumque aut ut dolore quaerat assumenda sunt
                    nemo doloribus reprehenderit praesentium!</p>
            </div>
            <aside class="col-sm-7 asideform">
                <form>
                    <h2>Contestamos tus Preguntas</h2>
                    <div class="input-group">

                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Nombre" class="input">

                        <label for="phone">Telefono</label>
                        <input type="tel" name="phone" id="phone" placeholder="Telefono" class="input">

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="input">

                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Pregunta" class="textarea"></textarea>

                        <input type="submit" value="Enviar" class="btn">
                    </div>
                </form>
            </aside>

    </div>
    <!--La etiqueta footer contiene nuestro pie de pagina el cual se trata de las redes sociales del instituto (facebook, instagram, twitter)-->
    <footer id="RS">
        <nav class="container mt-3">
            <div class="redes-container">
                <h5 id="RedesS" class="tittle">Redes Sociales</h5>
                <ul>
                    <li><a href="https://www.facebook.com/CBTa67Oficial" class="facebook"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/eduard0_s_n/" class="instagram"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/Usserslalo_" class="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>
