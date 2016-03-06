<?php

class ArticlesModel{

  public static function getList($pdo){
    $res = $pdo->query("SELECT * FROM articles");
    $articles = [];
    foreach ($res as $row) {
      $articles[] = $row;
    }
    return $articles;
  }

  public static function delete($pdo, $id_article){
    $q = $pdo->prepare('DELETE FROM articles WHERE id_article = :id_article');
    $q->bindParam('id_article',$id_article);
    $reussi = $q->execute();
    return $reussi;
  }

  public static function create($pdo, $titre_article, $content_article, $id_user){
    $q = $pdo->prepare('INSERT INTO articles SET titre_article = :titre_article, contenu_article = :content_article, id_user = :id_user');
    $q->bindParam('titre_article', $titre_article);
    $q->bindParam('content_article', $content_article);
    $q->bindParam('id_user', $id_user);
    $q->execute();
    $id_article = $pdo->lastInsertId();
    return $id_article;
  }

  public static function show($pdo, $research){
    $res = $pdo->prepare("SELECT * FROM articles WHERE titre_article LIKE '%:research%'");
    $res->bindParam('research', $research);
    $res->execute();
    $articles = [];
    foreach ($res as $row) {
      $articles[] = $row;
    }
    return $articles;
  }
}
