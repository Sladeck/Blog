<?php

class ArticlesController extends AbstractController{

    public function redirectionAction(){
        include('../view/createArticle.php');
    }

  public function createAction(){
    if(!isset($_POST['titre_article']))
      return json_encode(["error"=>"titre_article missing"]);

    //$id_user = $_SESSION['id_user'];
    $id_user = 1; //Ligne à supprimer quand la connexion fonctionnera !

    $titre_article = strip_tags($_POST['titre_article']);
    $titre_article = htmlentities($titre_article);
    $titre_article = trim($titre_article);

    $content_article = strip_tags($_POST['content_article']);
    $content_article = htmlentities($content_article);
    $content_article = trim($content_article);

    $id_article = ArticlesModel::create($this->pdo, $titre_article, $content_article, $id_user);

    return json_encode(["message"=>"Créé !",
                        "titre_article" => $titre_article,
                        "content_article" => $content_article
                        ]);

  }
  
  public function showAction(){
    return json_encode(["error"=>"not implemented"]);

    $research = strip_tags($_POST['search']);
    $research = htmlentities($research);
    $research = trim($research);

    $research = ArticlesModel::show($this->pdo, $research);

    return json_encode(["message"=>"Trouver",
                        "recherche"=>$research]);
  }

  public function updateAction(){
    return json_encode(["error"=>"not implemented"]);
  }

  public function deleteAction(){
    if(!isset($_POST['id_article']))
      return json_encode(["error"=>"id_article missing"]);
    $id_article = $_POST['id_article'];

    ArticlesModel::delete($this->pdo, $id_article);

    return json_encode(["message"=>"Supprimé !", "id_article"=>$id_article]);
  }

}
