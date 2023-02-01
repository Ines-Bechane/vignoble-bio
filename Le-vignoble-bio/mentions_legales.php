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
    <title>Mentions Légales</title>
    <meta name=  "description"  content=  "Lisez nos mentions légales et 
 soyez informer sur la conception du site, sur la vente de boisson alcoolisé ,la propriété intellectuelle, contrefaçon et sécurité du système informatique."
 >
</head>
<body>

<?php
        include 'includes/header.php';
    ?>

    
    <h1>Mentions Légales</h1>
    <p>
        En vertu de l’article 6 de la loi n°2004-575 pour la confiance dans l’économie numérique, les informations suivantes sont mises à la disposition des utilisateurs du site www.levignoblebio.com :
    </p>
    <h3>Conception et réalisation du site</h3>
    <p>
        La conception et la réalisation du site web Levignoblebio.com a été réalisé par une équipe de 3 jeunes developpeurs web 
    </p>
    <h3>Ventes de boisson Alcoolisé</h3>
    <p>
        Conformément à l’article L.3342-1 du Code de la Santé Publique, la vente de boissons alcooliques à des mineurs est interdite. Toutes les offres présentes sur le site sont donc réservées aux majeurs de 18 (dix huit) ans révolus.
    <br>Nous rappelons en outre l’alcool est à consommer avec modération et que son abus est dangereux pour la santé</br>
    </p>
    <h3>Propriété intellectuelle et contrefaçon</h3>
    <p>
        Le vignoble bio est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, vidéos, graphismes, logos, icônes, sons, logiciels.
    <br>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite sauf autorisation préalable de Le vignoble bio. De la même façon, la création de lien hypertexte vers le site est soumise à l’accord préalable de celui-ci.
    <br>Toute exploitation non autorisée du site ou de l’un quelconques des éléments qu’il contient sera considérée comme une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
    </p>
    <h3>Sécurtié</h3>
    <p>L’utilisateur s’engage, dans l’usage qu’il fait du site www.levignoblebio.com, à ne procéder à aucune manipulation susceptible d’entraîner des pannes informatiques, fonctionnelles ou de tout ordre affectant le fonctionnement du site ou de tout serveur ou service accessible par l’intermédiaire du site. 
        <br>L’utilisateur s’engage notamment à ne mettre à disposition dans l’espace constitué par le site que des informations, données, documents, fichiers fiables et inoffensifs.
        <br>L’utilisateur s’engage également à ne pas porter préjudice à l’image de Vinibee à quelque titre et sous quelque forme que ce soit – il utilise le site sous sa seule et entière responsabilité.
        <br>LeVignobleBio ne pourrait à ce titre être tenu pour responsable des dommages directs ou indirects tels que, notamment, préjudice matériel, financier, perte de données ou de programme résultant de l’utilisation du site ou des sites et services qui lui sont liés.
        <br>LeVignobleBio est propriétaire du site www.levignoblebio.com et s’engage à mettre en œuvre tous les moyens nécessaires pour assurer la sécurité des informations mises à disposition sur l’espace constitué par le site.</p>

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