<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/fontawesome.min.css">
    <script src="static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/mystyle.css">
    <link rel="stylesheet" href="static/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="static/js/mystyle.js"></script>
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
        <a class="nav-link" href="index.html">Aceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 70px">
        <a class="nav-link" href="connexion2.html">Connexion</a>
      </li>
      <li class="nav-item" style="padding-left: 70px;">
        <a class="nav-link" href="inscription2.html">Inscription</a>
      </li>
      <li class="nav-item dropdown" style="padding-left: 70px">
        <a class="nav-link" href="inscription2.html">Ajouter annonce</a>
      </li>
      <li class="nav-item dropdown" style="padding-left: 70px">
        <a class="nav-link" href="inscription2.html">Aide</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid ">
        <h1 class="myh1 container">BIENVENUE SUR PARCEL</h1>
        <h2 class="myh2 container">Le site d'envoi de colis entre particuliers</h2>
        <div class="container" style="padding-left: 350px;padding-top:80px;">
          <a class="btn btn-outline-warning" href="*" role="button" style="padding-left: 100px;padding-right: 100px;">LIRE A PROPOS DE NOTRE SITE</a>
        </div> 
</div>
<h1 class="myh111">QUELQUE DESTINATIONS?</h1>
<h1 class="myh1111">_____________________</h1>
  <div class="wrap">
  <div id="arrow-left" class="arrow"></div>
  <div id="slider">
      <div class="slide slide1">
          <div class="slide-content">
            <span>Alger</span>
          </div>
      </div>
      <div class="slide slide2">
          <div class="slide-content">
            <span>Constantine</span>
          </div>
      </div>
      <div class="slide slide3">
          <div class="slide-content">
            <span>Oran</span>
          </div>
      </div>
      <div class="slide slide4">
        <div class="slide-content">
          <span>SUD D'ALGERIE</span>
        </div>
    </div>
    <div class="slide slide5">
      <div class="slide-content">
        <span>BEJAIA</span>
      </div>
  </div>
  </div> 
  <div id="arrow-right" class="arrow"></div>
  <script>
      let sliderImages = document.querySelectorAll('.slide'),
          arrowLeft = document.querySelector('#arrow-left'),
          arrowRight = document.querySelector('#arrow-right'),
          current = 0;
  //supprimer tout les images
      function reset(){
        for(let i = 0; i < sliderImages.length; i++){
          sliderImages[i].style.display = 'none';
        }
      }
      function startSlide(){
        reset();
        sliderImages[0].style.display = 'block';
      }
      function sliderLeft(){
        reset();
        sliderImages[current - 1].style.display ='block';
        current--;
      }
      function sliderRight(){
        reset();
        sliderImages[current + 1].style.display ='block';
        current++;
      }
      arrowLeft.addEventListener('click', function(){
        if(current === 0){
          current = sliderImages.length;
        }
        sliderLeft();
      });
      arrowRight.addEventListener('click', function(){
        if(current === sliderImages.length - 1 ){
          current = -1;
        }
        sliderRight();
      });
      startSlide();
    </script>
</div>
  
<div style="padding-bottom: 50px;"> 
    <div class="container">
    <h1 class="myh111"> VOUS ETES UN TRANSPORTEUR ?</h1> 
    <div class="row" style="padding-top: 39px;">
        <div class="col-lg-4">
          <img src="static/images/voyage1.png" class="myphoto">
          <p class="myText2">Déposez votre annonce</p>
            <p class="myText">Décrivez les détails de votre 
            envoi : jour de départ , heure
            d'arrivée, type de documents
            acceptés.</p>
        </div>
        <div class="col-lg-4">
          <img src="static/images/voyage2.png" class="myphoto"> 
          <p class="myText2">Recevez des propositions</p>
          <p class="myText">Echangez avec l'expéditeur et
                convenez ensemble du tarif de
                la prestation et du lieu de 
                rendez _vous pour récupérer le 
                colis.  </p>
        </div>
        <div class="col-lg-4">
          <img src="static/images/voyage3.png" class="myphoto">
          <p class="myText2">Contactez le destinataire final</p>
            <p class="myText">
              Vérifiez la nature du colis avant
              toute chose et contactez le 
              destinataire dés votre arrivée à
              destination. 
            </p>
        </div>
    </div>
    </div> 
    
  </div>
