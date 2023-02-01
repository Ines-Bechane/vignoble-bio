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
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style.css">
    <title>FAQ</title>
    <meta name= » description » content= » Toutes les questions que vous vous posez sur la création de votre compte ,sur nos vignerons,nos produits 
 et à la finalisation de votre commande se trouveront sur cette page.
 »>
</head>
<body>
<?php
        include 'includes/header.php';
    ?>

    <h1>Foire Aux Questions</h1>
        <h3>Pourquoi faut-il se creer un compte sur LeVignobleBio ?</h3>
        <p>Vous créer un compte sur LeVignobleBio vous permet de passer des commandes mais vous donne également accès à des fonctionnalités supplémentaires : 
        <br>Consulter l’historique de vos commandes, ajouter vos vins préférés à votre liste de favoris, gérer vos adresses de livraison et de facturation.
        <br>Vous pouvez commander les vins de votre choix et vous les faire livrer chez vous. </p>

        <h3>Comment passer une commande ?</h3>
        <p>Vous ajoutez simplement les vins que vous souhaitez à votre panier et suivez le processus de commande. 
        <br>Il vous sera demandé soit de vous connecter (si vous avez déjà un compte), soit de collecter les informations nécessaires à la création d’un compte.</p>

        <h3>Comment les vigneron(ne)s sont sélectionnés</h3>
        <p>Les artisans vignerons que nous sélectionnons travaillent de façon authentique, dans le respect de la vigne et de l’environnement.
            <br>Ces hommes et ces femmes sont porteurs de valeurs, et il nous tient à cœur de les faire connaître.
            <br>Ils fuient l’uniformité et travaillent sans maquillage, sans rechercher à développer de manière artificielle un « goût susceptible de plaire au marché ».
            <br>Nous entretenons dans la durée des relations de proximité et de confiance avec eux, les rencontrons régulièrement et travaillons sans intermédiaire, en circuit court.</p>

        <h3>Quelle est la différence entre un vin biologique et un vin biodynamique?</h3>  
        <p>Voici un lien qui vous menera sur une rubrique du site qui explique la difference : <a href="Qui-sommes-nous.php" target="_blank"> Cliquez ici</a> </p>  

        <h3>Ma commande n’arrive pas – que puis-faire ?</h3>
        <p>Au moment de l’expédition de votre commande, LeVignobleBio vous a envoyé un e-mail contenant un lien vers le site de notre transporteur.
            <br>Cliquez sur ce lien, il vous permettra de visualiser le N° de suivi de votre colis ainsi que l’avancement de la livraison.
            <br>En cas de souci (perte du mail), contactez-nous.</p>
          
        <h3>Est-il préférable d’attendre avant de consommer les vins livrés ou puis-je les ouvrir rapidement ?</h3>
        <p>Il est préférable de laisser les bouteilles reposer au moins 1 ou 2 jours dans un endroit frais (entre 12 et 15°C) de les ouvrir.
            <br>Pensez également à les carafer une heure avant dégustation.</p>

            <a href="accueil.php"><h3>Retour à l'accueil</h3></a>

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