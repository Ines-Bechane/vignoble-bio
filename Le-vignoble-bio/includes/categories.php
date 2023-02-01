<?php
    function getCategory($id) {
        // On se connecte à la base de données
        $db = dbConnect();        

        // On crée une requête préparée
        $query = $db->prepare('SELECT * FROM `categories` WHERE `category_id` = :category_id');

        // On lance l'exécution de la requête
        $query->execute(['category_id' => $id]);

        // On envoie les informations pour affichage
        return $query->fetch(PDO::FETCH_ASSOC);
    }