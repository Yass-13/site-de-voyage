<!DOCTYPE html>
<html>

<head>
    <title>avion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styleAvion.css">
    <link rel="stylesheet" href="./NavBarStyle.css">
  <link rel="stylesheet" href="./FooterStyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>

<?php include('./NavBar.php'); ?>

    <img src="./img/avion.png" id="img" onclick="shovDiv()">

   
     <div id="rotate" class="animate__animated animate__zoomIn animate__delay-2s"></div>
    
     


    <div id="Plane">
        <h2 id="Gain"></h2><br>
        <img src="./img/avion gain.png" class="fly">
    </div>
    <button style="display: none;" id="replay" class="animate__animated animate__zoomIn animate__delay-2s" value="Refresh Page" onClick="window.location.reload()">replay</button>
    <script>
        document.getElementById("img").addEventListener("click", function () {
            myfunction()
            showDiv()
        })

        function myfunction() {

            var myArray = [
                "20% DE REDUCTION !",
                "30% DE REDUCTION !",
                "40% DE REDUCTION !",
                "10% DE REDUCTION !",
                "CAFÉ GRATUIT !",
                "UNE VALISE !",
                "UNE NUIT OFFERTE !",
                "SURCLASSEMENT ACCES VIP !",
                "TOUR DE BATEAU OFFERT !",
                "PERDU !",
            ];

            var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

            document.getElementById("rotate").innerHTML = randomItem;
            document.getElementById("Gain").innerHTML = randomItem;
            document.getElementById("img").style.transform = "rotate(1080deg)";

        }

        function shovDiv() {
            setInterval(function () { document.getElementById("Plane").style.display = "block"; }, 2000);
            setInterval(function () { document.getElementById("replay").style.display = "block"; }, 1000);

        }
    </script>

</body>

<footer>

<?php include('./Footer.php'); ?>

    
</footer>
</html>