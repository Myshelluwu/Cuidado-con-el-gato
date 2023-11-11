<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Cuidado con el gato</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" aria-label="Toggle navigation">
                <a class="navbar-brand"="#">MENU</a>
            </button>
            <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
                aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="staticBackdropLabel">CUIDADO CON EL GATO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active text-black " aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black " aria-current="page" href="#ropa">Ropa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black " aria-current="page" href="#calzado">Calzado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="canvas-container">
            <canvas id="miCanvas"></canvas>
        </div>
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="canvas-container">
                    <h1 class="texto-overlay">CUIDADO CON EL GATO</h1>
                    <h3 class="texto-overlay2">
                        Una marca pensada para aquellos que valoran la elegancia sin esfuerzo y la distinción en cada
                        detalle.
                    </h3>
                </div>
            </div>
        </div>
    </header>
    <aside class="px-lg-5">
        <div class="card card-body">
            <p class="text-center">Estilo sin límites, moda que te define.</p>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-center">
                    <button id="boton" class="btn text-white boton" onclick="cambiarTexto()">01 Ropa</button>
                </div>
                <div class="col-md-6 text-center">
                    <button id="boton2" class="btn text-white boton" onclick="cambiarTexto2()">02 Calzado</button>
                </div>
            </div>
            <div class="card card-body text-info py-3">
                <p class="text-center" id="text">Nuestra ropa es mucho más que simples prendas de vestir; es una
                    expresión de tu estilo y personalidad. En cada pieza que diseñamos y seleccionamos, nos esforzamos
                    por ofrecer calidad, comodidad y moda.</p>
            </div>
        </div>
    </aside>
    <main class="px-lg-5 py-4">
        <!--Ropa-->
        <section id="ropa" class="row py-4">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center text-dark">Ropa</h2>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/traje.png" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>Cada prenda se elige minuciosamente para reflejar las últimas tendencias de moda y al mismo tiempo mantener una sensación de atemporalidad.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/coleccion.png" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>Entendemos que la ropa no solo es una necesidad, sino una forma de expresión. Por eso, en nuestra tienda, encontrarás una amplia variedad de estilos que se adaptan a cualquier gusto y ocasión.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/vestido.jpg" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>En cada prenda que ofrecemos, ponemos un énfasis en la calidad de los materiales y la confección, para asegurarnos de que te sientas seguro y elegante en cualquier situación.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="./pedidos.php"  target="_blank" class="btn btn-outline-dark boton2">Comprar ahora</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Calzado-->
        <section id="calzado" class="row py-4">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center text-dark">Calzado</h2>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/botas.jpg" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>Nuestro calzado va más allá de ser solo un par de zapatos; es una extensión de tu estilo y personalidad. Cada par que ofrecemos se elige y diseña cuidadosamente, priorizando la calidad, la comodidad y la moda.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/botines.jpg" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>En nuestra tienda, ofrecemos una amplia variedad de estilos para que encuentres el par perfecto que se ajuste a tu personalidad única. Ya sea que busques la comodidad de unas botas, la sofisticación de unos mocasines o la versatilidad de unas sandalias, tenemos lo que necesitas.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src="./public/image/zapatos.jpg" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <p>Cada diseño se inspira en las últimas tendencias de moda, pero también abrazamos la atemporalidad para que puedas disfrutar de tus zapatos durante mucho tiempo.</p>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="./pedidos.php"  target="_blank" class="btn btn-outline-dark boton2">Comprar ahora</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto" class="px-lg-5 py-lg-5">
        <div class="col-md-12">
            <div class="card card-body text-info">
                <p class="min">CONTACTO</p>
                <p class="text-decoration-underline"> cuidadoconel@gato.com</p>
                <p class="min py-1">FOLLOW</p>
                <p class="text-decoration-underline"> @cuidadoconelgato</p>
            </div>            
        </div>

        <div class="col-md-12 py-lg-5">
            <div class="card card-body text-info">
                <p class="min">ESTAMOS CONTRATANDO</p>
                <a class="min" href="./contrato.php"  target="_blank">Más información</a>
                
            </div>
        </div>
    </footer>

    <script src="./public/js/bootstrap.js"></script>
    <script src="./funciones.js"></script>

</body>

</html>