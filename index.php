<?php
require('./back/AnimalManager.php');
$animals = getLast10();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Animals</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .fakeimg {
        height: 200px;
        background: #aaa;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron text-center" style="margin-bottom: 0">
      <h1>Les Nouveaux arrivants</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#">Home</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="src/animal.php">Nos Animaux</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 30px">
       <div class="row">
          <div class="col-sm-6">
            <h1>Animals list</h1>
            <?php foreach ($animals as $a){ ?>
              <div class="card bg-light mb-3" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($a["nom"]); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Age : <?php echo htmlspecialchars($a["age"]); ?></h6>
                    <p class="card-text">Type : <?php echo htmlspecialchars($a["type"]); ?> </p>
                    <p class="card-text">Couleur : <?php echo htmlspecialchars($a["couleur"]); ?></p>
                  </div>
              </div>
            <?php } ?>
        </div>
      </div>
    </div>


  </body>
</html>
