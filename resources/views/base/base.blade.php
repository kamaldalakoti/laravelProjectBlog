<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>
<body class="m-0  p-0">
    <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand mx-3" href="/">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  d-flex d-flex justify-content-between " id="navbarTogglerDemo02" >
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0  d-flex">


                <div class="d-flex mx-4">
                    @if(Auth::check())

                    <p class="text-light fw-bold text-capitalize pt-2">{{Auth::user()->name}}</p>
                        <a href="{{ url('dashboard') }}" class="mx-3 text-sm text-light pt-2 " style="text-decoration: none" >Dashboard</a>
                        <a href="{{ url('log-out') }}" class="mx-3 text-sm text-warning pt-2" style="text-decoration: none" >Log Out</a>

                    @else
                        <a href="login" class=" mx-3text-sm  text-gray-700 dark:text-gray-500 text-light" style="text-decoration:none;"><b>Log in</b></a>

                        <a href="{{ route('register') }}" class="mx-3 ml-4 text-sm text-gray-700 dark:text-gray-500 text-light" style="text-decoration:none;"><b>Register</b></a>

                    @endif
                </div>
            </form>
        </div>
    </nav>
</header>
    <main>
        @yield('content')
</main>


    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" i></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#author-request-t').DataTable();
        } );
    </script>
    @stack('script')
</body>
</html>
