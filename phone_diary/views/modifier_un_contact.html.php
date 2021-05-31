<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>modifier_un_contact</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <div class="container">
    <h1 class="display-4 text-center">MODIFIER  UN   CONTACT </h1>
    <!-- On affiche le message d'erreur si les champs ne sont pas remplis -->
    <div class="container">
        

        <?php
        if ($messageErreur !== null) 
        {
        ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $messageErreur; ?>
            </div>

        <?php
        }
        ?>


    <form action="/phone_diary/router.php/modifier_un_contact?id=<?php echo $contact->id ?>" method="POST" enctype="multipart/form-data" >
        <div class="mb-3">
          <input type="text" class="form-control" name="nom" placeholder="Nom du contact">
    
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="prenom" placeholder="Prenom du contact">
        </div>

        <div class="mb-3">
          <input type="tel" class="form-control"name="num_tel" placeholder="Numero de telephone du contact" >
        </div>

        <div class="mb-3">
            <input type="email" class="form-control" name="email"  placeholder="Email du contact" >
          </div>
  

        <button type="submit" name="btn-valider" class="btn btn-warning">MODIFIER LE CONTACT </button>
        </form>
        
  </body>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


