<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles.css">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      </svg>
    <title>Contrato</title>
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
                    <a class="texto-overlay5" href="./index.html">CUIDADO CON EL GATO</a>
                    <h3 class="texto-overlay3">
                        ¡Únete a Nuestro Mundo de Estilo!
                    </h3>
                    <h4 class="texto-overlay4">
                        ¿Tienes pasión por la moda y el calzado? ¡Esta es tu oportunidad de brillar en el escenario de
                        la moda! Estamos en busca de modelos apasionados y carismáticos para mostrar nuestras últimas
                        tendencias en moda y calzado.
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <main id="main" class="px-lg-5 py-lg-5">
        <div class="col-md-12">
            <div class="card card-body text-info">
                <h2 class="registro" >Registro de Datos Básicos</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required><br><br>
        
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" required><br><br>
        
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono"><br><br>
        
                <input type="submit" value="Registrar"> 
            </div>
        </div>

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
    </footer>

</body>

</html>