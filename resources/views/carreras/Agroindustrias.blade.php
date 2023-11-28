@extends('carreras.comunCarreras')
@section('headContent')

<title>Desarrollo Comunitario</title>
<link rel="stylesheet" href="csscarreras/carreras/wrapAgro.css">
<link rel="shortcut icon" href="agroindustrias/agroin.png" type="image/x-icon">

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
            <li><a class="dropdown-item" href="Informatica_r">Informatica</a></li>
            <li><a class="dropdown-item active" >Agroindustrias</a></li>
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
            <h1>Agroindustrias</h1>
            <p>La agroindustria es un sector económico que integra las actividades agrícolas e industriales,
                transformando materias primas agrícolas en productos manufacturados. Esta interrelación busca agregar
                valor a los productos agrícolas y optimizar su utilización. La agroindustria abarca una amplia variedad
                de procesos, desde la producción primaria hasta la elaboración de productos finales, contribuyendo
                significativamente a la economía y al suministro de alimentos.</p>
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Fundamentos de la Agroindustria</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="/agroindustrias/img1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Producción Agrícola</h3>
                    <ul>
                        <li class="cont-txt">La agroindustria comienza con la producción primaria de materias primas
                            agrícolas, como cultivos, ganado, aves de corral y productos lácteos. La eficiencia y
                            sostenibilidad en esta fase son fundamentales.</li>
                    </ul>
                    <h3><span>2</span>Cadena de Valor Agroindustrial</h3>
                    <ul>
                        <li class="cont-txt">La agroindustria se inserta en una cadena de valor que abarca desde la
                            producción agrícola hasta la transformación industrial, la distribución y la
                            comercialización de productos finales.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="agroindustrias/p1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="imgcarreras/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="agroindustrias/p8.jpg" alt="">
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
                    <img src="agroindustrias/A1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Producción Agrícola</h4>
                        <p>Incluye la producción de cultivos, frutas, verduras, cereales, oleaginosas y otros productos
                            agrícolas que sirven como materias primas para la agroindustria.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="agroindustrias/A2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ganadería y Producción Animal</h4>
                        <p>La agroindustria se aplica en la cría y producción de animales para carne, leche, huevos,
                            cuero y otros subproductos relacionados. </p>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="agroindustrias/A3.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Transformación de Alimentos</h4>
                        <p>Engloba la transformación de materias primas agrícolas en productos alimenticios procesados,
                            como enlatados, congelados, productos lácteos, carnes procesadas y productos de panadería.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="agroindustrias/A4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Bebidas y Tabaco</h4>
                        <p>Incluye la producción de bebidas como jugos, vinos, cervezas y destilados, así como la
                            transformación de productos relacionados con el tabaco.</p>
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
                            <li class="AtributosE">Poseer un sólido conocimiento de los principios agrícolas e
                                industriales que sustentan la agroindustria, incluyendo procesos de producción,
                                transformación y comercialización.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion4.svg" alt="">
                        <h3>Gestión de la Cadena de Valor</h3>
                        <ul>
                            <li class="AtributosE">Ser capaz de comprender y gestionar eficientemente cada etapa de la
                                cadena de valor agroindustrial, desde la producción agrícola hasta la distribución y
                                comercialización.</li>
                        </ul>
                    </div>
                    <div class="servicio-ind">
                        <img src="imgcarreras/ilustracion3.svg" alt="">
                        <h3>Sostenibilidad</h3>
                        <ul>
                            <li class="AtributosE">Comprender y aplicar prácticas agrícolas y procesos industriales
                                sostenibles que minimicen el impacto ambiental y fomenten la responsabilidad social en
                                la agroindustria.</li>
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
