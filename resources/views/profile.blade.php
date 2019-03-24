<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="stylesheet" type="text/js" href="ys.js">  


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
</head>
<body class="profile-page">
        <h2>Profiles des contactes</h2>
        <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://newevolutiondesigns.com/images/freebies/city-wallpaper-47.jpg');"></div>
        
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h4>Profile</h4></div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div aling="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                                        <input id="profile-image-upload" class="hidden" type="file">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1">Nom complet du profile</h4>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">
                                <div class="col-sm-5 col-xs-6 tital">Nom : {{$user->name}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital">Prénom :{{$user->last_name}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>   
                                
                                <div class="col-sm-5 col-xs-6 tital">Sexe :{{$user->sexe}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div> 
                                
                                <div class="col-sm-5 col-xs-6 tital">Date de naissance :{{$user->date_nai}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div> 

                                <div class="col-sm-5 col-xs-6 tital">Emailee:{{$user->email}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div> 

                            </div>
                        </div>
                    </div>
  
                </div>

            </div>
            <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"> <h4>User profil</h4></div>
                        <div class="panel-body">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="col-sm-6">
                                        <div aling="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                                            <input id="profile-image-upload" class="hidden" type="file">
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 style="color:#00b1b1">Nom complet du profile</h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr style="margin:5px 0 5px 0;">
                                    <div class="col-sm-5 col-xs-6 tital">Nom :{{$user2->name}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>
    
                                    <div class="col-sm-5 col-xs-6 tital">Prénom :{{$user2->last_name}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div>   
                                    
                                    <div class="col-sm-5 col-xs-6 tital">Sexe :{{$user2->sexe}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div> 
                                    
                                    <div class="col-sm-5 col-xs-6 tital">Date de naissance :{{$user2->date_nai}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div> 
    
                                    <div class="col-sm-5 col-xs-6 tital">Email:{{$user2->email}}</div><div class="col-sm-7 col-xs-6 tital"></div>
                                    <div class="clearfix"></div>
                                    <div class="bot-border"></div> 
    
                                </div>
                            </div>
                        </div>
      
                    </div>
    
                </div>

        </div>

    </div>
    
    

</body>
</html>





         