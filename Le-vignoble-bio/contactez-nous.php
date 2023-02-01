<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/signup.php';

    if(isset($_POST['btnSubmit'])){
        //extraction des variables
        extract($_POST);
        //verifions si les variables existent et ne sont pas vides
        if(isset($txtName) && $txtName != "" &&
           isset($txtEmail) && $txtEmail != "" &&
           isset($txtPhone) && $txtPhone != "" &&
           isset($txtMsg) && $txtMsg != ""){
            // envoyez l'email
            $to = "david.pires2906@gmail.com";
            // objet du mail
            $subject = "Vous avez reçu un message de : " . $txtEmail;

            $txtMsg = "
                    <p> Vous avez reçu un message de <strong> ". $txtEmail. "</strong></p>
                    <p><strong>Nom Prénom : </strong> ".$txtName."</p>
                    <p><strong>Téléphone : </strong> ".$txtPhone."</p>
                    <p><strong>Message : ".$txtMsg."</strong></p>     
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF=8" . "\r\n";

            // More headers
            $headers .= 'From: <'.$txtEmail.'>' . "\r\n";

            //envoi du mail
            $send = mail($to,$subject,$txtMsg,$headers);
            // verification de l'envoi
            if($send){
                $_SESSION['succes_message'] = "Message envoyé !";

            }else{
                $info = "Message non envoyé !";

            }




        }else {
            // si elles sont vides
            $info = "Veuillez remplir tous les champs !";

        }
    }
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
    <link rel="stylesheet" href="css/contact.css">
    <title>Contactez nous</title>
    <meta name=  "description"  content=  "Cette page contient un formulaire de contact permettant de nous poser toutes vos questions sur LeVignobleBio et nous
 y répondrons dans les plus brefs délais.">
</head>
<body>

<?php
        include 'includes/header.php';
    ?>
    
    <?php 
    // afficher le message d'erreur
    if(isset($info)){ ?>
                <p class="request_message" style="color:red">
                    <?=$info?>
                </p>
        <?php
    }
    ?>

<?php 
    // afficher le message de succes
    if(isset($_SESSION['succes_message'])){ ?>
                <p class="request_message" style="color:green">
                    <?=$_SESSION['succes_message']?>
                </p>
        <?php
    }
    ?>

<div class="container contact-form">

            <form method="post">
                <h3>Contactez-nous</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Votre Nom Prénom *" value=""  />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Votre Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Votre Numero *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyez" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Votre Message *" style="width: 100%; height: 150px;" ></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

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

</body>
</html>