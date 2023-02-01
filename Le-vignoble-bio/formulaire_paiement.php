<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/formulaire_paiement.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <title>Formulaire de paiement</title>
        

    </head>
    <body>
         <div class="card rounded-0 border-0 card2" id="paypage">
                                    <div class="form-card">
                                        <h2 id="heading2" class="text-danger">Types de paiement</h2>
                                        <div class="radio-group">
                                            <div class='radio' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
                                            <div class='radio' data-value="paypal"><img src="https://i.imgur.com/5QFsx7K.jpg" width="200px" height="60px"></div>
                                            <br>
                                        </div>
                                        <label class="pay">Nom de la carte</label>
                                        <input type="text" name="holdername" placeholder="Votre nom et prénom">
                                        <div class="row">
                                            <div class="col-8 col-md-6">
                                                <label class="pay">Numéro de carte</label>
                                                <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19">
                                            </div>
                                            <div class="col-4 col-md-6">
                                                <label class="pay">CVV</label>
                                                <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="pay">Date d'expiration</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="exp" id="exp" placeholder="MM/AA" minlength="5" maxlength="5">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="submit" value="Payez" &nbsp; &#xf178; class="btn btn-info placeicon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="vin" href="nos_vins_francais.php"><h3>Retourner sur le site</h3></a>
                        </body>
                </html>