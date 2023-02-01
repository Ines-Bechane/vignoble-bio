<?php 


// On verifie si on est sur une soumission de formulaire et si le formulaire est bien celui d'inscription
if(count($_POST) && isset($_POST['action']) && $_POST['action'] === 'signup'){
    $db = dbConnect();

    // On prépare la requete d'ajout d'un enregistrement en base de données d'un nouvel utilisateur
    $query = $db->prepare('INSERT INTO users (firstname, name, email, password, birthday_date, address, company, city, siret_number, postal_code) VALUES(:firstname, :name, :email, :password, :birthday_date, :address, :company, :city, :siret_number, :postal_code)');

    // On hache le mot de passe
    $password = $_POST['password'];

    $password = password_hash($password, PASSWORD_BCRYPT);

    // On execute la requete
    $result = $query->execute([
        'firstname' => $_POST['firstname'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $password,
        'birthday_date' => $_POST['birthday_date'],
        'address' => $_POST['address'],
        'company' => $_POST['company'],
        'siret_number' => $_POST['siret_number'],
        'city' => $_POST['city'],
        'postal_code' => $_POST['postal_code'],
    ]);
    //var_dump($result);
    $result = false;
    // On redirige l'utilisateur vers la page d'accueil (attention, l'url apres location est celui de votre systeme) si tout va bien ou un message d'erreur en cas de probleme lors de l'nregistrement en base de données
    if($result !== false) {
    header('Location: accueil.php');
    } else {
        $errorMessage = 'Echec de l\'inscription !';
    }
}