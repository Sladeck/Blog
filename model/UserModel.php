<?php

class UserModel{

  public static function connexion($pdo, $name_user, $password_user){
    $q = $pdo->prepare("SELECT * FROM users WHERE pseudo_user = :name_user AND mdp_user = :password_user");
    $q->bindParam('name_user', $name_user);
    $q->bindParam('password_user', $password_user);
    $q->execute();
    $user = $q->fetchAll(PDO::FETCH_BOTH);
    return $user;
  }

  public static function create($pdo, $name, $prenom, $pseudo, $password, $mail){
    $q = $pdo->prepare("INSERT INTO `users`(`nom_user`, `prenom_user`, `pseudo_user`, `mdp_user`, `mail_user`) VALUES ( :name, :prenom, :pseudo, :password, :mail)");
    $q->bindParam('name', $name);
    $q->bindParam('prenom', $prenom);
    $q->bindParam('pseudo', $pseudo);
    $q->bindParam('password', $password);
    $q->bindParam('mail', $mail);
    $reussi = $q->execute();
    return $reussi;
  }

  public static function getList($pdo, $id_user){
    $res = $pdo->prepare("SELECT * FROM users WHERE id_user = :id_user");
    $res->bindParam('id_user', $id_user);
    $reussi = $res->execute();
    $account = [];
    foreach ($res as $row) {
      $account[] = $row;
    }
    return $account;
  }

  public static function delete($pdo, $id_user){
    $q = $pdo->prepare('DELETE FROM users WHERE id_user = :id_user');
    $q->bindParam('id_user', $id_user);
    $reussi = $q->execute();
    return $reussi;
  }

  public static function update($pdo, $name_user, $firstname_user, $pseudo_user, $mdp_user, $email_user, $id_user){
    $q = $pdo->prepare("UPDATE `users` SET `nom_user`= :name_user,`prenom_user`=:firstname_user,`pseudo_user`=:pseudo_user,`mdp_user`=:mdp_user,`mail_user`=:email_user WHERE id_user = :id_user");
    $q->bindParam('name_user', $name_user);
    $q->bindParam('firstname_user', $firstname_user);
    $q->bindParam('pseudo_user', $pseudo_user);
    $mdp_user = sha1($mdp_user);
    $q->bindParam('mdp_user', $mdp_user);
    $q->bindParam('email_user', $email_user);
    $q->bindParam('id_user', $id_user);
    $reussi = $q->execute();
    return $reussi;
  }

}
