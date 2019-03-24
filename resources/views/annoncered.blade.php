@php

$wilayas = array(   'Adrar',   'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra', 'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa',    'Jijel',    'Sétif',    'Saïda',    'Skikda',    'Sidi Bel Abbès',    'Annaba',    'Guelma',    'Constantine',    'Médéa',    'Mostaganem',    'M\'Sila',    'Mascara',    'Ouargla',    'Oran',    'El Bayadh',    'Illizi',    'Bordj Bou Arreridj',    'Boumerdès',    'El Tarf',    'Tindouf',    'Tissemsilt',    'El Oued',    'Khenchela',    'Souk Ahras',    'Tipaza',    'Mila',    'Aïn Defla',    'Naâma',    'Aïn Témouchent',    'Ghardaïa',    'Relizane',  );
@endphp
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <hr>
<body>
  <div class="container bootstrap snippet">
    <div class="row"> <!--row1-->
      <div class="col-sm-10"> <h1>Profil réduit</h1></div>
      <div class="col-sm2"><a href="/users" class="pull-right"> <img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div><!--/row1-->

    <div class="row"> <!--row2-->
      <div class="col-sm-3"> <!--col-sm-3-->
        <div class="text-center">

          <img src="/uploads/avatars/{{ $user->avatar }}"class="avatar img-circle img-thumbnail" >
        </div>
      </hr>
      <ul class="list-group">

          <li class="list-group-item text-muted"> About<i class="fa fa-dashboard fa-1x"></i></li>
        <li class="list-group-item text-reight"><strong>Nom : {{$user->name}}</strong></li>
        <li class="list-group-item text-reight"><strong>Prenom: {{$user->last_name}}</strong></li>
        <li class="list-group-item text-reight"><strong> @if( $user->premium = 0 ){premium}  @endif </strong></li>
      </ul>

      </div> <!--/col-sm-3-->

      <div class="col-sm-9"> <!--col-sm-9-->
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#info">info</a></li>
          <li ><a data-toggle="tab" href="#photos">Photos</a></li>

        </ul>
        <div class="tab-content"><!--tab-content-->
          <div class="tab-pane active" id="info"><!--tab-pane active-->
            <hr>
            <form class="form" action="##" method="post" id="registrationForm" >
            <div class="form-group">
              <div class="col-xs-6">
                <h4> type: {{ $annonce->type_annonce }} </h4>
              </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <h4>taille: {{$annonce ->Taille}} cm </h4>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                   <h4> wilaya de depart: {{ $wilayas[$annonce->wilaya_D  ]}} </h4>
                </div>
                </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <h4>wilaya d'arrivée: {{ $wilayas[$annonce->wilaya_A  ]}}</h4>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <h4>date de depart: {{$annonce->Date_D}}</h4>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <h4>date d'arrivée: {{$annonce->Date_A}}</h4>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                  <h4>poids: {{$annonce ->Poids}} kg</h4>
                </div>
            </div>
                @if($annonce->type_annonce === 'colis')

                  <div class="form-group">
                <div class="col-xs-6">
                  <h4>description: {{ App\Colis::where('id_annonce','=',$annonce->id)->first()->description}}</h4>
                </div>
            </div>

                @else
                  <div class="form-group">
                <div class="col-xs-6">
                  <h4>nb kilometre :{{ App\Trajet::where('id_annonce','=',$annonce->id)->first()->nb_km}} </h4>
                </div>
            </div>
                <div class="form-group">
                <div class="col-xs-6">
                  <h4> frequence voyage : {{ App\Trajet::where('id_annonce','=',$annonce->id)->first()->freq_voyage}}   </h4>
                </div>
            </div>
                <div class="form-group">
                <div class="col-xs-6">
                  <h4> Prix:{{ App\Trajet::where('id_annonce','=',$annonce->id)->first()->Prix }} Dz</h4>
                </div>
            </div>

                @endif

            <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-primary" type="submit">Contacter</button>
                <button  class="btn btn-lg btn-default" onclick="goBack()">Retour</button>
              </div>
            </div>

          <hr>
          </div><!--/tab-pane active-->
          <div></div>
          @if($annonce->type_annonce === 'colis') <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="nav-events-tab"><!--tab-pane-->
            <hr>
            <h4>Les photos de coli </h4>
            <hr>
            <div class="col-xs-12">
            @php
                $images = App\Photo::where('id_annonce','=',$annonce->id)->get();

            @endphp

            @if($images->count()>0)
            @foreach ($images as $image)
            <img src="/uploads/images/{{ $image->filename  }}" class="avatar img-fluid img-thumbnail" alt="avatar" class="div">

            @endforeach

            @else

            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-fluid img-thumbnail" alt="avatar">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-fluid img-thumbnail" alt="avatar">
@endif
            <div class="srch clearfix">

            </div>
        </div>


          </div><!--/tab-pane-->
          @endif

        </div><!--/tab-content-->


      </div><!--/col-sm-9-->

    </div><!--/row2-->


  </div>







</body>
</html>
