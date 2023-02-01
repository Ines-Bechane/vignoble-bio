<?php 
session_start();
include_once 'includes/con_dbb.php';
include_once 'includes/panier_includes.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/panier4.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Mon Panier</title>
</head>
<body>
<?php
        include 'includes/header.php';
    ?>
    
    <section class="panier w-100 ">
        <div>
            <div class="row justify-content-center no-gutters">
                <p class="col-2">Produit</p>
                <p class="col-2">Nom</p>
                <p class="col-2">Prix</p>
                <p class="col-2">Quantité</p>
                <p class="col-2">Action</p>
            </div>
            <?php
            $total = 0 ;
            // liste des produits
            //recuperer les cles du tableau session
            $ids = array_keys($_SESSION['vignoble-bio']);
            if(empty($ids)){
                echo "Votre panier est vide";
            }else {

                $products = mysqli_query($con, "SELECT * FROM products WHERE product_id IN (".implode(',', $ids).")");
                // liste de produits avec une boucle foreach
                foreach($products as $product):
                    // calculer le total (prix unitaire * quantité)
                    // et additionner le resultat a chaque tour de boucle
                    $total = $total + $product['price'] * $_SESSION['vignoble-bio'][$product['product_id']] ;
            ?>
            <div class="row justify-content-center no-gutters">
                <p class="col-2"><img src="<?=$product['image'] ?>"></p>
                <p class="col-2"><?=$product['name'] ?></p>
                <p class="col-2"><?=$product['price'] ?></p>
                <p class="col-2"><?=$_SESSION['vignoble-bio'][$product['product_id']]?></p>
                <p class="col-2"><a href="panier4.php?del=<?=$product['product_id']?>"><img src="images/delete.png"></a></p>
            </div>
            <?php endforeach ;} ?>

            <div class="total">
                <p>Total : <?=$total?>€</p>
            </div>
        </div>
    </section>
    <a href="formulaire_paiement.php" class="link no-gutters">Payer</a>
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