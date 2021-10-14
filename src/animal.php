<?php
require('../back/AnimalManager.php');

$animals = getall();

print_r($animals);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 4 Website Example</title>
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
      <h1>Nos Animaux</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="../index.php">Home</a>
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
            <a class="nav-link" href="#">Nos Animaux</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-sm-12">
        <h1>Animals list</h1>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
            </tr>
          </thead>
          <tbody>
            <?php while($animals) : ?>
            <tr>
              <td><?php echo htmlspecialchars($animals[0]); ?></td>
              <td><?php echo htmlspecialchars($animals[2]); ?></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        </div>

      </div>
    </div>
    </div>

    <div class="jumbotron text-center" style="position: fixed;
        height: 50px;
        background-color: grey;
        bottom: 0px;
        left: 0px;
        right: 0px;
        margin-bottom: 0px;">
      <p>Animals</p>
    </div>
  </body>
</html>
