<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <title>Connexion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/account.css" media="screen" charset="utf-8">
</head>
<body>
    
    <?php include('menu.html');?>
    
       
<form class="my-form">
    <?php foreach($account as $profil):?>
    <table class="tab">
        <tr>
            <td><label for="name">Nom: </label></td>
            <td><input type="text" name="name" id="name" value="<?php echo $profil['nom_user']?>"></td>
        </tr>
    
        <tr>
            <td><label for="firstname">Prénom: </label></td>
            <td><input type="text" name="firstname" id="firstname" value="<?php echo $profil['prenom_user']?>"></td>
        </tr>
    
        <tr>
            <td><label for="pseudo">Pseudo: </label></td>
            <td><input type="text" name="pseudo" id="pseudo" value="<?php echo $profil['pseudo_user']?>"></td>
        </tr>
    
        <tr>
            <td><label for="email">Email: </label></td>
            <td><input type="text" name="email" id="email" value="<?php echo $profil['mail_user']?>"></td>
        </tr>
        
    </table>
    <?php  endforeach; ?>
    <input type="submit" value="Modifier">
    
</form>


</body>
</html>
