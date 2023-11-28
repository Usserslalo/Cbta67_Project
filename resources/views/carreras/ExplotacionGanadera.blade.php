@extends('carreras.comunCarreras') <!--Se manda a llamar al archivo que contiene la redundancia de codigo-->

@section('headContent')<!--Apartado de cambios dentro del head-->
<title>Explotacion Ganadera</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapEG.css">
<link rel="shortcut icon" href="explotacionG/ganado.png" type="image/x-icon">
@endsection<!--Termina el apartado head-->


@section('navContent')<!--Apartado de cambios dento del navbar-->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="Inicio_r">INICIO</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="carreras/carrera1" role="button"
            data-bs-toggle="dropdown">CARRERAS TECNICAS</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item active">Explotacion Ganadera</a></li>
            <li><a class="dropdown-item" href="Horticultura_r">Horticultura</a></li>
            <li><a class="dropdown-item" href="Administracion_r">Administracion y Contabilidad Rural</a></li>
            <li><a class="dropdown-item" href="DesarrolloCom_r">Desarrollo Comunitario</a></li>
            <li><a class="dropdown-item" href="Informatica_r">Informatica</a></li>
            <li><a class="dropdown-item" href="Agroindustrias_r">Agroindustrias</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register">SIICBTA.67</a>
    </li>
</ul>

@endsection<!--Termina el apartado navContent-->


@section('footer')

    <div class="wrap"><!--Se titula la carrera con su breve introduccion a lo que es con una imagen de fondo
    oscurecia a .5-->
        <div class="wrap-texto">
            <h1>Explotacion Ganadera</h1>
            <p>La explotación ganadera es una actividad fundamental en el sector agropecuario, desempeñando un papel
                crucial en la producción de alimentos de origen animal. Los profesionales técnicos en explotación
                ganadera desempeñan un papel esencial en la gestión eficiente de ranchos y granjas, garantizando la
                salud y el rendimiento óptimo del ganado. </p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <!--Este section se titula "Fundamentos..." y debajo de este, en el lado izquierdo podemos ver una imagen
            referente a la carrera como tambien a su derecha podemos leer dos puntos importantes de los fundamentos
            de esta carrera-->
            <h2 class="titulo">Fundamentos de la Explotación Ganadera</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="explotacionG/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Historia y Evolución de la Ganadería</h3>
                    <ul>
                        <li class="cont-txt">Antecedentes históricos de la ganadería.</li>
                        <li class="cont-txt">Evolución de las prácticas ganaderas a lo largo del tiempo.</li>
                    </ul>
                    <h3><span>2</span>Importancia Económica y Social</h3>
                    <ul>
                        <li class="cont-txt">Contribución de la ganadería al desarrollo económico.</li>
                        <li class="cont-txt">Impacto social de la explotación ganadera en las comunidades rurales.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <!--Esta secion se titula "Portafolio", se divide en una "tabla" de imagenes correspondientes a la
                carrera, la "tabla" consta de 4 columnas y dos filas con efecto-->
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="explotacionG/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="explotacionG/p8.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <!--Este apartado se titula "Campo de aplicacion", para distribuir la informacion correctamente hizimos
            que las cartas esten alineas a 2x2 con su respectivo texto-->
            <h2 class="titulo">Campo de Aplicacion</h2>
            <div class="cards">
                <div class="card">
                    <img src="explotacionG/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Veterinaria</h4>
                        <p>La veterinaria desempeña un papel fundamental en la explotación ganadera, ya que contribuye a
                            garantizar la salud y el bienestar de los animales, así como a optimizar la producción.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="explotacionG/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Producción de leche</h4>
                        <p>La ganadería lechera implica la cría de animales, como vacas lecheras, para la producción de
                            leche.</p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="explotacionG/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Producción de carne</h4>
                        <p>La cría de animales para la producción de carne es una de las aplicaciones más comunes.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="explotacionG/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Agricultura Sostenible</h4>
                        <p>La ganadería también se integra en sistemas agrícolas sostenibles, donde los animales
                            desempeñan un papel clave en la fertilización del suelo y el control de plagas.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <!--Dentro de este contenedor tenemos 3 imagenes con su respectiva informacion, se trata de los
                        atributos del egresado con respecto a la carrera que sea de su interes-->
                <h2 class="titulo">Atributos de Egresado</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion1.svg" alt="">
                        <h3>Conocimientos técnicos</h3>
                        <ul>
                            <li class="AtributosE">Entendimiento profundo de la anatomía y fisiología de los animales
                                de cría.</li>
                            <li class="AtributosE">Conocimiento sólido de las distintas razas ganaderas y sus
                                características.</li>
                            <li class="AtributosE">Comprender los principios de reproducción, genética y mejora de la
                                cría.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Manejo Sostenible</h3>
                        <ul>
                            <li class="AtributosE">Conciencia y comprensión de las prácticas agrícolas sostenibles y
                                éticas.</li>
                            <li class="AtributosE">Habilidad para implementar estrategias de manejo del ganado que
                                minimicen el impacto ambiental.</li>
                            <li class="AtributosE">Conocimiento de las normativas y regulaciones relacionadas con la
                                ganadería y el bienestar animal.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Gestión de la empresa ganadera</h3>
                        <ul>
                            <li class="AtributosE">Habilidades de gestión empresarial, incluyendo planificación,
                                presupuesto y toma de decisiones.</li>
                            <li class="AtributosE">Capacidad para diseñar y ejecutar planes de negocio para la
                                explotación
                                ganadera.</li>
                            <li class="AtributosE">Conocimiento de marketing y comercialización de productos ganaderos.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-->

    @endsection
