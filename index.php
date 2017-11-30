<?php include "header.php"; ?>
<!-- PARTIE INSCRIPTION + CONNEXION -->
<div class="inscriptionConnexion">
    <a href="connexion.php" class="connexion">Connexion</a>
    <a href="inscription.php">Inscription</a>
</div>
<!-- END INSCRIPTION + CONNEXION -->

<?php include "menu.php"; ?>

<!-- UNE JOURNAL -->
<div class="titleUne">
    <h2>à la une !</h2>
</div>
<article class="articleUne">
    <div class="une">
        <img src="img/christmas.jpg" alt="noel" class="imgUne">
    </div>
    <div class="textUne">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae velit metus. Aenean bibendum urna
            vel faucibus placerat. Praesent non auctor massa. Aliquam ultricies ullamcorper massa non fermentum. Duis
            varius massa et felis eleifend aliquet. Proin pulvinar tellus scelerisque tellus ultrices, eleifend sodales
            mi feugiat. Fusce in neque leo. Vivamus dignissim vulputate sodales. Nam tristique lectus non ullamcorper
            eleifend. Sed accumsan massa nec velit iaculis hendrerit. Nulla finibus urna in aliquam bibendum.
            Sed dapibus felis mi, non laoreet arcu rutrum non. Nunc et tellus commodo justo aliquam suscipit maximus in
            risus. Duis eget leo id diam facilisis cursus. In egestas erat at scelerisque faucibus.
        </p>
        <p>
            Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere. Donec dolor nibh, bibendum in dolor ac, aliquam ultrices purus. Donec varius tincidunt cursus.
            Pellentesque vestibulum cursus erat. Integer accumsan dictum diam non fringilla. Donec in mi nisi. Nulla vel
            mattis turpis.
        </p>
        <p>
            Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere. Donec dolor nibh, bibendum in dolor ac, aliquam ultrices purus. Donec varius tincidunt cursus.
            Pellentesque.
        </p>
    </div>
</article>
<!-- FIN UNE JOURNAL -->

<!-- EXTRAITS ARTICLES -->
<article class="divers" id="divers">
    <div class="img">
        <img src="img/blue.jpg" alt="divers">
        <img src="img/citrouille.jpg" alt="divers">
        <img src="img/femme.jpg" alt="divers">
        <img src="img/angry.jpg" alt="divers">
    </div>
</article>
<article class="divers">
    <div class="textDivers">
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
    </div>
</article>
<article class="divers">
    <div class="img">
        <img src="img/pizza.jpg" alt="divers">
        <img src="img/football.jpg" alt="divers">
        <img src="img/shoe.jpg" alt="divers">
        <img src="img/run.jpg" alt="divers">
    </div>
</article>
<article class="divers">
    <div class="textDivers">
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
        <p>Praesent dapibus lectus diam, ut dapibus libero finibus in. Nullam facilisis ante ac ante tristique, a faucibus
            neque posuere.
            <a href="article.php">Voir plus</a></p>
    </div>
</article>
<!-- FIN EXTRAITS ARTICLES -->

<!-- BANNIERE PUB -->
<article class="pub">
    <a href="#">
        <img src="img/pub.gif" alt="pub">
    </a>
</article>
<!-- FIN BANNIERE -->

<!-- FORMULAIRE NEWSLETTER -->
<div class="formTitle">
    <h2>Inscrivez-vous à la Newsletter !</h2>
</div>
<div class="form">
    <fieldset>
        <form action="" method="post">
            <div class="mail">
                <label for="mail">E-mail</label><input type="email" name="mail" title="mail">
            </div>
            <div class="button">
                <button type="submit" class="newsletter">Inscription</button>
            </div>
        </form>
    </fieldset>
</div>
<!-- FIN NEWSLETTER -->

<?php include "footer.php"; ?>