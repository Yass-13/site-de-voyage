<!DOCTYPE html>
<html>

<head>
    <title>avion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styleAvion.css">
    <link rel="stylesheet" href="./NavBarStyle.css">
    <link rel="stylesheet" href="./varGlobal.css">
    <link rel="stylesheet" href="./FooterStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>

    <?php include('./NavBar.php'); ?>

    <h1 class="titre">TENTEZ VOTRE CHANCE</h1>
<!-- SPINNING PLANE -->
    <div>
    <img src="./img/avion.png" id="img" onclick="showDiv()">
    <section class="animate__animated animate__rubberBand animate__delay-1 s	;"><div id="rotate" ></div></section>
    </div>
   
<!-- WINNING PLANE    -->

    <div id="Plane">
        <h2 id="Gain"></h2><br>
        <img src="./img/avion gain.png" class="fly">
    </div>
    <div class="dib">
        <button style="display: none;" id="replay"  class="animate__animated animate__bounce button" value="Refresh Page" onClick="window.location.reload()">replay</button>
    </div>


    <script>
        // GAIN DISPLAY
        document.getElementById("img").addEventListener("click", function() {
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
        // SPINNING 
            document.getElementById("img").style.transform = "rotate(2160deg)";

        }

        function showDiv() {

            setInterval(function () { document.getElementById("Plane").style.display = "block"; }, 1000);
            setInterval(function () { document.getElementById("replay").style.display = "block"; }, 1000);


        }
    </script>

</body>

<footer>

    <?php include('./Footer.php'); ?>


</footer>

</html>