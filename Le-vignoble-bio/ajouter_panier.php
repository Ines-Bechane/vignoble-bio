<?php 
        session_start();
        require_once 'includes/database.php';

if(isset($_GET['product_id'])){
    $id = $_GET['product_id'];


if(isset($_SESSION['vignoble-bio'][$id])){ // si le produit est deja dans le panier du produ
    $_SESSION['vignoble-bio'][$id]++; // Represente la quantité
} else {
    // si non on ajoute le produit
    $_SESSION['vignoble-bio'][$id] = 1;


}

header("Location:nos_vins_francais.php");

}   
    
?>