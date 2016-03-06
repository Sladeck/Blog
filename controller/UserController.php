<?php

class UserController extends AbstractController{

    public function accountAction(){
        include('../view/Account.php');
    }

  public function connectionAction(){
    if(!isset($_POST['name_user']) && !isset($_POST['password_user']))
      return json_encode(["error"=>"name_user or password_user missing"]);

    $password_user = strip_tags($_POST['password_user']);
    $password_user = htmlentities($password_user);
    $password_user = trim($password_user);
    sha1($password_user);
    $name_user = strip_tags($_POST['name_user']);
    $name_user = htmlentities($name_user);
    $name_user = trim($name_user);

    $user = UserModel::connexion($this->pdo, $name_user, $password_user);
    var_dump($user);
    return json_encode(["message"=>"Connecté !",
                        "name_user" => $name_user,
                        "password_user" => $password_user,
                        "droit_user" => $droit_user,
                        'id_user'=> $id_user
                        ]);
  }

 // public function showAction($pdo, $_SESSION){
    //if(!isset($_SESSION))
      //return json_encode(["error"=>"ID missing"]);

    //$id_user = strip_tags($_SESSION['ID']);

    //$account = UserModel::getList($this->pdo, $id_user);

    //return json_encode(["message"=>"Connecté !"]);
  //}

  public function editAction(){
    if(!isset($_POST['name']) && !isset($_POST['firstname']) && !isset($_POST['pseudo']) && !isset($_POST['mdp']) && !isset($_POST['email']) && !isset($_SESSION['id_user']))
        return json_encode(["error"=>"something is missing"]);

    $id_user = $_POST['id_user'];

    $name_user = strip_tags($_POST['name']);
    $name_user = htmlentities($name_user);
    $name_user = trim($name_user);

    $firstname_user = strip_tags($_POST['firstname']);
    $firstname_user = htmlentities($firstname_user);
    $firstname_user = trim($firstname_user);

    $pseudo_user = strip_tags($_POST['pseudo']);
    $pseudo_user = htmlentities($pseudo_user);
    $pseudo_user = trim($pseudo_user);

    $mdp_user = strip_tags($_POST['mdp']);
    $mdp_user = htmlentities($mdp_user);
    $mdp_user = trim($mdp_user);

    $email_user = strip_tags($_POST['email']);
    $email_user = htmlentities($email_user);
    $email_user = trim($email_user);

    $id_article = UserModel::update($this->pdo, $name_user, $firstname_user, $pseudo_user, $mdp_user, $email_user, $id_user);

    return json_encode(["message"=>"Connecté !",
                        "id_user"=>$id_user,
                        "name_user" => $name_user,
                        "password_user" => $password_user
                        ]);
  }

    public function deleteAction(){
      if(!isset($_SESSION['id_user']))
        return json_encode(["error"=>"id_user missing"]);
      $id_user = $_POST['id_user'];

      ArticlesModel::delete($this->pdo, $id_user);

      return json_encode(["message"=>"Supprimé !", "id_user"=>$id_user]);
    }


}
