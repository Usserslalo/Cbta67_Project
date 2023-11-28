@extends('carreras.comunCarreras')
@section('headContent')
<title>Horticultura</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapHor.css">
<link rel="shortcut icon" href="horticultura/icon1.png" type="image/x-icon">
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
            <li><a class="dropdown-item active" href="#">Horticultura</a></li>
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

@endsection


@section('footer')

    <div class="wrap">
        <div class="wrap-texto">
            <h1>Horticultura</h1>
            <p>La horticultura es una rama de la agricultura que se especializa en el cultivo de frutas, verduras,
                hierbas, flores y plantas ornamentales. A diferencia de la agricultura convencional, que a menudo se
                centra en grandes extensiones de tierra dedicadas a cultivos a gran escala, la horticultura se concentra
                en prácticas más intensivas y diversificadas, tanto en términos de variedad de cultivos como de técnicas
                de cultivo.</p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Fundamentos de la Horticultura</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/horticultura/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Selección del Sitio</h3>
                    <ul>
                        <li class="cont-txt">La elección adecuada del sitio es esencial. Factores como la calidad del
                            suelo, la exposición al sol, el drenaje y la topografía son críticos para el éxito del
                            cultivo.</li>
                    </ul>
                    <h3><span>2</span>Suelo y Nutrientes</h3>
                    <ul>
                        <li class="cont-txt">Se deben aplicar prácticas de manejo del suelo para mejorar su fertilidad y
                            estructura. Además, es esencial proporcionar los nutrientes adecuados a las plantas a través
                            de fertilizantes y enmiendas.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="horticultura/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="horticultura/p8.jpg" alt="">
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
                    <img src="horticultura/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Producción de Alimentos</h4>
                        <p>La horticultura es esencial para la producción de una amplia gama de alimentos, como frutas,
                            verduras, hierbas y hortalizas.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="horticultura/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Jardinería Ornamental</h4>
                        <p>La horticultura se utiliza para diseñar, crear y mantener jardines ornamentales, paisajes y
                            espacios verdes.</p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="horticultura/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Paisajismo y Diseño de Jardines</h4>
                        <p>Profesionales en horticultura desempeñan un papel clave en el diseño y mantenimiento de
                            paisajes, creando entornos atractivos y funcionales para espacios residenciales, comerciales
                            e institucionales.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="horticultura/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Investigación y Desarrollo</h4>
                        <p>La investigación en horticultura impulsa el desarrollo de nuevas variedades de cultivos,
                            prácticas agrícolas sostenibles, y métodos de mejora de la productividad y la resistencia de
                            las plantas.</p>
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
                            <li class="AtributosE">Poseer un sólido conocimiento de las prácticas hortícolas,
                                incluyendo el manejo del suelo, la nutrición de las plantas, el control de plagas y
                                enfermedades, y las técnicas de cultivo.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Planificación y Gestión</h3>
                        <ul>
                            <li class="AtributosE">Ser capaz de planificar y gestionar eficientemente un proyecto
                                hortícola, desde la selección del sitio hasta la cosecha y el postcosecha.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Investigación y Desarrollo</h3>
                        <ul>
                            <li class="AtributosE">Desarrollar habilidades de investigación para estar al tanto de las
                                últimas tendencias, avances científicos y tecnológicos en horticultura, y aplicar estos
                                conocimientos de manera efectiva.</li>
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
