<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @stack('styles')
    <title>Facturas</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0">Paquete Facturación</a>

</nav>

<div class="container-fluid">

    <div class="row">

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">

            <div class="sidebar-sticky">

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

                    <span>Rutas del Paquete</span>

                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        
                        <span data-feather="plus-circle"></span>

                    </a>

                </h6>

                <ul class="nav flex-column mb-2">

                    <li class="nav-item">

                        <a class="nav-link" href="{{route('admin.mis.facturas')}}">

                            <span data-feather="file-text"></span>

                            Ver Facturas

                        </a>

                    </li>

                </ul>

            </div>

        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            @yield('content')

        </main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

@stack('scripts')
</body>
</html>
