@extends('carreras.comunCarreras')
@section('headContent')
<title>Administracion y Contabilidad Rural</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapAdm.css">
    <link rel="shortcut icon" href="administracion/adm.png" type="image/x-icon">
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
            <li><a class="dropdown-item active">Administracion y Contabilidad Rural</a></li>
            <li><a class="dropdown-item" href="DesarrolloCom_r">Desarrollo Comunitario</a></li>
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
            <h1>Administracion y Contabilidad Rural</h1>
            <p>La Administración y Contabilidad Rural proporcionan las herramientas necesarias para enfrentar los
                desafíos económicos y operativos en la agricultura y la ganadería. Los profesionales en estas áreas
                deben combinar conocimientos técnicos con habilidades de gestión para asegurar la eficiencia y
                sostenibilidad a largo plazo de las explotaciones rurales.</p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Fundamentos de la Administracion y Contabilidad Rural</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/administracion/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Planificación Estratégica</h3>
                    <ul>
                        <li class="cont-txt">La planificación estratégica implica establecer metas a largo plazo,
                            identificar recursos necesarios y desarrollar estrategias para alcanzar objetivos
                            específicos en la explotación rural.</li>
                    </ul>
                    <h3><span>2</span>Toma de Decisiones</h3>
                    <ul>
                        <li class="cont-txt">La toma de decisiones informadas es esencial para resolver problemas,
                            aprovechar oportunidades y dirigir la explotación de manera eficiente. Se basa en análisis
                            de datos y evaluación de riesgos.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="administracion/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="administracion/p8.jpg" alt="">
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
                    <img src="administracion/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Planificación Financiera</h4>
                        <p>Se aplica en la elaboración de presupuestos, proyecciones financieras y análisis de costos
                            para planificar y controlar los recursos financieros de la explotación rural.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="administracion/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Gestión de Explotaciones Agropecuarias</h4>
                        <p>La administración y contabilidad rural son fundamentales para la gestión cotidiana de las
                            explotaciones agrícolas y ganaderas. </p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="administracion/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Contabilidad de Costos Agrícolas</h4>
                        <p>La contabilidad rural se utiliza para analizar los costos asociados con la producción
                            agrícola y ganadera, identificando áreas de eficiencia y posibles mejoras en la
                            rentabilidad.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="administracion/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Comercialización y Ventas</h4>
                        <p>La administración y contabilidad rural desempeñan un papel clave en la comercialización de
                            productos agrícolas y ganaderos, incluyendo la fijación de precios, la gestión de
                            inventarios y la negociación con compradores.</p>
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
                        <h3>Conocimientos técnicos</h3>
                        <ul>
                            <li class="AtributosE">Dominio de los principios contables y habilidades técnicas en
                                contabilidad financiera, de costos y administrativa específicas para el sector
                                agropecuario.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Competencia en Gestión Financiera</h3>
                        <ul>
                            <li class="AtributosE">Habilidad para gestionar eficientemente los recursos financieros de
                                una explotación rural, incluyendo la elaboración de presupuestos, análisis de costos y
                                proyecciones financieras.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Habilidades en Toma de Decisiones</h3>
                        <ul>
                            <li class="AtributosE">Capacidad para tomar decisiones informadas basadas en análisis de
                                datos financieros y económicos, considerando los riesgos y beneficios para la
                                explotación.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-->
    @endsection
</body>

</html>
