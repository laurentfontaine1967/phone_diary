<?php

require __DIR__."/../models/contact.php";


//verifier le paylod
// on verifie que la donnee existe et queles champs ne sont pas vides
// Pour num_tel on verifie en plus que la donnee est numerique
// Pour email : on verifie en plus que la donnee est bien un email. 
           //   L'html le verifie mais cette precaution est pour le cas ou l'utilisateur
            //  modfierais l'HTML...
            function verifierPayload(array $data)
            {    
                if (!isset($data['nom']) || $data['nom'] === '')
                {
                    return "Indiquer le nom de votre contact";
                }
            
                if (!isset($data['prenom']) || $data['prenom'] === '')
                {
                    return "Indiquer le prenom de votre contact";
                }
            
                if (!isset($data['num_tel'])  || $data['num_tel'] === '' || is_numeric($data['num_tel'])===false)
                {
                    return "Indiquer le numero de telephone de votre contact -Il doit etre numerique";
                }
            
                if (!isset($data['email']) || $data['email'] === '' || filter_var($data['email'], FILTER_VALIDATE_EMAIL)===false)
                {
                    return "Indiquer un Email  valide de votre contact sous forme :exemple@gmail.com ";
                }
                
            
                return null;
            };


//convertir les donnees du POST
function ConvertirPourModification(array $data, Contacts $contact )
{
    $contact = new Contacts();
    $contact->nom = $data['nom'];
    $contact->prenom= $data['prenom'];
    $contact->num_tel = $data['num_tel'];
    $contact->email = $data['email'];
    return $contact;
}  


//ACTION
function modifierUnContact()
{
   
    if(isset($_GET["id"]) == false || $_GET["id"]=== "" )
   {   
      
       die();
   }
  
   session_start();
   If( $_SESSION["role"]= "administrateur")
   
{ 

    $contact = Contacts::retrieveById($_GET['id'], SimpleOrm::FETCH_ONE);
    
    if($contact==null)
    { 
        echo "Pas de contact a cet Id";
        die();
    }
    if (!isset($_GET['id']))
    {
        die();
    }

    $contact = Contacts::retrieveByPK($_GET['id']);

    $messageErreur = null;
    if (isset($_POST['btn-valider']))
    {
        $messageErreur = verifierPayload($_POST);
        if ($messageErreur === null)
        {
            $article = convertirPourModification($_POST,$contact);
            $article->save();
            
        }
    }
    require __DIR__."/../../views/modifier_un_contact.html.php";  
                 
}
} 







           
            
            
          
            
      

