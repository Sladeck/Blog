<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="../js/jquery-2.2.0.min.js"></script>
    <title>Inscription</title>
  </head>
  <body>
    <form class="inscr">
      <table>
        <tr>
          <td>
            <label for="name">Nom :</label>
          </td>
          <td>
            <input type="text" name="name" placeholder="Freddy" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="prenom">Prénom :</label>
          </td>
          <td>
            <input type="text" name="prenom" placeholder="Mercury" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="pseudo">Pseudonyme :</label>
          </td>
          <td>
            <input type="text" name="pseudo" placeholder="Fred" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Mot De Passe :</label>
          </td>
          <td>
            <input type="password" name="password" placeholder="*************" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">Email :</label>
          </td>
          <td>
            <input type="email" name="email" placeholder="Freddy.Mercury@gmail.com" required>
          </td>
        </tr>
      </table>
      <input type="checkbox" name="condition" required><label for="condition">J'accepte les termes et conditions d'utilisations</label><br>
      <input type="submit" name="valid" value="Je m'inscris !">
    </form>
    <div class="success"></div>
<script>

$(document).on('submit','.inscr', function(e){

  $.post("/user/create",$(this).serialize(),function(data){
    if(typeof(data.error) != "undefined"){
      alert(data.error);
    }else{
      var newli = 'Votre article à bien été créé, vous allez être redirigé vers l\'accueil.';
      $('.success').append(newli);

      function back(){
        history.back();
      }
      window.setTimeout(back,3000);
    }
  },'json');

  return false;
});

</script>
  </body>
</html>
