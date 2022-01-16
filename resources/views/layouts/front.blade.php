<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venom Forum</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://bootswatch.com/litera/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>

<body>
    {{-- <div class="navbar"> --}}
    @include('layouts.partials.navbar')

    @yield('banner')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Category</h4>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="main-conten-heading">@yield('heading')</h4>
                    </div>
                    <div class="d-grid d-md-flex justify-content-end float-right">
                        <a href="{{ route('thread.create') }}" class="btn btn-primary">Create Thread</a>
                      </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            {{-- //category section --}}

            <div class="col-md-3">
                <div class="card-body">
                    <a href="{{ route('thread.index') }}" class="list-group-item">
                        <span class="position-relative right-50 start-50 badge rounded-pill bg-secondary">4</span>
                        All Thread
                    </a>

                    <a href="#" class="list-group-item">
                        <span class="position-relative right-0 start-50 badge rounded-pill bg-secondary">5</span>
                        PHP
                    </a>

                    <a href="#" class="list-group-item">
                        <span class="position-relative right-0 start-50 badge rounded-pill bg-secondary">10</span>
                        LARAVEL
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content-wrap-well">
                    @yield('content')
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H   +K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
