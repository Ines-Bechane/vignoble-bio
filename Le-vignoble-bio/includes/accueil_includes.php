<?php

$firstname = null;
$name = null;

// isset permet de savoir si la variable ou l'élément de liste existe et si on va pouvoir l'utiliser sans problème dans notre code
if(isset($_SESSION['firstname'])) {
    $firstname = $_SESSION['firstname'];
}

if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}