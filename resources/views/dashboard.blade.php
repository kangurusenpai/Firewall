<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    @include('layouts.navigation')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-3  ">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('activerules') }}">Active Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('newrule') }}">New Rule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('modifyrule') }}">Modify Rule</a>
                    </li>
                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-4 col-lg-8 p-4 content-center">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
