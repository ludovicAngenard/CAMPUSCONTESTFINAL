<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> Ludovic Angenard</title>
        <! -- lien bootstrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css Acceuil.css --> 
        <link rel="stylesheet" href="Acceuil.css">
        <! -- lien pour avoirs des polices plus jolies sur google --> 
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
    <! -- haut de page --> 
        <header> 
            <div id="banderole">
                <div id='alignetexte'>
                    <p>Ludovic Angenard - Campus Academy </p>
                </div>
                <! -- barre de menu contenant les onglets --> 
            <div id='menu2'>
                <ul id='menu'>
                <li class="menu">
                        <a href="page-connection.php">Connexion</a> 
                        </li>
                        <li class="menu">
                        <a href="Acceuil.php">Acceuil</a> 
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
        </header> <! -- fin du haut de page --> 
        <! -- div contenant le fond avec le dégradé --> 
        <div id='fond'>
        <! -- div contenant le fond bleu uni  --> 
            <div id='contenu'>
            <! -- ma photo plus petite description de ma personne  --> 
                <div id='photopres'>
                <div id='présentation'>
                    <h2>Ma présentation</h2>
                        <p>Je suis Ludovic Angenard et je suis actuellement étudiant en première année chez Campus Académie afin d'obtenir un bachelor en développement informatique et continuer sur un mastère. Je suis persévérent, j'aime apprendre et découvrir plein de nouvelles choses dans le développement et je sais apprendre de mes erreurs. 
                        </p>
            
                </div >
                <img src="matete.png" alt="Photo d'identité">
                </div>
                <div class="separation"><! -- div permettant de créer un espace  --> 
                </div>
                <! -- mon cv en miniature --> 
                <div id='cv'> <img src="cv.png"  alt="CV">
                <div class='clear'>
                </div>
                <! -- le bouton pour télécharger le cv --> 
                <a class="btn btn-primary btn-outline-light" href="" download="cv.pdf" >Télécharger</a>
                 </div>
                 <div class="separation">
                     
            </div>
           

           <div id='objectif'>
           <p>Objectifs<p>
           <p>Dans un premier temps, je souhaite trouver un stage en tant que développeur back/end de préférence mais je reste ouvert à d'autre proposeition. Ce stage se déroulera idéalement du 13 mai au 30 aout. Ensuite, ce stage à pour optique de déboucher sur une alternance de 2 ans minimum à 4 ans maximum. 
           </div>
            <div class="separation">
                </div>
           

            </div>
            
            <div class="separation">
            </div>   
            
        </div>
        <! -- bas de page -->
	<footer>
        <div id='bas'>
            <div>
            <! -- affichage de mes coordonnées et d'un lien vers mon linkedin-->
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