<?php
 
//verif des inputs 
function verifierPayload(array $data)
{    
    if (!isset($data['identifiant']) || $data['identifiant'] === '')
    {
        return "Indiquer votre identifiant";
    }

    if (!isset($data['password']) || $data['password'] === '')
    {
        return "Indiquer votre mot de passe";
    }

    return null;
}

//ACTION
function authentifier()
{

  $messageErreur = null;
  if (isset($_POST['btn-valider'])){


      $messageErreur = verifierPayload($_POST);
      
      
      if ($messageErreur === null)
      {
        $iden= "Laurent";
        $pass="1234";
      if ( $_POST['identifiant']=== $iden && $_POST['password']=== $pass )
         {
           echo "Vous etes authentifies";
           session_start();
           setcookie("administrateur",time()+360,"/");
           $_SESSION["role"]= "administrateur";
          }
          else {$messageErreur="Vos identifiants sont incorrects";
              
              
          }
         
      }
  }
  require __DIR__."/../../views/connexion.html.php";





}