<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./csstowns.css" >
    <link rel="stylesheet" href="./NavBarStyle.css">
    <link rel="stylesheet" href="./FooterStyle.css">
    <link rel="stylesheet" href="./varGlobal.css">
</head>

<body>
<!-----NAVBAR---->
    <?php include('NavBar.php'); ?>
    <div class="Img_Opacity Marseille">
<!----FIRST BLOCK---->
        <div class="First_Block">
            <div class="Ville">
                <h1>Marseille</h1>
            </div>
            <div class="Img_Details">
                <img src="../img/marseille.png" alt="Marseille">

            </div>
            <div class="Description">
                <p>Marseille, capitale généreuse du sud de l'Europe, vous plonge immédiatement dans un bain de Provence,
                    où l'accent est chantant et le folklore populaire. ... La cité phocéenne se visite pour son Vieux
                    Port, ses quartiers renouvelés du Panier et des Docks, sa bouillabaisse et son Pastis.</p>
            </div>
        </div>
        <!----SECOND SECTION---->
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
                <input onclick="addArticlePanier()" type="button" class="Button_Reservation" value="Rerserver">
            </div>
        </div>

    </div>
</body>
<!-----FOOTER---->
<footer>

    <?php include('./Footer.php'); ?>


</footer>


</html>