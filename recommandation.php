<!doctype html>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <! -- lien bootstrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css recommandation.css --> 
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="recommandation.css">
        <link rel="stylesheet" href="responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
    <! -- haut de page -->
    <?php Include 'header.php';?><! -- fin de haut de page -->

        <! -- fond avec le dégradé -->
        <div id='fond'> 

            <div class="separation">
            </div> 
            <! -- contenu de la page recommandation sur fond bleu uni-->
            <div id='contenu'>
                <div class="separation">
                </div> 
                <! -- div contenant le formulaire -->
                <div id='formulaire'>
                <! -- formulaire -->
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class='recom'>Votre recommandation :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Vous devez vous connecter pour insérez votre recommandation ici."></textarea>
                        </div>
                    </form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class='recom'>Votre Entreprise :</label>
                        <input class="form-control" id="exampleFormControlInput1"  placeholder="Insérez le nom de votre entreprise ici." >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class='recom'>Votre poste :</label>
                        <input class="form-control" id="exampleFormControlInput1"  placeholder="Insérez le nom de votre poste ici." >
                    </div>
                    <! -- bouton envoyer -->
                    <a class="btn btn-primary bouton" href="#" role="button">Envoyer</a>
                    </form><! -- fin du formulaire -->
                </div>

                <div class="separation">
                </div> 
                <! -- div contenant toutes les recommandations-->
                <div id='touteslesrecom'>
                <! -- une recommandation -->
                    <div class='liste-avis'>
                        <h1>Nom Prénom travail à Entreprise en tant que poste</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                    </div>
                </div>
                <div class="separation">
                </div> 
            </div> <! -- fin du fond bleu uni -->
            <div class="separation">
            </div> 
        </div><! -- fin du dégradé -->

        <! -- bas de page -->
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
                    <a href='https://www.linkedin.com/in/ludovic-angenard-37743719a/'><img src='Linkedin.png' alt='linkedin' id="réseausoc"></a>
                </li>
                <img src='Campus_academy.png ' target="_blank" alt='logo_campus'id="logoc">
            </div>
            </ul>
        </div>

    </footer>
	</body>
</html>