<?php

require __DIR__."/../models/contact.php";

function supprimerUnContact()

{    session_start();
    If( $_SESSION["role"]=="administrateur"){

 
    
    
    //on verifie que la valeur existe et n es pas vide 
    // si vide ou  existe pas 
    if(isset($_GET["id"]) == false || $_GET["id"]=== "" )
   {   
       //on arrete
       die();
   }
   //on va verifier si un contact existe a l'id renseignee
    $contact = Contacts::retrieveById($_GET['id'], SimpleOrm::FETCH_ONE);
    //si pas de contact a l'id selectionnee
    if($contact==null)
    { 
        //alors vide j 'arrete
        die();
    }
        //sinon je supprime l'entree  en bdd correspondante a l'id 
       echo "le contact a ete supprime";
       $contact->delete();

    }

 }
    