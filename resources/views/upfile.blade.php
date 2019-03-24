
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="imagess/login.jpg">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<link rel="stylesheet"  href="css/nunito-font.css">
<!--===============================================================================================-->
</head>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 15px;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('Parcel', 'Parcel') }}
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto " style="position: relative;left: 200px;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}<span class="sr-only">(current)</span></a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:relative ; top:0px; left:0px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('prof') }}"
                                       >
                                        {{ __('Premium') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<div class="container">
        <div class="pt-4 bg"> </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Mon Profile</div>

                        <div class="card-body">
                          <div>
    <form enctype="multipart/form-data" action="{{route('storefile')}}" method="POST">
    <label>Ajouter des images a l annonce</label>
 <div class="file-path-wrapper">
    <input type="file" name="file[]" multiple>
</div>
<br>

<div >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="annonce" value="{{ $k }}">

</div>
<div>

        <input type="submit" class="pull-right  btn btn-sm btn-primary" value="Ajouter">

    </div>
</form>
<form method="get"  action="/annonces">
    <button type="submit" class="btn btn-sm btn-primary">Continue</button>
</form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

</body>
</html>

