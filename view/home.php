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
        <li><a href="" id="create">Créer un article</a></li>
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
    </li>

  <?php endforeach;?>
  </ul>
  <!-- A changer en mode affichage -->
  <form class="articles-add">
    Nom : <input type="text" name="titre_article"><br><br>
    Contenu : <textarea name="content_article"></textarea><br><br>
    <input type="submit" value="Add">
  </form>

<script>
$(document).on('click','.articles-delete', function(e){

  var id_article = $(this).data('articleid');

  $.post('/articles/delete',{'id_article':id_article},function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var deleted_articles = data.id_article
      $('#article-'+deleted_articles).remove();
    }
  },'json')

  e.preventDefault();
});

$(document).on('click', '#create', function(e){
  document.location.href=('createArticle.php');
});


</script>

</body>
</html>
