<!DOCTYPE html>


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <title>Formulaire de contact</title>
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset">
                <form id="contact-form" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom <span class="blue">*</span></label>
                            <input id="firstname" type="text"  name="firstname" required class="form-control" placeholder="votre prénom"> 
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Prénom<span class="blue">*</span></label>
                            <input id="name" type="text" name="name" required class="form-control" placeholder="votre nom">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Email<span class="blue">*</span></label>
                            <input id="name" type="email" required name="email" class="form-control" placeholder="votre mail">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Téléphone</label>
                            <input id="name" type="tel" name="phone" class="form-control" placeholder="votre téléphone">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="name">Message <span class="blue">*</span></label>
                            <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                          <p class="blue"><strong>* Ces informations sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                           <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>





    <script src="js/script.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

   

</body>

</html>