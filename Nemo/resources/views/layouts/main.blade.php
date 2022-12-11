<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

     <!-- Fonte do Google -->
     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


     <!-- CSS Bootstrap -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- CSS Nativo -->

    <link rel="stylesheet" href="/css/main.css">

    <!-- main js -->
    <script src="/js/scripts.js"></script>   

</head>
<body>
    <header>

        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="/img/bg.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Feramentas</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Atender Pedido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/items/create">Cadastar Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Entrada de Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Saida de Item</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatorios
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Entradas</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Saidas</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar Item ou Pedido" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
    </header>
    @yield('content')
    <footer>
        <p>Felipe Dantas &copy; 2022</p>
    </footer>

<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

</body>
</html>