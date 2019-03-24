<!DOCTYPE html>
<html lang="en">
<head>
	<title>Annoce de trajet</title>
    <meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('trajet/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	 <link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/css/util1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('trajet/css/main1.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('trajet/static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('trajet/static/css/fontawesome.min.css')}}">
    <script src="{{asset('trajet/static/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('trajet/static/css/mystyle.css')}}">
    <link rel="stylesheet" href="{{asset('trajet/static/css/style.css')}}">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 15px;">
				<a class="navbar-brand" href="#" style="padding-left: 50px;">Parcel</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto " style="position: relative;left: 200px;">
					<li class="nav-item ">
					  <a class="nav-link" href="{{ route('home') }}">Accueil<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item" style="padding-left: 70px">
					  <a class="nav-link" href="{{ route('login') }}">Connexion</a>
					</li>
					<li class="nav-item active" style="padding-left: 70px;">
					  <a class="nav-link" href="{{ route('annonces.index') }}">Annonces</a>
					</li>
					<li class="nav-item dropdown" style="padding-left: 70px">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('Ajouter Annonce') }}

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('annonce_trajet.store') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Trajet') }}
                     </a>
                     <a class="dropdown-item" href="{{ route('annonce_colis.store') }}"
                        >
                         {{ __('Colis') }}
                     </a>
                        </div>
					</li>
					<li class="nav-item dropdown" style="padding-left: 70px">
					  <a class="nav-link" href="inscription.html">Aide</a>
					</li>
                  </ul>
                  <ul class="navbar-nav mr-auto " style="position: relative;left: 200px;">
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
			  </nav>
@php

$wilayas = array(   'Adrar',   'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra', 'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa',    'Jijel',    'Sétif',    'Saïda',    'Skikda',    'Sidi Bel Abbès',    'Annaba',    'Guelma',    'Constantine',    'Médéa',    'Mostaganem',    'M\'Sila',    'Mascara',    'Ouargla',    'Oran',    'El Bayadh',    'Illizi',    'Bordj Bou Arreridj',    'Boumerdès',    'El Tarf',    'Tindouf',    'Tissemsilt',    'El Oued',    'Khenchela',    'Souk Ahras',    'Tipaza',    'Mila',    'Aïn Defla',    'Naâma',    'Aïn Témouchent',    'Ghardaïa',    'Relizane',  );
@endphp

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url({{asset('trajet/images/2.jpeg')}});"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
			{!! Form::open(['action' => 'AnnTrajetController@store','method'=>'POST']) !!}
				 <!-- <form class="login100-form validate-form">  -->

					<span class="login100-form-title p-b-59" style="padding-left: 30px;font-size: 40px;">
						Annonce de trajet
					</span>
					<div class="wrap-input100 validate-input">
					<!-- data-validate="wilaya de départ is required"> -->
						<span class="label-input100">Wilaya de départ</span>


												{{ Form::label('wilaya_D', 'Wilaya de départ',['class'=>'label-input100'])}}
												{!! Form::select('wilaya_D', $wilayas,'', ['class'=>'input100 ','placeholder'=>'select une wilaya']) !!}
                         <span class="focus-input100"></span>

					</div>
                     <div class="wrap-input100 validate-input" data-validate="wilaya d'arrivée is required">
										{{ Form::label("wilaya_A", "wilaya d'arrivée",['class'=>'label-input100'])}}
										{!! Form::select('wilaya_A', $wilayas,'', ['class'=>'input100 ','placeholder'=>'select une wilaya']) !!}
					</div>
					<div class="wrap-input100 validate-input " data-validate="date de départ is required">
                                <span for="birthDate" class="label-input100">Date de départ</span>
                                <!-- <input class="input100" type="date" name="Date" placeholder="Entrer la date"> -->
																{{ Form::Date('Date_D', '',['class'=>'input100 ','type'=>'date','for'=>'birthDate'])}}
                                <span class="focus-input100"></span>
                         </div>

                    <div class="wrap-input100 validate-input" data-validate="date d'arrivée is required">
                                <span for="birthDate" class="label-input100">Date d'arrivée</span>
                                {{ Form::Date('Date_A','', ['class'=>'input100 ','type'=>'date','for'=>'birthDate'])}}
                                <span class="focus-input100"></span>
                         </div>
					<div class="wrap-input100 validate-input" data-validate = "Taille is required">
						<span class="label-input100"> Taille</span>
						 <!-- <input class="input100" type="text" name="taille" placeholder="Donner la taille">  -->
						{{ Form::number('Taille','', ['class'=>'input100 ','placeholder'=>'Taille'])}}
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="poids is required">
						<span class="label-input100">Poids</span>
						 <!-- <input class="input100" type="text" name="Poids" placeholder="Donner le poids">  -->
						{{ Form::number('Poids','', ['class'=>'input100 ','placeholder'=>'Poids'])}}
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="le nombre de kilométrage is required">
						<span class="label-input100"> Nombre de kilométres</span>
					 <!-- <input class="input100" type="text" name="nombre de kilométrage" placeholder="Donner le nombre de kilométrage ">  -->
						{{ Form::number('nb_km','', ['class'=>'input100 ','placeholder'=>'Nombre de kilométres'])}}
						<span class="focus-input100"></span>
					 </div>
                    <div class="wrap-input100 validate-input" data-validate="la fréquence de voyage is required">
						<span class="label-input100"> Fréquence de voyage</span>
				 <!-- <input class="input100" type="text" name="fréquence de voyage" placeholder="Donner la fréquence de voyage">  -->
						{{ Form::number('freq_voyage','', ['class'=>'input100 ','placeholder'=>'Fréquence de voyage'])}}
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="prix is required">
						<span class="label-input100">Prix</span>
						 <!-- <input class="input100" type="text" name="Prix" placeholder="Donner le prix">  -->
						{{ Form::number('Prix','', ['class'=>'input100 ','placeholder'=>'votre prix'])}}
						<span class="focus-input100"></span>
					</div>
					 <div class="container-login100-form-btn" style="position: relative;left: 76px; top: 13PX;">
						  <!-- <button class="login100-form-btn" style="background-color: #f9ca24; border-radius: 10px;">

						</button>  -->

						{{Form::submit('Ajouter!',['class'=>'login100-form-btn','style'=>'background-color: #f9ca24; border-radius: 10px;'])}}
                   </div>
     {!! Form::close() !!}


<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('trajet/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('trajet/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('trajet/js/main.js')}}"></script>

</body>
</html>
