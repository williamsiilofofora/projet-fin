<?php
include('haut.php');
include('menuHaut.php');
?>

<body id="communaute">
    <div id ="contComm">
        <h1>Rejoingnez le forum d'entraide de No Man's Sky</h1>
        <div id="registration">
<h2>Crée un compte</h2>
<div class="contForm">
<form id="RegisterUserForm" action="" method="post">
<fieldset>
<label for="name">Nom</label> <input class="text" id="name" type="text" name="name" value="" />
<label for="prenom">Prénom</label> <input class="text" id="prenom" type="textl" name="prenom" value="" />
<label for="email">E-mail</label> <input class="text" id="email" type="email" name="email" value="" />
<label for="emailVerif">Verification E-mail</label> <input class="text" id="emailVerif" type="email" name="emailVerif" value="" />
<label for="password">Mot de passe</label> <input class="text" id="password" type="password" name="password" />
<label for="passwordVerif">Verification mot de passe</label> <input class="text" id="passwordVerif" type="password" name="passwordVerif" />
<input type="checkbox" name="check">
<label for="acceptTerms" id="term"> I agree to the <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a> </label>

<button id="registerNew" type="submit" for="switch" class="button">S'enregister</button></fieldset>
</form>
</div>
    </div>
<!--adresse wiki:https://nomanssky.fandom.com/fr/wiki/Accueil-->


</body>










<?php
include('footer.php');
?>
</html>