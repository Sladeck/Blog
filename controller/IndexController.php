<?php

class IndexController extends AbstractController{

  public function indexAction(){
    $articles = ArticlesModel::getList($this->pdo);
    $commentaires = CommentModel::getList($this->pdo);
    include("../view/home.php");
    return;
  }


}
