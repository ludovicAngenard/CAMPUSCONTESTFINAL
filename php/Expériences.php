<?php
session_start();
Include 'classe bdd/route.php';
$id=isset($_GET['id'])?$_GET['id']: 0;
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title>Ludovic Angenard</title>
        <! -- lien bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css expérience.css -->
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/Expériences.css">
        <link rel="stylesheet" href="../css/Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	</head>
	<body>
    <! --haut de page -->
    <?php Include 'header.php';?>  <! --fin de haut de page -->

        <div class='FondDégradé'>  <! --fond avec le dégradé -->


            <div class='NappeDeContenu'>  <! --fond avec le bleu uni -->

            <! --titre de la page -->
                <div class=" CentrerTexte">
                <h1 class='PoliceTitre'>Expériences Professionelles</h1>
                </div>
                <div class="separation">
                </div>
                <! --texte contenant le stage -->
                <div class='TexteGauche PaddingGauche'>
                    <h2 class='PoliceIntermédiaire'>Stagiaire développeur front-end chez UNEEK</h2> </br>
                    <p class='PoliceTexte'> Lors de ce stage, ma mission était de créer un sélecteur d'icônes qui devait s'intégrer facilement par tous les développeurs de l'entreprise dans diverses projets.
                        Pour ce faire, j'ai travaillé principalement sur le langage javascript avec sa bibliothèque jQuery et le framework Bootstrap.
                        J'ai également travaillé sur le framework Ruby on rails du langage Ruby afin de tester l'application.
                    </p>
                    <a href="descriptionExperience.php" class="PoliceTexte Soulignement"> En savoir plus !</a>
                </div>
                <! --images illustrant mes propos -->
                <div class='ImageDroite PaddingDroite '>
                    <img src='../imageSite/développement.jpg' id="front-end">
                </div>
                <div class='clear'></div>
                <! --texte contenant le premier travail  -->
                <div class='TexteGauche PaddingGauche'>
                    <h2 class='PoliceIntermédiaire'>Trieur chez ROYER</h2> </br>
                    <p class='PoliceTexte'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                         in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat c
                         upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. du travail</p>
                </div>
                <! --images illustrant mes propos -->
                <div class='ImageDroite PaddingDroite ContainerPetit'>
                    <img src='../imageSite/expéditeur.jpg' alt='expéditeur' id="expéditeur">
                    <img src='../imageSite/entrepot.jpg' alt='entrepôt' id="entrepôt">
                    <img src='../imageSite/préparateur-commande.jpg' alt='préparateur de commande' id="commande">
                </div>
                <div class='clear'></div>
                <! --deuxième travail-->
                <div  class='TexteGauche PaddingGauche'>
                    <h2 class='PoliceIntermédiaire'>Ceuilleur de tomates chez EARL DE LA DOHINIERE</h2> </br>
                    <p class='PoliceTexte'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu
                        r sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <! --une image pour illustrer  -->
                <div class='ImageDroite PaddingDroite '>
                    <img src='../imageSite/tomate.jpg' alt='rends de tomates' id="tomate">
                </div>

                <div class='clear'></div>
            </div>

            <div class="separation">
            </div>

        </div>
        <! --bas de page -->
        <?php Include 'footer.php'?>
	</body>
</html>