<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="iso-8859-1">
  <title>Acceuil</title>
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery.cssemoticons.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/main.css" media="screen">
  <link href="css/jquery.cssemoticons.css" rel="stylesheet" type="text/css" />
</head>
<body>


      <?php include('menu.html');?>
<div class="container">
  <div class="leftSide">

    <ul class="articles_list">
    <?php foreach($articles as $titre):?>
      <li class="articles" id="article-<?php echo $titre['id_article']?>">
      <?php echo "<span>".$titre["titre_article"]."</span>";?>
      <a class="articles-delete" href="#" data-articleid="<?php echo $titre['id_article']?>">X</a><br><br>
      <hr class="hrTitle">
      Description : <br><br>
      <div class="contents_articles"><?php echo $titre["contenu_article"];?></div><br>
      <hr class="hrComm">
      Commentaires : <br><br>
      <?php
      foreach ($commentaires as $contain):
        if($contain['id_article'] == $titre['id_article']){
        echo "Par <span id='pseudo'>".$contain['pseudo_user']."</span> | Le ".$contain['date_comm']; ?>
        <div class="contenu_comm">
          <?php echo $contain['contenu_comm']; ?>
        </div><br>
        <?php } endforeach; ?>
      </li>
    <?php  endforeach; ?>
  </ul>
  </div>
  <div class="rightSide">
    <?php

    if(isset($_SESSION['ID'])){
      echo ("Bienvenue ".$_SESSION['pseudo']." !");
    }else{
      ?>
      <form class="connexion">
        Connectez-vous !<br><br>
        <table class="connec">
          <tr>
            <td>
              <label for="pseudo_user">Pseudo :</label>
            </td>
            <td>
              <input type="text" name="name_user" placeholder="Jimmy" id="pseudo_user" required>
            </td>
          </tr>
          <tr>
            <td>
              <label for="password_user">Mot de Passe :</label>
            </td>
            <td>
              <input type="password" name="password_user" placeholder="Hendrix" id="password_user" required>
            </td>
          </tr>
        </table>
        <input type="submit" value="Login">
      </form>
      <span id="inscription">Pas de compte ? <a href="/user/inscription">Inscrivez-vous !</a></span>
      <?php
    }
     ?>
  </div>
</div>

<script>

$(document).on('click','.articles-delete', function(e){

  var id_article = $(this).data('articleid');

  $.post('/articles/delete',{'id_article':id_article},function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var deleted_articles = data.id_article;
      $('#article-'+deleted_articles).css('animation', 'fadeOutLeft 1.3s ease alternate');

      function supp(){
        $('#article-'+deleted_articles).remove();
      }

      setTimeout(supp,1300);
    }
  },'json');

  e.preventDefault();
});


$(document).on('submit','.connexion', function(e){

  $.post("/user/connection",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      alert(data.message);
      $_SESSION['pseudo'] = data.name_user;
      $_SESSION['droit'] = data.droit_user;
      $_SESSION['ID'] = data.id_user;
    }

  },'json');

    return false;
});

$('.contenu_comm').emoticonize();

</script>

</body>
</html>
