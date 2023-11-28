<!--Partes comunes en la seccion de carreras-->
<!DOCTYPE html>
<html lang="es">

<head>
    <!--Dentro de esta etiqueta eliminamos lo que es el titulo y dos etiquetas "css" ya que estas no tienen nada en
        comun con las demas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/15f4060a8e.js" crossorigin="anonymous"></script>

    @yield('headContent')


    <link rel="stylesheet" href="csscarreras/estilos.css">
</head>

<body>
    <!--En este apartado del navegador eliminamos la etiqueta "ul", "li" y "a" los cuales son parte del navegador
    y redireccionan a paguinas diferentes -->
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
                @yield('navContent')

            </div>
        </nav>
    </header>

@yield('footer')
<!--En este apartado se encuetra el footer o nuestro pie de pagina el cual es similar a todos los demas-->
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Phone</h4>
            <p>8296312</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>cbta67@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>Location</h4>
            <p>Ixmiquilpan Hidalgo</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; CBTa.67 | Ixmiquilpan Hidalgo</h2>
</footer>
</body>

</html>

