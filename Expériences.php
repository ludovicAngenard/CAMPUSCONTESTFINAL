<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title> first page</title>
        <! -- lien bootstrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css expérience.css --> 
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="Expériences.css">
        <link rel="stylesheet" href="responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	</head>
	<body>
    <! --haut de page -->
    <?php Include 'header.php';?>  <! --fin de haut de page -->

        <div id='fond'>  <! --fond avec le dégradé -->

            <div class="separation">
            </div>

            <div id='contenu'>  <! --fond avec le bleu uni -->
                
            <! --titre de la page -->
                <div id="titre">
                <h1>Expériences Professionelles</h1>
                </div>
                <! --texte contenant le premier travail  -->
                <div id='texte'>
                    <h2>Trieur ROYER</h2> </br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                         in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat c
                         upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. du travail</p>
                </div>
                <! --images illustrant mes propos -->
                <div id='image'>
                    <img src='expéditeur.jpg' alt='expéditeur' id="expéditeur">
                    <img src='entrepot.jpg' alt='entrepôt' id="entrepôt">
                    <img src='préparateur-commande.jpg' alt='préparateur de commande' id="commande">
                </div>
                <div class='clear'></div>
                <! --deuxième travail-->
                <div id="deuxièmepartie">
                    <h2>Ceuilleur de tomates  EARL DE LA DOHINIERE</h2> </br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu
                        r sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <! --une image pour illustrer  -->
                <div id='partieimage2'>
                    <img src='tomate.jpg' alt='rends de tomates' id="tomate">
                </div>

                <div class='clear'></div>
            </div>

            <div class="separation">
            </div>

        </div>
         <! --bas de page -->
	<footer>
        <div id='bas'>
            <div>
            <ul>
                <li>
                    CONTACT:
                </li>
                <li>
                    ludovic.angenard@students.campus.academy
                </li>
                <li>
                    07 82 64 27 86
                </li>
                <li>
                    <a href='https://www.linkedin.com/in/ludovic-angenard-37743719a/' target="_blank"><img src='Linkedin.png' alt='linkedin' id="réseausoc"></a>
                </li>
                <img src='Campus_academy.png' alt='logo_campus'id="logoc">
            </div>
            </ul>
        </div>
    </footer>
	</body>
</html>