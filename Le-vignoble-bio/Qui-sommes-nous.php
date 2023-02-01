<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/signup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Qui sommes nous</title>
    <meta name= "description"  content= "LeVignobleBio est le fruit de passionnés de vin,
 choisissant de faire découvrir à nos clients toutes une gamme de vins biologique et biodynamique venant exclusivement de région de France">
</head>
<body>
<?php
        include 'includes/header.php';
    ?>
    
    <div>
        <img src="images/qui-sommes-nous.png" alt="Qui sommes nous">
        </div>

        <h1> Notre histoire, </h1>

        <p>Le vignoble bio est tout d'abord une aventure humaine.
Composer de trois développeurs web, nous avions également une passion et une grande ambition: faire découvrir à une clientèle amatrice de vin un produit d'exception.
Un vin biologique et biodynamique, exclusivement produit en France.         
Ce marché est le symbole d'une transition écologique dans le secteur de l'agroalimentaire. <br>           
Nous sommes également soucieux de préserver la santé de tout un chacun et nous commercialisons nos vins en respectant la charte européenne de 2012.            
Cette dernière, regroupant plusieurs labels, nous oblige à un parcours strict mais nécessaire pour que nos produits répondent à l'exigence de nos clients.           
Notre vin ne contient ni pesticides, ni autres produits chimiques et subi une épuration maximale de sulfites et d'intrants.  
<br>          
Par ce processus, nous pouvons désormais alliés la dégustation d'un produit d'exception et d'une consommation avec modération.Par notre qualité d'implantation en France, nous serons à même d'être au plus près de nos viticulteurs sélectionnés œuvrant dans le plus grand respect de la vinification de notre vin biologique. 
Nous avons choisi de poursuivre toujours plus loin notre ambition en nous emparant d'un autre mode de productivité viticole biologique avec la biodynamie du vin. 
La viticulture biodynamique répond également au cahier des charges du label français AB et poursuis ce processus en prenant en compte les cycles naturels et notamment le cycle lunaire . 
Le Vignoble Bio allie notre passion pour le vin et nos compétences en création web, ce qui fait de notre site, une vitrine exclusivement à notre image .
 <br>
            
            David ,Ines, Stéphanie 
            </p>
        <div class="explication">
            <img src="images/vin-bio-explications.png" alt=" une photo d'explication du vin bio">
            <img src="images/vin-bio-choisir.png" alt=" une photo d'introduction à choisir">
            <img src="images/vin-biodyna-explications.png" alt=" une photo d'explication du vin biodynamique">
        </div>

        <h2 style="color: blueviolet"> Pour en savoir plus sur la fabrication du vin biologique et biodynamique :</h2>

      <div class="video">
        <div class="btn-group pdf-link" role="group" aria-label="Basic example"> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dIh4sLDYFHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </div>

        <div class="btn-group pdf-link" role="group" aria-label="Basic example"> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FWMGndX_qxU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="btn-group pdf-link" role="group" aria-label="Basic example"> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rRmKXu5703g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>   

        <a class="vin" href="accueil.php"><h3>Retour à l'accueil</h3></a>

    <?php
          include 'includes/footer.php';
          ?>
</body>
</html>