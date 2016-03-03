<?php

if(isset($user)){
  foreach($user as $infos):
    $_SESSION['pseudo'] = $infos['pseudo_user'];
    $_SESSION['droit'] = $infos['droit'];
    $_SESSION['ID'] = $infos['id_user'];

  endforeach;
}else{
  ?>
  <form class="connexion">
    Nom : <input type="text" name="pseudo_user"><br><br>
    Mot de Passe : <input type="password" name="password_user"><br><br>
    <input type="submit" value="Login">
  </form>
  <?php
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="iso-8859-1">
  <title>Destinations</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

  <nav>
      <ul>
        <li><a href="/redirection/create" id="create">Créer un article</a></li>
        <li></li>
        <li></li>
      </ul>
  </nav>
  <ul class="articles_list">
  <?php foreach($articles as $titre):?>
    <li class="articles" id="article-<?php echo $titre['id_article']?>">
    <?php echo $titre["titre_article"];?>
    <a class="articles-delete" href="#" data-articleid="<?php echo $titre['id_article']?>">X</a>
    <div class="contents_articles"><?php echo $titre["contenu_article"];?></div><br>
    Commentaires : <br><br>
    <?php
    foreach ($commentaires as $contain):
      if($contain['id_article'] == $titre['id_article']){
      echo $contain['pseudo_user']; ?>
      <div class="contenu_comm">
        <?php echo $contain['contenu_comm']; ?>
      </div><br>
      <?php } endforeach; ?>
    </li><br><br>

<?php  endforeach; ?>
<script>
$(document).on('click','.articles-delete', function(e){

  var id_article = $(this).data('articleid');

  $.post('/articles/delete',{'id_article':id_article},function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var deleted_articles = data.id_article;
      $('#article-'+deleted_articles).remove();
    }
  },'json');

  e.preventDefault();
});


$(document).on('submit','.connexion', function(e){

  $.post("/user/connexion",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }

  },'json');
});

</script>

</body>
</html>
