<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cssJ.css" rel="stylesheet">
    <link rel="stylesheet" href="./NavBarStyle.css">
  <link rel="stylesheet" href="./FooterStyle.css">
    <title>Paris</title>
</head>

<body>
<?php include('./NavBar.php'); ?>

    <div class="Img_Opacity Paris">

        <div class="First_Block">
            <div class="Ville">
                <h1>Paris</h1>
            </div>
            <div class="Img_Details">
                <img src="./img/paris.png" alt="Paris">

            </div>
            <div class="Description">
                <p>Paris est monumentale, par sa taille bien-sûr mais aussi par son riche patrimoine architectural !
                    L'un des symboles de note Capitale, son monument le plus connu est la Tour-Eiffel, cette "Dame de
                    Fer" à l'allure unique offre une vue sans pareil à ses visiteurs.</p>
            </div>
        </div>
        <div class="Second_Block">
            <div class="Voyage_Conditions">
                <h3>A partir de 1200€</h3><br>
                <h4>NOTRE PRIX COMPREND</h4> <br><br>
                <p> -Départ de votre région.<br>
                    -Hébergement : nuits à l'hôtel en chambre double standard.<br>
                    -Repas : dîner au restaurant, petits déjeuners à l’hôtel.<br>
                    -1 Coupon repas d’une valeur de 15 € par participant.<br>
                    -Lors du trajet aller : 1 petit-déjeuner - collation (viennoiseries + 1 jus de fruit) : OFFERT.<br>
                    -La taxe de séjour.<br>
                    -Caution : APS garantie totale des fonds déposés.<br>
                    -Assurances : Annulation / Assistance / Rapatriement.</p><br><br>

                <h4>NOTRE PRIX NE COMPREND PAS</h4><br><br>
                <p> -Les dépenses de nature personnelle.<br>
                    -Les repas et boissons non mentionnés dans le programme.<br>
                    -Le supplément chambre individuelle : + 150 €.<br><br>

                    (*tarif pour les enfants de moins de 12 ans partageant la chambre de 2 adultes payants).</p>
            </div>
            <div class="buttonContainer">
                <input type="button" class="Button_Reservation" value="Rerserver">
            </div>
        </div>

    </div>
</body>

<footer>

<?php include('./Footer.php'); ?>

    
</footer>


</html>