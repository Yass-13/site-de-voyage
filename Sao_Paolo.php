<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cssJ.css" rel="stylesheet">
    <link rel="stylesheet" href="./NavBarStyle.css">
    <link rel="stylesheet" href="./FooterStyle.css">
    <title>Sao Paolo</title>
</head>

<body>
<?php 
        include('NavBar.html');
    ?>


    <div class="Img_Opacity Sao_Paolo">

        <div class="First_Block">
            <div class="Ville">
                <h1>Sao Paolo</h1>
            </div>
            <div class="Img_Details">
                <img src="/img/sao_paolo.png" alt="Sao Paolo">

            </div>
            <div class="Description">
                <p>Laissez-les vous montrer leurs lieux favoris, et vous finirez par comprendre. Les cinémas d’art et
                    d’essai et les théâtres expérimentaux abondent. Les amateurs de bonne chère apprécieront le charme
                    des bistrots et des restaurants gastronomiques qui classent Sao Paulo parmi les hauts lieux de la
                    cuisine mondiale. Les fêtards embarqueront pour une virée interminable dans les bars underground et
                    les discothèques. Quelles que soient vos envies, Sampa (surnom de la ville) devrait pouvoir les
                    satisfaire.</p>
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

<?php 
        include('Footer.html');
    ?>

    
</footer>

</html>