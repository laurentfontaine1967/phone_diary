<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>acceuil</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

</head>

<body>
  <nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark
      ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <?php

              if (isset($_SESSION['role'])) {
              ?>
                <a class="nav-link active" aria-current="page" href="/phone_diary/router.php/ajouter_un_contact?id=">ajouter</a>
              <?php
              }
              ?>
            </li>

            <li class="nav-item">
              <?php

              if (isset($_SESSION['role'])) {
              ?>
                <a class="nav-link" href="/phone_diary/router.php/modifier_un_contact?id=">modifier</a>
              <?php
              }
              ?>

            </li>
            <li class="nav-item">
              <?php

              if (isset($_SESSION['role'])) {
              ?>
                <a class="nav-link" href="/phone_diary/router.php/supprimer_un_contact?id=">supprimer</a>
              <?php
              }
              ?>

            </li>

          </ul>
        </div>
      </div>
    </nav>
  </nav>
  <div class="container ">
    <p>
    <p>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt
      ratione dolores inventore eos sit commodi, perspiciatis neque temporibus,
      quaerat magnam officia ipsam accusamus sint ducimus ad, repellat non
      pariatur.
    </p>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime deserunt
      ratione dolores inventore eos sit commodi, perspiciatis neque temporibus,
      quaerat magnam officia ipsam accusamus sint ducimus ad, repellat non
      pariatur.
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>