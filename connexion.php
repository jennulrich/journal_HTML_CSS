<?php
    include "header.php";
    include "menu.php";
?>

<div class="formTitle">
    <h2>Connectez-vous !</h2>
</div>

<div class="formInscription">
    <fieldset>
        <form action="" method="post">
            <div class="mail">
                <label for="mail">E-mail</label><input type="email" name="mail" title="mail">
            </div>
            <div class="password">
                <label for="pwd">Mot de passe</label><input type="password" name="pwd" title="pwd">
            </div>
            <div class="button">
                <button type="submit">Connexion</button>
            </div>
        </form>
    </fieldset>
</div>

<?php include "footer.php" ?>


