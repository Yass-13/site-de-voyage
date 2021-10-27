<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de Navigation</title>
    <link rel="stylesheet" href="./NavBarStyle.css">
    <link rel="stylesheet" href="./varGlobal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="containerNavBar DflexCenter">
        <div class="logo DflexCenter">
            <a class="logolink" href="./menutab.php">
                <img src="./img/LogoNavBar.png">
            </a>
                <h1 class="logoTitle">smooth flight</h1>
        </div>
        <div class="ButtonsNav" id="menuBurger">
            <a href="javascript:void(0);" class="iconBurger" onclick="burgerFunction()">
                <i class="bi bi-list"></i></a>
            <a href="./aviontournant.php" class="linkBtn">Roue</a>
            <a href="./contact.php" class="linkBtn">Contact</a>
            <div class="panier" >
                <a href="#" class="linkBtn" id="panierArticle">Panier<i class="bi bi-cart4 panierIcon"></i></a>
            </div>

        </div>
    </div>
    <script>
        function burgerFunction() {
            var x = document.getElementById("menuBurger");
            if (x.className === "ButtonsNav") {
                x.className += " responsive";
            } else {
                x.className = "ButtonsNav";
            }
        }
        function addArticlePanier() {
            var x = document.getElementById("panierArticle");
            if (x.className === "linkBtn") {
                x.className += " addArticle";
            } else {
                x.className = "linkBtn";
            }
        }
    </script>
</body>

</html>