<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>bonjour</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/createArticle.css" media="screen" charset="utf-8">
</head>
<body>

    <?php include('menu.html');?>

  <form class="articles-add">
    <label for="titre_article">Nom : </label><input type="text" name="titre_article" id="titre_article"><br><br>
    <label for="content_article">Contenu : </label><textarea name="content_article" id="content_article"></textarea><br><br>
    <input type="submit" value="Add" name="valid">
  </form>
      <table class="tab-article">
    <tr>
       <td><label for="titre_article">Nom: </label></td>
       <td><input type="text" name="titre_article" id="titre_article"></td>
    </tr>

    <tr>
       <td><label for="content_article">Contenu : </label></td>
       <td><textarea name="content_article" id="content_article"></textarea></td>
    </tr>
      </table>
         <input type="submit" value="Créer">
      <div class="success"></div>
    </form>

<script>

$(document).on('submit','.articles-add', function(e){

  $.post("/articles/create",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var newli = 'Votre article à bien été créé, vous allez être redirigé vers l\'accueil.';
      $('.success').append(newli);

      function back(){
        history.back();
      }
      window.setTimeout(back,3000);

      var newli = 'Votre article a bien été créé, vous allez être redirigé(e) vers l\'accueil.';
      $('.success').append(newli).css({marginTop:'20px',marginLeft:'60px'});
      //window.setTimeout("location=('home.php');",4000);

    }
  },'json');

  return false;
});

</script>

</body>
</html>
