<!DOCTYPE html>
<html lang="en">
<head>
	<title>Annoce de colis</title>
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
    @php

    $wilayas = array(   'Adrar',   'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra', 'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa',    'Jijel',    'Sétif',    'Saïda',    'Skikda',    'Sidi Bel Abbès',    'Annaba',    'Guelma',    'Constantine',    'Médéa',    'Mostaganem',    'M\'Sila',    'Mascara',    'Ouargla',    'Oran',    'El Bayadh',    'Illizi',    'Bordj Bou Arreridj',    'Boumerdès',    'El Tarf',    'Tindouf',    'Tissemsilt',    'El Oued',    'Khenchela',    'Souk Ahras',    'Tipaza',    'Mila',    'Aïn Defla',    'Naâma',    'Aïn Témouchent',    'Ghardaïa',    'Relizane',  );
    @endphp
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 15px;">
				<a class="navbar-brand" href="#" style="padding-left: 50px;">Percal</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav mr-auto " style="position: relative;left: 200px;">
					<li class="nav-item ">
					  <a class="nav-link" href="index.html">Aceuil<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item" style="padding-left: 70px">
					  <a class="nav-link" href="connexion2.html">Connexion</a>
					</li>
					<li class="nav-item active" style="padding-left: 70px;">
					  <a class="nav-link" href="inscription2.html">Inscription</a>
					</li>
					<li class="nav-item dropdown" style="padding-left: 70px">
					  <a class="nav-link" href="inscription.html">Ajouter annonce</a>
					</li>
					<li class="nav-item dropdown" style="padding-left: 70px">
					  <a class="nav-link" href="inscription.html">Aide</a>
					</li>
				  </ul>
				</div>
			  </nav>


	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url({{asset('colis/images/login.jpg')}});"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">


			{!! Form::open(['action' => 'AnnColisController@store','method'=>'POST']) !!}
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
					<div class="wrap-input100 validate-input">
						<!-- <span class="label-input100">Demande spéciale</span> -->
						<!-- <textarea class="form-control" id="Demande spéciale"></textarea> -->
						{{ Form::label("Description", "Description",['class'=>'label-input100'])}}
						{{ Form::textarea('description','', ['class'=>'form-control ','placeholder'=>'Description'])}}
						<!-- <span class="focus-input100"></span> -->
					</div>
					<div class="wrap-input100 validate-input">
						<!-- <span class="label-input100">Decription</span> -->
						<!-- <textarea class="form-control" id="Description"></textarea> -->
						{{ Form::label("Demande speciale", "Demande speciale",['class'=>'label-input100'])}}
						{{ Form::textarea('demande_spe','', ['class'=>'form-control','placeholder'=>'Demande speciale'])}}
						<!-- <span class="focus-input100"></span> -->
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
