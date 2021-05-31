<?php

// Connexion à la base de données
include __DIR__.'/SimpleOrm.class.php';
$conn = new mysqli('localhost', 'root', '');
SimpleOrm::useConnection($conn,'repertoire_telephonique');



// Déclaration des routes
if (isset($_SERVER['PATH_INFO']) == false) 
{
   die();

} else if ($_SERVER['PATH_INFO'] =='/acceuil')

{
    require __DIR__."/src/controllers/acceuil.php";
   
}else if ($_SERVER['PATH_INFO'] =='/afficher-tous-les-contacts')

{
    require __DIR__."/src/controllers/afficher_tous.php";
    afficherTous();

}else if ($_SERVER['PATH_INFO'] =='/ajouter_un_contact')

{
    require __DIR__."/src/controllers/ajouter_un_contact.php";
    AjouterUnContact();

}else if ($_SERVER['PATH_INFO'] =='/modifier_un_contact')

{
    require __DIR__."/src/controllers/modifier_un_contact.php";
    modifierUnContact();

}else if ($_SERVER['PATH_INFO'] =='/supprimer_un_contact')

{
    require __DIR__."/src/controllers/supprimer_un_contact.php";
    supprimerUnContact();

}else if ($_SERVER['PATH_INFO'] =='/connexion')

{
    require __DIR__."/src/controllers/connexion.php";
    authentifier();
}

