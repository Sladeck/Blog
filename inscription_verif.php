<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$errors = array();
$isFormGood = true;

if(!empty($_POST))
{
  if(!isset($_POST['nom']) || is_numeric($_POST['nom']) || (strlen($_POST['nom']) < 1))
  {
      $errors['nom'] = 'Votre nom doit contenir au moins un caractère';
      $isFormGood = false;
  }
  if(!isset($_POST['prenom']) || is_numeric($_POST['prenom']) || (strlen($_POST['prenom']) < 1))
  {
      $errors['prenom'] = 'Votre prénom doit contenir au moins un caractère';
      $isFormGood = false;
  }
  if(!isset($_POST['pseudo']) || (strlen($_POST['pseudo']) < 4) || is_numeric($_POST['pseudo']))
  {
      $errors['pseudo'] = 'Veuillez saisir un pseudo de 4 caractères minimum';
      $isFormGood = false;
  }
  if(!isset($_POST['pwd']) || strlen($_POST['pwd']) < 6)
  {
      $errors['pwd'] = 'Veuillez saisir un mot de passe de 6 caractères minimum';
      $isFormGood = false;
  }
  if(!isset($_POST['pwd2']) || ($_POST['pwd2'] != $_POST['pwd']))
  {
      $errors['pwd2'] = 'Veuillez saisir une vérification similaire au mot de passe';
      $isFormGood = false;
  }


  if(!$isFormGood)
  {
      http_response_code(400);
      echo(json_encode(array('success'=>false, "errors"=>$errors)));
  }
  else
  {
      $_POST['pwd'] = sha1($_POST['pwd']);
      unset($_POST['pwd2']);
      echo(json_encode(array('success'=>true, "user"=>$_POST)));
  }
}
else
{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}
