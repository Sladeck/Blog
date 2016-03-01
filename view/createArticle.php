<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="iso-8859-1">
  <title>Destinations</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

  <form class="articles-add">
    Nom : <input type="text" name="titre_article"><br><br>
    Contenu : <textarea name="content_article"></textarea><br><br>
    <input type="submit" value="Add">
  </form>

<script>

$(document).on('submit','.articles-add', function(e){

  $.post("/articles/create",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var newli = $('Votre article à bien été créé, vous allez être redirigé vers l\'accueil.');
      $('.articles_list').append(newli);
      window.setTimeout("location=('home.php');",4000);
    }
  },'json');

  return false;
});
</script>

</body>
</html>
