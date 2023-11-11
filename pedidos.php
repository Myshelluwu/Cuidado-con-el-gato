<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Pedido</title>
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
                            <a class="nav-link active text-black" aria-current="page" href="#main">Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="menu py-lg-5">
        <div class="col-md-4">
            <br>
            <br>
            <a class="" href="./index.html">CUIDADO CON EL GATO</a>
        </div>
    </header>

    <main id="main">
        <div class="px-5">
            <br><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2>ROPA</h2>
                        </div>
                        <div class="col-md-6 text-center">
                            <h2>CALZADO</h2>      
                        </div>
                    </div>
                </div>
            <h3>Hacer un pedido</h3>
        </div>
        <div class="px-4">
            <table class="table-dark table-bordered">
                <thead>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Talla</th>
                    <th></th>
                </thead>
                <tbody>
                    <td><input pattern="[0-9]+" type="text" id="producto" name="producto" class="form-control" required autofocus></td>
                    <td><input type="number" min="1" max="10" id="cantidad" name="cantidad" class="form-control" required autofocus></td>
                    <td>
                        <select class="form-select" id="opciones" onchange="actualizarValor()">
                            <option value="opcion1">Chico</option>
                            <option value="opcion2">Mediano</option>
                            <option value="opcion3">Grande</option>
                        </select>
                    </td>
                    <td> <button type="submit" class="btn btn-dark" name="ingresar">Ingresar</button> </td>
                </tbody>
            </table>
        </div>
        <div class="px-5">
            <br>
            <h3>Revisa tu pedido</h3>
        </div>
        <div class="px-4">
            <table class="table-dark table-bordered">
                <thead>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Talla</th>
                    <th></th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                    <td class="text-center"> 
                        <button type="submit" class="btn btn-secondary" name="editar">Editar</button>
                        <button type="submit" class="btn btn-danger" name="eliminar">Eliminar</button> 
                    </td>
                </tbody>
                <tfoot>
                    <td colspan="4" class="text-center">
                        <button type="submit" class="btn btn-dark" name="realizar" onclick="mostrarMensaje()" >Realizar pedido</button>
                    </td>
                </tfoot>
            </table>
        </div>
        <div class="px-5">
            <br>
            <h3>Pedidos realizados</h3>
        </div>
        <div class="px-4">
            <table class="table-dark table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Cantidad de productos</th>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
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

    <script src="./public/js/bootstrap.js"></script>
    <script src="./funciones.js"></script>
</body>

</html>