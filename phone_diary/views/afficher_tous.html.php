<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Afficher_tous_les_contacts</title>
    
  </head>
  <body>
  <div class="container">
    <h1 class="display-4 text-center">LISTE   DES   CONTACTS</h1>
    </div>
        <table class="table table-striped w-75 mx-auto">
            <tr>

            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>num_tel</th>
            <th>email</th>
            <th>Ajouter un contact</th>
            <th>Modifier un contact</th>
            <th>Supprimer un contact</th>   
            </tr>

            <?php
            foreach ($tableau as $element) {
            ?>

                <tr>
                    <td class="w-25"><?php echo $element->id ?></td>
                    <td><?php echo $element->nom ?> </td>                    
                    <td><?php echo $element->prenom ?></td>
                    <td><a href="telto: <?php echo $element->num_tel?>"><?php echo $element->num_tel?>"><?php echo $element->num_tel?></a></td>
                    <td> <a href="mailto: <?php echo $element->email ?>"> <?php echo $element->email ?></a> </td>
                    <!-- ajout de route vers modifier,supprimer et creer un contact -->
                    <td><a href="/Projet-blog/router.php/ajouter_un_contact?id=<?php echo $element->id ?>" class="btn btn-primary">ajouter</a></td> 
                    <td><a href="/Projet-blog/router.php/modifier_un_contact?id=<?php echo $element->id ?>" class="btn btn-warning">Modifier</a></td> 
                    <td><a href="/Projet-blog/router.php/supprimer_un_contct?id=<?php echo $element->id ?>" class="btn btn-danger">Supprimer</a></td> 
                </tr>

            <?php
            }
            ?>
 
        </table>

  </body>
</html>
