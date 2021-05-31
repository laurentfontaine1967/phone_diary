<?php

require __DIR__."/../models/contact.php";

function afficherTous()
{
    $tableau = Contacts::all();
    require __DIR__."/../../views/afficher_tous.html.php";
}