<?php
session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> Ludovic Angenard</title>
        <! -- lien pour avoirs des polices plus jolies sur google -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <! -- lien bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css Acceuil.css -->
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="../css/responsive.css">
	</head>
	<body>
    <! -- haut de page -->
        <?php Include 'header.php';?> <! -- fin du haut de page -->
        <! -- div contenant le fond avec le dégradé -->
        <div class='FondDégradé'>
        <! -- div contenant le fond bleu uni  -->
            <div class='NappeDeContenu'>
            <! -- ma photo plus petite description de ma personne  -->
                <div class='ContainerProche'>
                    <div class='CentrerTexte'>
                        <h2 class='PoliceTitre '>Mon Stage</h2>
                        <div class="separation"></div><! -- div permettant de créer un espace  -->
                        <p class='PoliceTexte'> Le stage se passe donc dans l'entreprise Uneek située à Nantes du 13 mai au 10 juillet.
                        L’entreprise Uneek SàRL est un éditeur de logiciel qui se focalise
                        sur le développement d’applications web sous la marque Kosmopolead.
                        Kosmopolead a donc une équipe à taille humaine et ce qui en découle
                        c’est l’ambiance de groupe décontractée et une forte cohésion d’équipe.
                        J’ai donc rejoint le service de développement informatique. Ce service
                        est constitué de cinq chercheurs développeurs informatique auquel
                        s’ajoute trois stagiaires en développement informatique dont moi.
                        </p>
                        <p class='PoliceTexte'>
                        Pour commencer, ma mission était de créer un sélecteur d’icône from scratch
                        afin que l’utilisateur puisse consulter les icônes et en sélectionner une
                        en limitant le nombre d’interactions que l’utilisateur doit effectuer. Aussi
                        lors de ce stage, je devais créer un service permettant à l’utilisateur
                        d’ajouter ses propres icônes. Enfin, il a fallu le rendre réutilisable par
                        tous les développeurs d’une part en faisant en sorte que techniquement il
                        puisse l’être et d’autre part en fournissant une documentation claire et
                        précise afin de l’installer, de l’enrichir et de le personnaliser correctement.
                        Créer un sélecteur d’icônes permet en interne de pouvoir chercher les icônes
                        identifier les tables des bases de données plus facilement et ainsi faire
                        gagner du temps aux employés. Aussi, le projet peut être réutilisé pour
                        ajouter une plus-value à une fonctionnalité existant dans un produit de la
                        marque Kosmopolead. Par exemple, permettre à l’utilisateur de pouvoir
                        envoyer des icônes dans un chat de façon intuitive.
                        </p>
                        <p class='PoliceTexte'>
                        Ensuite, est venues les différentes étapes de la construction de ma mission.
                        En commencant par le maquettage pour se mettre d'accord sur l'apparence
                        du sélecteur d'icônes. Vient ensuite la reproduction visuelle de la maquette
                        en HTML/CSS pour avoir le rendu exacte sur pc du sélecteur. Puis, l'ajout du
                        javascript pour dynamiser et rendre le tout intéractif avec l'utilisateur.
                        Ensuite, je devais utiliser et stocker les icônes Fontawesome. Ainsi, la construction
                        du sélecteur est terminée, cependant elle n'est pas testée. En effet, il fallait créer
                        une application sur ruby on rails afin de tester si le sélecteur fonctionnait correctement
                        et pour tester comment mettre le sélecteur d'icônes en Node modules. Enfin, il
                        fallait créer toute la documentation pour que le sélecteur d'icônes puisse être bien installé.
                        Néanmoins, par manque de temps, je n’ai pas pu élaborer le service qui devait accompagner
                        le sélecteur d'icônes, mais j'ai commencé les recherches pour faire gagner du temps au
                        reste de l'équipe.
                        </p>
                        <p class='PoliceTexte'>
                        Enfin, lors de ce stage, j’ai commis plusieurs erreurs qui m’ont couté
                        du temps de développement. Je pouvais être éparpillé sur différentes tâches
                        et mal organisé. En effet, la création du sélecteur d’icônes demandait la
                        réalisation de plusieurs tâches et celles-ci pouvaient évoluer au fur et à mesure
                        du développement. Cela se produisait essentiellement sur l’aspect graphique du
                        sélecteur mais cela pouvait se produire sur des comportements de celui-ci. C’est
                        pourquoi est apparu les différents modes du sélecteur avec lesquels le développeur
                        peut choisir s’il affiche les noms de sous-catégories où que le sélecteur s’efface
                        dès que l’utilisateur clic hors de celui-ci. Aussi, la mauvaise organisation s’est
                        retrouvée lors des tests visuels. Ainsi, j’aurais dû créer une liste des manipulations
                        à effectuer dès le départ et ne pas attendre l’apparition de certaines erreurs qui ont
                        fait perdre beaucoup de temps.
                        </p>
                        <p class='PoliceTexte'>
                        Pour conclure, cette première expérience professionnelle m’a beaucoup apporté aussi bien
                        techniquement que pour ma culture personnelle. Puisque mon maître de stage m’a donné
                        des informations ou des anecdotes sur des technologies qui sont bonnes à prendre et
                        permettre de comprendre pourquoi elles sont créées ainsi. J’ai passé un stage avec une
                        bonne équipe accueillante et qui n’hésitait pas à m’aider s’il le fallait et cela joue
                        énormément pour qu’un stage se déroule dans la meilleure des façons et je tenais à les
                        remercier pour ça.
                        </p>
                        <div class="separation"></div>
                        <a class="btn btn-primary bouton " href="../document divers/rapportStage.pdf" download>Télécharger le rapport complet</a>
                        <div class="separation"></div>
                    </div>

                </div>
            </div>
            <div class="separation"></div>
        </div>
        <! -- bas de page -->
        <?php Include 'footer.php'?>
	</body>
</html>