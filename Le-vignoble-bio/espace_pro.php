<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/products.php';
    require_once 'includes/nos_vins_francais.php';
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
    <link rel="stylesheet" href="css/vins_francais.css">
    <title>Espace professionnel</title>
    <meta name= "description" content= " Découvrez nos vins biologique et biodynamique rouges, 
blancs, rosés dont des mousseux, pétillants, perlants et venant de Bourgogne, 
Vallée de la Loire, Bordeaux, Provence, Languedoc, Roussillon, Vallée du Rhônes, Sud Ouest.">
</head>
<body>
<?php
        include 'includes/header.php';
    ?>

 <section>
        <div class="row no-gutters">
<article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse1.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biologique</h1>
                <h2 class="ids">100€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse3.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Blanc Biodynamique</h1>
                <h2 class="ids">120€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse4.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biodynamique</h1>
                <h2 class="ids">135€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse5.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Blanc Biologique</h1>
                <h2 class="ids">105€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse6.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biologique</h1>
                <h2 class="ids">110€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse8.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biologique</h1>
                <h2 class="ids">115€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse9.png" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rosé Biologique</h1>
                <h2 class="ids">125€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse11.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biodynamique</h1>
                <h2 class="ids">99.99€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse12.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rouge Biologique</h1>
                <h2 class="ids">125€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse13.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Rosé Biodynamique</h1>
                <h2 class="ids">105€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse14.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Effervescent Biodynamique</h1>
                <h2 class="ids">110€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    <article class="col-12 col-md-6 col-xl-3 mb-3">
        <figure>
            <img src="image/caisse15.jpg" alt="Vin rosé">
            <figcaption>
                <h1 class="ids">Caisse 12 Bouteilles de Vin Effervescent Biologique</h1>
                <h2 class="ids">130€</h2>
            </figcaption>
            <div>
                <button class="btn w-90 rounded my-2">Ajouter au panier</button>      
            </div>
        </figure>
    </article>

    </section>
        </div> 

        <a class="vin" href="accueil.php"><h3>Retour à l'accueil</h3></a>

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