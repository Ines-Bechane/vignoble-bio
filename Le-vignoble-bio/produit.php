<?php 
session_start();
require_once 'includes/database.php';
require_once 'includes/products.php';
require_once 'includes/categories.php';
require_once 'includes/product_include.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produit.css">
    <title>Description</title>
</head>
<body>
<?php
    include 'includes/header.php';
    ?>
<main class="row no-gutters">
    <div class="row mb-3 no-gutters" id="vin">
        <figure class="col-3">
            <img class="w-100" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <figcaption>
                <h1 class="rose"><?php echo htmlspecialchars($product['name']); ?></h1>
                <p class="rose"><?php echo htmlspecialchars (number_format($product['price'], 2, '€', ' ')); ?></p>
            </figcaption>
            <div>
            <a href="ajouter_panier.php?product_id=<?php echo $product['product_id'] ?>" class="btn w-90 rounded my-2">Ajouter au panier</a>      
            </div>
        </figure>
        <div class="col-9">
        <h2 class="rose">Description</h2>
    <p><?php echo htmlspecialchars($product['description']); ?></p>
    <h2 class="rose">Contenance</h2>
    <p><?php echo $product['capacity'],'L'; ?></p>
<h2 class="rose">Region</h2>
<p><?php echo htmlspecialchars($product['region']); ?></p>
<h2 class="rose">Culture</h2>
<p><?php echo htmlspecialchars($category['culture_type']); ?></p>
</div>
</div>
</main>
 


<?php
    include 'includes/footer.php';
    ?>
</body>
</html>