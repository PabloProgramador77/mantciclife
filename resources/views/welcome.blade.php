<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MantCicLife</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/00b567f7fc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container-fluid col-xxl-8" style="background-image: url('/img/2148269274-min.jpg'); background-size: container; background-position: center; background-repeat: no-repeat;">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="/img/logotipo-removebg-preview-min.png" alt="Logo" width="320" height="100" class="m-5 d-inline-block align-text-top">
                    </a>
                </div>
            </nav>
            <div class="row flex-lg-row-reverse align-items-center g-5 px-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Manteniendo ciclos de vida</h1>
                    <p class="lead fw-semibold mb-4">Es una organización que nació para mejorar la vida de las personas por medio de la ciencia, educando, implementando, manteniendo, controlando y optimizando el ciclo de vida de entidades y su entorno.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        @if( Route::has('login'))
                            @auth
                                <a href="{{ route('/home') }}" class="btn btn-primary btn-lg px-4 me-md-2">Entrar</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-md-2"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                                @if( Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-info btn-lg px-4"><i class="far fa-address-book"></i> Registrarme</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid col-xxl-8 my-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 px-5 py-5">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Concepto</h1>
                    <p class="lead fw-semibold mb-4">Siempre deseamos que las cosas que hemos construido en el tiempo se conserven y nuestro entorno mejore, junto con el bienestar de nuestros seres queridos, esa es la esencia de la organización, que esos deseos, objetivos y anhelos se concreten.</p>
                    <p class="lead fw-semibold mb-4">Para ello la ciencia nos ha entregado una herramienta denominada "El ciclo de vida" que es una forma de hacer referencia con una cuantía al inicio y fin de algún objeto en el espacio al que le atribuimos la propiedad de existir.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/img/2147694705-min.jpg" alt="" width="100%" height="auto" class="shadow">
                </div>
            </div>
        </div>
        <div class="container-fluid col-xxl-8 mt-5" style="background-color: #B3B6B7;">
            <div class="row flex-lg-row-reverse align-items-center g-5 px-5 py-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">¿Cómo organiza ManTCic Life?</h1>
                    <p class="lead fw-semibold mb-4">Organiza su sistema de interacción a tráves de unidades y espacios.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <div class="container px-4 py-5" id="featured-3">
                            <h2 class="pb-2 border-bottom">Las unidades se clasifican en:</h2>
                                <div class="row g-4 py-5 row-cols-1 row-cols-lg-5">
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                            <i class="fas fa-business-time"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">UnNe</h3>
                                        <p>Negocio</p>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                            <i class="fab fa-servicestack"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">UnSe</h3>
                                        <p>Servicio.</p>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-headset"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">UnSo</h3>
                                        <p>Soporte.</p>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-user"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">UnOp</h3>
                                        <p>Operador</p>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fab fa-elementor"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">UnEl</h3>
                                        <p>Elemental.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <div class="container text-center px-4 py-5" id="featured-3">
                            <h2 class="pb-2 border-bottom text-center">Las espacios se clasifican en:</h2>
                                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-briefcase"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Administración</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-tools"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Mantenimiento</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-brain"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Reflexivo</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-coffee"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Comercial</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-balance-scale"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Judicial</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Comunicacional</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-stethoscope"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Clínico</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-book-reader"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Capacitación</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-seedling"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Desarrollo</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-shopping-basket"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Aprovisionamiento</h3>
                                    </div>
                                    <div class="feature col">
                                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                                        <i class="fas fa-landmark"></i>
                                        </div>
                                        <h3 class="fs-2 text-body-emphasis">Financiero</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Proyectos</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/img/2151317287-min.jpg'); background-position: center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="/img/logo-removebg-preview-min.png" alt="Bootstrap" width="64" height="64" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Earth</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>3d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/img/2851-min.jpg'); background-position: center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="/img/logo-removebg-preview-min.png" alt="Bootstrap" width="64" height="64" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Pakistan</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>4d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/img/2149278557-min.jpg'); background-position: center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="/img/logo-removebg-preview-min.png" alt="Bootstrap" width="64" height="64" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>California</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>5d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid col-xxl-8" style="background-image: url('/img/2151850256-min.jpg'); background-size: container; background-position: center; background-repeat: no-repeat;">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="/img/logotipo-removebg-preview-min.png" alt="Logo" width="320" height="100" class="m-5 d-inline-block align-text-top">
                    </a>
                </div>
            </nav>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <div class="container px-4 py-5" id="featured-3">
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="feature col">
                                <h3 class="fs-2 text-white border-bottom mb-4">Contacto:</h3>
                                <p class="text-white fw-semibold"><i class="fas fa-user"></i> Jose Fernando Riquelme Vergara</p>
                                <p class="text-white fw-semibold"><i class="fas fa-map-marker-alt"></i> Bergamo 1452, Cerro Navia - Santiago</p>
                                <p class="text-white fw-semibold"><i class="fas fa-building"></i> Departamento de Ingeniería</p>
                                <p class="text-white fw-semibold"><i class="fas fa-phone"></i> +56 9 9134 8061</p>
                                <p class="text-white fw-semibold"><i class="fas fa-envelope"></i> ingenieria@pepesky.cl</p>
                            </div>
                            <div class="feature col">
                                <h3 class="fs-2 text-white mb-4 border-bottom">Horarios:</h3>
                                <p class="text-white fw-semibold"><i class="fas fa-calendar"></i> Lunes a Viernes</p>
                                <p class="text-white fw-semibold"><i class="fas fa-clock"></i> 08:00 am - 18:00 pm</p>
                                <p class="text-white fw-semibold"><i class="fas fa-calendar"></i> Sábado</p>
                                <p class="text-white fw-semibold"><i class="fas fa-clock"></i> 09:00 am - 15:00 pm</p>
                            </div>
                            <div class="feature col">
                                <h3 class="fs-2 text-white border-bottom mb-4">Siguenos en:</h3>
                                <p class="text-white fw-semibold"><i class="fab fa-facebook-square"></i> Facebook</p>
                                <p class="text-white fw-semibold">@pepesky.cl</p>
                                <p class="text-white fw-semibold"><i class="fab fa-instagram-square"></i> Instagram</p>
                                <p class="text-white fw-semibold">@pepesky.cl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>