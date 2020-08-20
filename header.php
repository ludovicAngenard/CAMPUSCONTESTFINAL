<header>
            <div id="banderole">
                <div id='alignetexte'>
                    <p>Ludovic Angenard - Campus Academy </p>
                </div>
                <! -- barre de menu contenant les onglets -->
            <div id='menu2'>
                <ul id='menu'>
                <li class="menu" >
                        <?php
                        if (isset($_SESSION['id'])){?>
                            <a href="page-connexion.php?id=2"> <?php
                            echo "Se déconnecter";
                        } else {
                        ?>
                        <a href="page-connexion.php">
                        Connexion
                        <?php
                        }
                        ?></a>
                        </li>
                        <li class="menu">
                        <a href="Acceuil.php">Accueil</a>
                        </li>
                        <li class="menu ">
                            <a href="Python.php">Compétences</a>
                        </li>
                        <li class="menu ">
                            <a href='Expériences.php'>Expériences Professionnelles</a>
                        </li>
                        <li class="menu ">
                            <a href='recommandation.php'>Recommandation</a>
                        </li>
                    </ul>
            </div>
</div>
        </header>