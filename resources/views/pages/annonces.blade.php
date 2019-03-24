
<!DOCTYPE html>
<html>
<head>
	<title>Affichage</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 15px;">
        <a class="navbar-brand" href="#" style="padding-left: 50px;">Parcel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto " style="position: relative;left: 200px;">
            <li class="nav-item active">
                <a class="nav-link" href="home">Aceuil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" style="padding-left: 70px">
                <a class="nav-link" href="login">Connexion</a>
            </li>
            <li class="nav-item" style="padding-left: 70px;">
                <a class="nav-link" href="register">Inscription</a>
            </li>
            <li class="nav-item dropdown" style="padding-left: 70px">
                <a class="nav-link" href="annonce_trajet">Ajouter annonce</a>
            </li>
            <li class="nav-item dropdown" style="padding-left: 70px">
                <a class="nav-link" href="inscription2.html">Aide</a>
            </li>
            </ul>
        </div>
    </nav>



    <div class="slider">
        <div class="load">
        </div>
        <div class="content">
            <div class="principal">
                <h1>Parcel</h1>
                <p>Le site d'envois des colis entre particulier</p>'
            </div>
        </div>
    </div>
<div></br></div>

    <div class="container-fluid" >
@php

                                    $wilayas = array(   'Adrar',   'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra', 'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa',    'Jijel',    'Sétif',    'Saïda',    'Skikda',    'Sidi Bel Abbès',    'Annaba',    'Guelma',    'Constantine',    'Médéa',    'Mostaganem',    'M\'Sila',    'Mascara',    'Ouargla',    'Oran',    'El Bayadh',    'Illizi',    'Bordj Bou Arreridj',    'Boumerdès',    'El Tarf',    'Tindouf',    'Tissemsilt',    'El Oued',    'Khenchela',    'Souk Ahras',    'Tipaza',    'Mila',    'Aïn Defla',    'Naâma',    'Aïn Témouchent',    'Ghardaïa',    'Relizane',  );
                                    @endphp
            <div class="row">
                    @foreach ($annonces as $annonce)
                    @if($annonce->type_annonce==='trajet')
                    <div class="col-6 col-sm-3">
                        <div class="card border-secondary mb-3" style="width: 20rem;">
                                <div class="card-header"><div style="width:100px;padding-top: 10px;position: relative; left: 100px;">
                                       <center> <img src="/uploads/avatars/{{ App\User::find($annonce->user_id)->avatar  }}"class="card-img-top rounded-circle" alt="Card"> </center>
                                        </div></div>
                                <div class="card-body">

                                  <form>
                                        <p class="nom"><center> {{ App\User::find($annonce->user_id)->name }}   {{ App\User::find($annonce->user_id)->last_name }}</center></p>
                                        <h4 class="annonce">  <center>  Annonce de Trajet</center></h4>
                                    </form>
                                    <p style="text-align:center">_______________________</p>

                                    <div class="row" style="position:relative;left:30px;padding-bottom: 30px;">
                                            <div class="col-lg-6">
                                            <p for="usr">{{ $wilayas[$annonce->wilaya_D  ]}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                            <p for="pwd">{{ $wilayas[$annonce->wilaya_A  ]}}</p>
                                            </div>
                                        </div>
                                        <div class="row myrow">

                                            <div class="col-lg-4">
                                                <p for="*" class="affich">{{ 15}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p for="*" class="affich">{{ $annonce->Poids }}</p>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 20px 20px;">
                                            <div class="col-lg-4 dropdown">
                                                <img src="images/détaille.png" class="rounded-circle" style="width: 40px;" href="annonces/{{$annonce->id}}">
                                                <div class="dropdown-content">
                                                    <a  href="annonces/{{$annonce->id}}" class="desc">Plus dinformations</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4  dropdown">
                                                <img src="images/contact.png" class="rounded-circle" style="width: 40px;">
                                                <div class="dropdown-content">
                                                        <div class="desc">Contact derect</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4  dropdown">
                                                <img src="images/fiabilité.png" class="rounded-circle" style="width: 40px;">
                                                <div class="dropdown-content">
                                                        <div class="desc">La fiabilitée</div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                              </div>
                    </div>

                    @elseif($annonce->type_annonce==='colis')
                    <div class="col-sm">
                        <div class="card border-secondary mb-3" style="width: 20rem;">
                                <div class="card-header"><div style="width:100px;padding-top: 10px;position: relative; left: 100px;">
                                       <center>  <img src="/uploads/avatars/{{ App\User::find($annonce->user_id)->avatar  }}"class="card-img-top rounded-circle" alt="Card"></center>
                                        </div></div>
                                <div class="card-body">
                                    @php

                                    $wilayas = array(   'Adrar',   'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra', 'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa',    'Jijel',    'Sétif',    'Saïda',    'Skikda',    'Sidi Bel Abbès',    'Annaba',    'Guelma',    'Constantine',    'Médéa',    'Mostaganem',    'M\'Sila',    'Mascara',    'Ouargla',    'Oran',    'El Bayadh',    'Illizi',    'Bordj Bou Arreridj',    'Boumerdès',    'El Tarf',    'Tindouf',    'Tissemsilt',    'El Oued',    'Khenchela',    'Souk Ahras',    'Tipaza',    'Mila',    'Aïn Defla',    'Naâma',    'Aïn Témouchent',    'Ghardaïa',    'Relizane',  );
                                    @endphp
                                  <form>
                                        <p class="nom"><center> {{ App\User::find($annonce->user_id)->name }}   {{ App\User::find($annonce->user_id)->last_name }}</center></p>
                                        <h4 class="annonce">  <center>  Annonce de Colis</center></h4>
                                    </form>
                                    <p style="text-align:center">_______________________</p>

                                    <div class="row" style="position:relative;left:30px;padding-bottom: 30px;">
                                            <div class="col-lg-6">
                                            <p for="usr">{{ $wilayas[$annonce->wilaya_D  ]}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                            <p for="pwd">{{ $wilayas[$annonce->wilaya_A  ] }}</p>
                                            </div>
                                        </div>
                                        <div class="row myrow">

                                            <div class="col-lg-4">
                                                <p for="*" class="affich">{{ $annonce->Taille  }}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p for="*" class="affich">{{ $annonce->Poids }}</p>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 20px 20px;">
                                            <div class="col-lg-4 dropdown">

                                                <img src="images/détaille.png" class="rounded-circle" style="width: 40px;" >
                                                <div class="dropdown-content">
                                                        <a  href="annonces/{{$annonce->id}}" class="desc">Plus dinformations</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4  dropdown">
                                                <img src="images/contact.png" class="rounded-circle" style="width: 40px;">
                                                <div class="dropdown-content">
                                                        <div class="desc">Contact derect</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4  dropdown">
                                                <img src="images/fiabilité.png" class="rounded-circle" style="width: 40px;">
                                                <div class="dropdown-content">
                                                        <div class="desc">La fiabilitée</div>
                                                </div>
                                            </div>
                                            <div class="dropdown" style="padding-left: 50px;">
                                                <button class="btn btn-primary affich3">Demande spécial</button>
                                                    <div class="dropdown-content">
                                                            <div class="desc">{{ App\Colis::where('id_annonce', '=', $annonce->id)->pluck('demande_spe') }}</div>
                                                    </div>
                                                </div>
                                        </div>

                                </div>
                              </div>
                    </div>
                    @endif
              @endforeach
            </div>
          </div>




</body>
</html>
