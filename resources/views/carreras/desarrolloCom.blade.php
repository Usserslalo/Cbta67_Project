@extends('carreras.comunCarreras')
@section('headContent')
<title>Desarrollo Comunitario</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapDesCom.css">
    <link rel="shortcut icon" href="desarrolloCom/icono4.png" type="image/x-icon">
@endsection


@section('navContent')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="Inicio_r">INICIO</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="carreras/carrera1" role="button"
            data-bs-toggle="dropdown">CARRERAS TECNICAS</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ExplotacionGanadera_r">Explotacion Ganadera</a></li>
            <li><a class="dropdown-item" href="Horticultura_r">Horticultura</a></li>
            <li><a class="dropdown-item" href="Administracion_r">Administracion y Contabilidad Rural</a></li>
            <li><a class="dropdown-item active">Desarrollo Comunitario</a></li>
            <li><a class="dropdown-item" href="Informatica_r">Informatica</a></li>
            <li><a class="dropdown-item" href="Agroindustrias_r">Agroindustrias</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register">SIICBTA.67</a>
    </li>
</ul>

@endsection


@section('footer')

    <div class="wrap">
        <div class="wrap-texto">
            <h1>Desarrollo Comunitario</h1>
            <p>El desarrollo comunitario es un enfoque integral que busca mejorar la calidad de vida de las comunidades,
                promover la equidad y fortalecer la participación ciudadana. Se basa en la idea de que el cambio
                positivo debe surgir desde dentro de la comunidad, aprovechando sus recursos y capacidades para abordar
                los desafíos y alcanzar metas compartidas.</p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Fundamentos del Desarrollo Comunitario</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/desarrolloCom/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Participación Comunitaria</h3>
                    <ul>
                        <li class="cont-txt">La participación activa y significativa de los miembros de la comunidad es
                            fundamental. Involucrar a la comunidad en todas las etapas del proceso, desde la
                            identificación de necesidades hasta la implementación y evaluación, garantiza la apropiación
                            local y la sostenibilidad de las iniciativas.</li>
                    </ul>
                    <h3><span>2</span>Desarrollo Sostenible</h3>
                    <ul>
                        <li class="cont-txt">Busca promover prácticas y proyectos que sean sostenibles a largo plazo,
                            teniendo en cuenta aspectos económicos, sociales y ambientales para no comprometer las
                            necesidades de las generaciones futuras.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="desarrolloCom/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="desarrolloCom/p8.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Campo de Aplicacion</h2>
            <div class="cards">
                <div class="card">
                    <img src="desarrolloCom/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Desarrollo Socioeconómico</h4>
                        <p>Fomenta el crecimiento económico y social en comunidades locales, promoviendo la creación de
                            empleo, el desarrollo de pequeñas empresas y la mejora de las condiciones de vida.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="desarrolloCom/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Educación</h4>
                        <p>Busca mejorar el acceso a la educación y la calidad de la enseñanza en comunidades,
                            promoviendo programas educativos inclusivos y adaptados a las necesidades locales. </p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="desarrolloCom/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Salud Comunitaria</h4>
                        <p>Enfocado en mejorar la salud y el bienestar de la comunidad, abordando cuestiones como el
                            acceso a servicios de salud, la prevención de enfermedades y la promoción de estilos de vida
                            saludables.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="desarrolloCom/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Desarrollo Rural</h4>
                        <p>Apunta a fortalecer las comunidades en áreas rurales, abordando desafíos específicos como el
                            acceso a servicios básicos, la infraestructura agrícola y el desarrollo económico local.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Atributos de Egresado</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion1.svg" alt="">
                        <h3>Conocimiento Teórico</h3>
                        <ul>
                            <li class="AtributosE">Comprender los principios teóricos del desarrollo comunitario,
                                incluyendo modelos, enfoques y herramientas utilizadas en la planificación y ejecución
                                de iniciativas.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Análisis Contextual</h3>
                        <ul>
                            <li class="AtributosE">Ser capaz de analizar el contexto socioeconómico, cultural y
                                ambiental de una comunidad para identificar sus necesidades, recursos y potenciales
                                desafíos.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Habilidades de Comunicación</h3>
                        <ul>
                            <li class="AtributosE">Desarrollar habilidades de comunicación efectiva, incluyendo la
                                capacidad para facilitar reuniones, negociar y mantener un diálogo abierto con miembros
                                de la comunidad y otros actores relevantes.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-->
    @endsection

