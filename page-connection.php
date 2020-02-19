<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="page-connection.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
  <! --haut de page -->
  <header>
            <div id="banderole">
                <div id='alignetexte'>
                    <p>Ludovic Angenard - Campus Academy </p>
                </div>
                <! -- barre du menu contenant les onglets -->
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
        </header>  <! --fin de haut de page -->

        <div id='fond'>  <! --div avec le fond en dégradé  -->
            <div id='contenu'> <! --div avec le fond bleu uni -->

                <div class="separation">
                </div>
                <! --titre-->
            <div id='haut'>
            <p id='co'>Connexion</p>
            </div>  

            <div class="separation">
            </div>
            <! --div contenant le formulaire -->
            <div id='formulaire'>
            <form> <! --formulaire -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label  class="col-2 col-form-label">Nom :</label>
    <div class="col">
      <input  class="form-control" >
    </div>
    <label  class="col col-form-label prenom">Prénom : </label>
    <div class="col">
      <input  class="form-control" >
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe :</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmez le mot de passe :</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="form-check">
      <! --checkbox pour le rgpd -->
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          J'accepete que mes informations soient réutiliser pour me contacter et que mon nom et prénom peuvent être afficher sur le site.
        </label>
      </div>
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row centrer">
    <div class="col-sm-10 centrer">
    <! --bouton envoyer-->
      <button type="submit" class="btn btn btn-primary btn-outline-light ">Se connecter</button>
    </div>
  </div>
</form> <! --fin du formulaire -->
</div>  

<div class="separation">
</div>

            </div>   <! --fin du contenu sur fond bleu uni -->

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
