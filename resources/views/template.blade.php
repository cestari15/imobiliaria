<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg  nav-underline">
        <div class="container-fluid centered">
            <a class="navbar-brand text-warning " href="#">Imobliária Fulano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page"
                            href="{{ route('imoveis') }}">IMÓVEIS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-warning " href="{{ route('empresa') }}">SOBRE A IMPRESA</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>




    @yield('conteudo')




    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-dark" style=" background-color: rgba(3, 3, 75, 0.726);">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
                <!-- Left -->
                <div class="me-5">
                    <span>Conecte-se conosco nas redes sociais:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold text-white">IMOBILIÁRIA</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="text-white" />
                            <p class="text-white">
                                Somos uma empresa que trata-se de vendas de casas e terrenos, com opção de locação
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold text-white">Imóveis</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Casas</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Apartamentos</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Salão Comercial</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Terrenos</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold text-white">Sobre nós</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Fale conosco</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Entre em contato </a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold text-white">Fale Conosco!</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p class="text-white"><i class="fas fa-home mr-3 "></i> Presidente Epitácio, Av. Presidente
                                Vargas</p>
                            <p class="text-white"><i class="fas fa-envelope mr-3"></i>WhatsApp: (18) 9999-9999</p>
                            <p class="text-white"><i class="fas fa-phone mr-3 "></i> Email: info@exemplo.com</p>
                            <p class="text-white"><i class="fas fa-print mr-3 "></i> </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

                <a class="text-dark" href="https://mdbootstrap.com/"></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
