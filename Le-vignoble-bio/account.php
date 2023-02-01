<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/signup.php';
    require_once 'includes/account_includes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Mon compte</title>
    <meta name= » description » content= » Créer votre compte sur cette page pour avoir accès à vos coordonnées, vos favoris, votre historique 
 de commande et à la progression de cette dernière.

 »>
</head>
<body>
<?php
        include 'includes/header.php';
    ?>

    <main>
        <h1 class="text-center">Mon Compte</h1>
        <p class="text-center h1"> Bonjour <?php echo $firstname . ' ' . $name; ?>
        <form class="p-2 p-lg-4" action="" method="post">
             <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="firstname">Prénom</label>
                <input class="form-control col-12 col-lg-4" type="text" name="firstname" id="firstname">
            </div>
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="name">Nom</label>
                <input class="form-control col-12 col-lg-4" type="text" name="name" id="name">
            </div> 
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="email">Adresse email</label>
                <input class="form-control col-12 col-lg-4" type="email" name="email" id="email">
            </div>
            <div class="form-group row justify-content-start align-items-center mx-1 mx-lg-0">
                <label class="col-12 col-lg-2 mb-lg-0" for="password">Mot de passe</label>
                <input class="form-control col-12 col-lg-4" type="password" name="password" id="password">
            </div>
            <button type="submit">Connexion</button>
        </form>
    </main>

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