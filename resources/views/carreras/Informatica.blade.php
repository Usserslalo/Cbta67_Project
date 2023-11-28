@extends('carreras.comunCarreras')

@section('headContent')

<title>Informatica</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapInfor.css">
<link rel="shortcut icon" href="informatica/informatica.png" type="image/x-icon">

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
            <li><a class="dropdown-item" href="DesarrolloCom_r">Desarrollo Comunitario</a></li>
            <li><a class="dropdown-item active">Informatica</a></li>
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
            <h1>Informatica</h1>
            <p>La informática es una disciplina que se ocupa del estudio, desarrollo y aplicación de sistemas de
                información y computadoras. Su objetivo principal es el procesamiento eficiente y la gestión de la
                información utilizando herramientas tecnológicas. La informática abarca una amplia gama de temas, desde
                el diseño de hardware y software hasta la resolución de problemas complejos a través de algoritmos y
                programación.</p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Fundamentos de la informatica</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/informatica/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Álgebra Booleana</h3>
                    <ul>
                        <li class="cont-txt">La álgebra booleana es fundamental para entender la lógica de las
                            operaciones en las computadoras. Los operadores lógicos como AND, OR y NOT se utilizan para
                            manipular y comparar valores binarios (0 y 1).</li>
                    </ul>
                    <h3><span>2</span>Sistema Numérico Binario</h3>
                    <ul>
                        <li class="cont-txt">La informática utiliza el sistema binario (base 2) para representar datos y
                            operaciones en las computadoras. Es crucial comprender cómo se representan y manipulan los
                            números binarios.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="informatica/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="informatica/p8.jpg" alt="">
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
                    <img src="informatica/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Desarrollo de Software</h4>
                        <p>La informática es esencial en la creación y mantenimiento de software para una variedad de
                            propósitos, incluyendo aplicaciones de negocios, sistemas operativos, juegos y aplicaciones
                            móviles.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="informatica/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Redes de Computadoras</h4>
                        <p>La creación, gestión y mantenimiento de redes informáticas, incluyendo redes locales (LAN) e
                            Internet, es un campo clave de aplicación de la informática.</p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="informatica/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Sistemas Operativos</h4>
                        <p>Los sistemas operativos son un componente esencial de cualquier computadora y dispositivo
                            informático, permitiendo la gestión eficiente de recursos y la interacción con el hardware.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="informatica/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Desarrollo Web</h4>
                        <p>La informática desempeña un papel crucial en el diseño y desarrollo de sitios web y
                            aplicaciones web, utilizando tecnologías como HTML, CSS, JavaScript y diversos frameworks.
                        </p>
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
                        <h3>Conocimiento Técnico</h3>
                        <ul>
                            <li class="AtributosE">Poseer un sólido conocimiento de los principios fundamentales de la
                                informática, incluyendo hardware, software, redes, algoritmos y estructuras de datos.
                            </li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Programación y Desarrollo de Software</h3>
                        <ul>
                            <li class="AtributosE">Ser capaz de diseñar, implementar y mantener software utilizando
                                lenguajes de programación, frameworks y metodologías de desarrollo.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Resolución de Problemas</h3>
                        <ul>
                            <li class="AtributosE">Desarrollar habilidades para abordar problemas complejos mediante la
                                aplicación de principios informáticos y la creación de soluciones eficientes.</li>
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
