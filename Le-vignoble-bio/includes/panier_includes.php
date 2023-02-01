<?php

//suprimer les produits
//si la varibale del existe
if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    //suppression
    unset($_SESSION['vignoble-bio'][$id_del]);
}

?>