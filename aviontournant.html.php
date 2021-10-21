<!DOCTYPE html>
<html>

<head>
    <title>avion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleavion.css">
</head>

<body>

<?php 
        include('');
    ?>

    <img src="/img/avion.png" id="img" onclick="shovDiv()">

    <div id="rotate"></div>


    <div id="niketamere">
        <h2 id="zebi"></h2><br>
    </div>
    <button style="display: none;" id="replay" value="Refresh Page" onClick="window.location.reload()">replay</button>
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
            ];

            var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

            document.getElementById("rotate").innerHTML = randomItem;
            document.getElementById("zebi").innerHTML = randomItem;
            document.getElementById("img").style.transform = "rotate(1080deg)";

        }

        function shovDiv() {
            setInterval(function () { document.getElementById("niketamere").style.display = "block"; }, 1000);
            setInterval(function () { document.getElementById("replay").style.display = "block"; }, 1000);

        }
    </script>

</body>

<footer>

<?php 
        include('');
    ?>

    
</footer>
</html>