<?php
    include "header.php";
    include "menu.php";
?>

<div class="formTitle">
    <h2>Inscrivez-vous !</h2>
</div>

<div class="formInscription">
    <fieldset>
        <form action="" method="post">
            <div class="coordonnees">
                <label for="nom">Nom</label><input type="text" name="nom" title="nom">
                <label for="prenom">Prénom</label><input type="text" name="prenom" title="prenom">
            </div>
            <div class="date">
                <label for="birth">Date de naissance</label><input type="date" name="birth" title="birth">
            </div>
            <div class="country">
                <label for="country">Pays</label>
                <select name="country" id="country">
                    <option value="France">France</option>
                    <option value="Angleterre">Angleterre</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Belgique">Belgique</option>
                    <option value="Italie">Italie</option>
                    <option value="Serbie">Serbie</option>
                </select>
            </div>
            <div class="mail">
                <label for="mail">E-mail</label><input type="email" name="mail" title="mail">
            </div>
            <div class="mail">
                <label for="mail">Confirmation E-mail</label><input type="email" name="mail" title="mail">
            </div>
            <div class="password">
                <label for="pwd">Mot de passe</label><input type="password" name="pwd" title="pwd">
            </div>
            <div class="button">
                <button type="submit">Inscription</button>
            </div>
        </form>
    </fieldset>
</div>

<?php include "footer.php" ?>