<div class="cont-1">
<div class="container" style="padding-bottom: 25px;">
    <h1 class="myh11" style="padding-top: 20px;"> POURQOUI ENVOYER UN COLIS AVEC PARCEL ?</h1>
		<div class="row" style="padding-top: 40px;">
      <div class="col-lg-4">	
        <img src="static/images/colis-days-simple.png" style="padding-left: 130px;">
        <p class="simple"> Simple</p>
          <p class="simple2">Rentrez facilement en contact</p>
          <p class="simple2">avec des voyageurs qui vous</p>
          <p class="simple2">aideront à acheminer vos colis</p>
      </div>
      <div class="col-lg-4">
          <img src="static/images/colis-days-eco.png" style="padding-left: 120px;">
          <p class="eco">Economique</p>
          <p class="eco2">Envoyez vos colis en Algérie et </p>
              <p class="eco2">un peu partout dans le monde</p>
               <p style="padding-left: 134px;color: #FFFFFF;">à moindre cout</p>
      </div>
      <div class="col-lg-4">
          <img src="static/images/colis-days-colla.png" style="padding-left: 100px;">
          <p class="colla">Collaboratif</p>
              <p class="colla2"> service gagnant-gagnant</p> 
              <p class="colla2">Vous payez moins cher votre</p> 
              <p class="colla2">envoi et le voyageurs amortit </p>
              <p class="colla2">ses frais de déplacement</p>
      </div>
      <div class="container" style="padding-left: 418px;padding-top:20px;">
        <a class="btn btn-outline-warning" href="connexion2.html" role="button" style="padding-left: 100px;padding-right: 100px;">CREER UN ANNONCE</a>
      </div>
</div>
</div> 
<section id="examples">
    <h1 class="myh1111"> TYPES DES ANNONCES</h1> 
    <h1 class="myh1111"> __________________</h1> 
<div class="card-deck" style="padding-top:20px;">
  <div class="card">
      <h5 class="card-title myh11111">ANNONCE DE COLIS</h5>
    <img src="static/images/login.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title myh11111">Les informations concerner</h5>
      <h5 class="myh11111">___________________</h5>
      <div style="padding-left: 80px;">
      <p class="card-text">* Les dates d’envoi et de dépôt</p>
      <p class="card-text">* La taille et le poids du colis</p>
      <p class="card-text">* Les photos du coli</p>
      <p class="card-text">* Prix fixée</p>
      <div class="container" style="padding-left: 418px;padding-top:20px;">
        <a class="btn btn-outline-warning" href="connexion2.html" role="button" style="padding-left: 100px;padding-right: 100px;">CREER UN ANNONCE</a>
       </div>
    </div>
    
    </div>
  </div>
  <div class="card">
      <h5 class="card-title myh11111">ANNOCE DE TRAJET</h5>
    <img src="static/images/trajet2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title myh11111" >Les informations concerner</h5>
      <h5 class="myh11111">___________________</h5>
      <div style="padding-left: 80px;">
      <p class="card-text">* Le lieu de départ,d'arrivée</p>
      <p class="card-text">* Kilométrage</p>
      <p class="card-text">* La date de départ,d'arrivée</p>
      <p class="card-text">* La fréquence  et la moyenne de voyage</p>
      <p class="card-text">* Prix fixée</p>
    </div>
    </div>
  </div>
  <div class="card">
      <h5 class="card-title myh11111">ANNONCE SPECIAL</h5>
    <img src="static/images/colis7.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title myh11111">Les informations concerner</h5>
      <h5 class="myh11111">___________________</h5>
      <div style="padding-left: 80px;">
      <p class="card-text">* Information de trajet</p>
      <p class="card-text">* Information de colis</p>
      <p class="card-text">* Prix négossable</p>
    </div>
    </div>
  </div>
</div>
</section>
<div id="fin" style="padding-top: 30px;padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <div class="row">
            <div class="col-sm-3">
              <h4 style="color: white;font-size: 16px;font-weight: 600">Société</h4>
              <div style="color: white;"> 
                <h6 style="font-size: 12px;">Qui sommes-nous?</h6>
                <h6 style="font-size: 12px;">Mentions légales</h6>
                <h6 style="font-size: 12px;">Nous réjoindre</h6>
              </div>
            </div>
            <div class="col-sm-3">
                <h4 style="color: white;font-size: 16px;font-weight: 600">Mon compte</h4>
                <div style="color: white;">
                <h6 style="font-size: 12px;">S'inscrire</h6>
                <h6 style="font-size: 12px;">Se connecter</h6>
                <h6 style="font-size: 12px;">Mot de passe oublié?</h6>
              </div>
            </div>
            <div class="col-sm-3">
                <h4 style="color: white;font-size: 16px;font-weight: 600">Mode d'emploi</h4>
                <div style="color: white;">
                <h6 style="font-size: 12px;">Créer une annonce</h6>
                <h6 style="font-size: 12px;">Trouver un voyageur</h6>
                <h6 style="font-size: 12px;">Mesure de sécurité</h6>
              </div>
            </div>
            <div class="col-sm-3">
              <h4 style="color: white;font-size: 16px;font-weight: 600">Aide</h4>
              <h6 style="color: white;font-size: 12px;">Contact</h6> 
            </div>
        </div>
        </div>
        <div class="col-lg-6">
            <div class="row" style="padding-top: 20px;">
                <div class="col-lg-4">
                <img src="static/images/face2.png" style="padding-left: 143px;width: 200px;">
                </div> 
                <div class="col-lg-4">
                <img src="static/images/twitter.png" style="padding-left: 148px;width: 200px;">
                </div> 
                <div class="col-lg-4">
                <img src="static/images/insta.png" style="padding-left: 148px;width: 200px;">
                </div> 
            </div>
        </div>
        </div>
        
    </div>
</div>
</body>
</html>