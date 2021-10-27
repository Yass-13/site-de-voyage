<!DOCTYPE html>

<head>
    <title>Page de contact</title>
    <link rel="stylesheet" href="./contactstyle.css">
    <link rel="stylesheet" href="./NavBarStyle.css">
    <link rel="stylesheet" href="./FooterStyle.css">
    <link rel="stylesheet" href="./varGlobal.css">
</head>

<body>
<?php include('./NavBar.php'); ?>
    

    <form>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" >
        <label for="first-name">Prenom :</label>
        <input type="text" id="first-name" name="first-name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    <div id="resume" ><button>loui</button></div>
    </form>

    <div class="button">
        <button id="bton" class="example_d" >Envoyer le message</button>
    </div>

    



    <script>

        let button = document.getElementById("bton")
        button.addEventListener("click", function () {
             
             myfunction()
             shovDiv()
             
          
        })

        function myfunction() {
            
            var nom = document.getElementById("name").value;
            var prenom = document.getElementById("first-name").value;
            var mail = document.getElementById("mail").value;
            var message = document.getElementById("msg").value;

            var resu = document.getElementById("resume");
            resu.innerHTML = nom  + "<br /> " + prenom + "<br /> "  + mail +"<br /> "  + message + "<br /> "  + "<br /> "  + "Votre message a ete envoyé !!";
        }

        function shovDiv() {
            setInterval(function () { document.getElementById("resume").style.display = "block"; }, 500);

        }

       
    </script>




</body>





<footer>
    <?php include('./Footer.php'); ?>
</footer>

</html>