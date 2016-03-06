<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>bonjour</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

  <form class="articles-add">
    <label for="titre_article">Nom : </label><input type="text" name="titre_article" id="titre_article"><br><br>
    <label for="content_article">Contenu : </label><textarea name="content_article" id="content_article"></textarea><br><br>
    <input type="submit" value="Add">
  </form>

    <div class="success"></div>

<script>

$(document).on('submit','.articles-add', function(e){

  $.post("/articles/create",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var newli = 'Votre article à bien été créé, vous allez être redirigé vers l\'accueil.';
      $('.success').append(newli);
      //window.setTimeout("location=('home.php');",4000);
    }
  },'json');

  return false;
});
</script>

</body>
</html>
