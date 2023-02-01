<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/signup.php';
    require_once 'includes/accueil_includes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil Le Vignoble Bio</title>
    <meta name= »description » content= »
LeVignobleBio est un site de vente de vin biologique et 
biodynamique dont les propriétaires sont David, Ines, Stéphanie et Shems.
 »>
</head>

<body>
    <?php
        include 'includes/header.php';
    ?>    
        <!-- End Header 1 code -->

        <div class="title"><h2>Bienvenue sur Le Vignoble bio</h2></div>

       <p class="text-center h1"> Bonjour <?php echo $firstname . ' ' . $name; ?>
  
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/pexels-luiz-m-santos-760280.jpg"  alt="Une photo de grappes de raisin">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/pexels-pixabay-434311.jpg"  alt="Une photo de la fabrication dans la cuve à vin">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="images/pexels-fotograf-jylland-2995283.jpg"  alt="Une photo de cave à vin">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/pexels-engin-akyurt-3620231.jpg"  alt="Une photo d'un homme servant du vin">
            </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/pexels-cottonbro-3403505.jpg"  alt="une photo d'exposition de bouteille de vins ">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/pexels-brett-sayles-2606387.jpg"  alt="une photo d'un verre de vin ">
          </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/pexels-brett-sayles-1374552.jpg"  alt="Une photo d'une célébration d'une grande occasion avec verres de vin ">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="images/pexels-adrien-olichon-2537608.jpg"  alt="une photo d'une célébration avec verres de vin ">
          </div>
          </div>
        </div>
      </div>


      <div class='container mx-auto mt-5 col-md-10 mt-100'>
        <div class="header">
         
            <p><small class="text-muted"><h2>Pour vous guidez, voici quelques informations importantes :</h2><br /></small></p>
        </div>
        <div class="row" style="justify-content: center">
            <div class="card col-md-3 mt-100">
                <div class="card-content">
                    <div class="card-body p-0">
                        <div class="profile"> <img src="https://img.icons8.com/color/2x/delivery--v2.gif"> </div>
                        <div class="card-title"><h1>Livraison</h1><br/> <small>Livraison gratuite à partir de 50 euros d'achat.</small> </div>
                        <div class="card-subtitle">
                            <p> <small class="text-muted">Vous êtes livrés par Chronopost  avec ou sans signature.
                               Possibilité de choisir un créneau horaire.
                              
                            . </small> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mt-100">
                <div class="card-content">
                    <div class="card-body p-0">
                        <div class="profile"> <img src="https://img.icons8.com/ios/72/bank-card-front-side--v2.gif"> </div>
                        <div class="card-title"><h1>Paiement</h1><br/> <small>Paiement 100% sécurisé</small> </div>
                        <div class="card-subtitle">
                            <p> <small class="text-muted">Nous acceptons les moyens de paiements suivants : CB et
                               Paypal. </small> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 mt-100">
                <div class="card-content">
                    <div class="card-body p-0">
                        <div class="profile"> <img src="https://img.icons8.com/color/2x/whatsapp--v5.gif"> </div>
                        <div class="card-title"> <h1>Aide</h1><br /> <small>Une question concernant votre achat ou votre livraison?</small> </div>
                        <div class="card-subtitle">
                            <p> <small class="text-muted">Nous sommes disponible au 01.02.03.04.05 du lundi au vendredi de 9h à 17h, pour vous aidez dans votre démarche.
                              Notre boite mail est également ouverte : LevignobleBio@gmail.com </small> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft">
            <div class="btn btn-outline">-Une suggestion ? Ou un avis sur votre commande? Contactez nous !
    </div> 
        </div>
    </div>


        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
