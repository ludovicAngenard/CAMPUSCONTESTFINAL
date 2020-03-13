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
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="responsive.css">
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
                    <h2 class='PoliceTitre '>Ma présentation</h2>
                    <div class="separation"><! -- div permettant de créer un espace  --> 
                </div>
                        <p class='PoliceTexte TexteDroiteEtale'>Je suis Ludovic Angenard et je suis actuellement étudiant en première année chez Campus Académie afin d'obtenir un bachelor en développement informatique et continuer sur un mastère. Je suis persévérent, j'aime apprendre et découvrir plein de nouvelles choses dans le développement et je sais apprendre de mes erreurs. 
                        </p>
            
                </div >
                <img src="matete.png"  class='BordureImage ImageGauche' id='moi' alt="Photo d'identité">
                </div>
                <div class='clear'>
                </div>
                <div class="separation"><! -- div permettant de créer un espace  --> 
                </div>
                <! -- mon cv en miniature --> 
                <div id='cv' class='CentrerTexte'> 
                    <img src="cv.png"  class='BordureImage' alt="CV">
                <div class='clear'>
                </div>
                <div class="separation">   
                </div>
                <! -- le bouton pour télécharger le cv --> 
                <a class="btn btn-primary bouton " href="" download="cv.pdf" >Télécharger</a>
                 </div>
                 <div class="separation">   
                </div>
           

           <div class= 'CentrerTexte Container'>
           <p class='PoliceTitre'>Objectifs
           </p>
           <div class="separation">
                </div>
           <p class='PoliceTexte'>Dans un premier temps, je souhaite trouver un stage en tant que développeur back/end de préférence mais je reste ouvert à d'autre proposeition. Ce stage se déroulera idéalement du 13 mai au 30 aout. Ensuite, ce stage à pour optique de déboucher sur une alternance de 2 ans minimum à 4 ans maximum. 
           </p>
           </div>
            <div class="separation">
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