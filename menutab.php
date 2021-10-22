<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Menu de choix</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./NavBarStyle.css">
  <link rel="stylesheet" href="./FooterStyle.css">

  <script src="bootstrap.min.js"></script>
</head>

<body>

  <?php
  include('./NavBar.php');
  ?>

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <img src="./img/drapeau-france.jpg" height="200px" class="nav-link active" id="pills-france-tab" data-bs-toggle="pill" data-bs-target="#pills-france" type="button" role="tab" aria-controls="pills-france" aria-selected="true">
    </li>
    <li class="nav-item" role="presentation">
      <img src="./img/drapeau-etats-unis.jpg" height="200px" class=" nav-link" id="pills-usa-tab" data-bs-toggle="pill" data-bs-target="#pills-usa" type="button" role="tab" aria-controls="pills-usa" aria-selected="false">
    </li>
    <li class="nav-item" role="presentation">
      <img src="./img/drapeau-bresil.png" height="200px" class="nav-link" id="pills-bresil-tab" data-bs-toggle="pill" data-bs-target="#pills-bresil" type="button" role="tab" aria-controls="pills-bresil" aria-selected="false">
    </li>
    <li class="nav-item" role="presentation">
      <img src="./img/drapeau-dubai.png" height="140px" class="nav-link" id="pills-dubai-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai" type="button" role="tab" aria-controls="pills-dubai" aria-selected="false">
    </li>
  </ul>




  <div class="h">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-france" role="tabpanel" aria-labelledby="pills-france-tab">
        <p>Choissisez votre destination de rêve:</p>
        <div class="offre">
          <p>New york </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Miami </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Sao Paolo </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Rio </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Dubai </p><button>VOIR DETAILS</button>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-usa" role="tabpanel" aria-labelledby="pills-usa-tab">
        <p>Choissisez votre destination de rêve:</p>
        <div class="offre">
          <p>Marseille </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Paris </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Sao Paolo </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Rio </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Dubai </p><button>VOIR DETAILS</button>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-bresil" role="tabpanel" aria-labelledby="pills-bresil-tab">
        <p>Choissisez votre destination de rêve:</p>
        <div class="offre">
          <p>New york </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Miami </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Marseille </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Paris </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Dubai </p><button>VOIR DETAILS</button>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
        <p>Choissisez votre destination de rêve:</p>
        <div class="offre">
          <p>New york </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Miami </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Sao Paolo </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Rio </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Marseille </p><button>VOIR DETAILS</button>
        </div>
        <div class="offre">
          <p>Paris </p><button>VOIR DETAILS</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  include('./Footer.php');
  ?>
</body>


</html>