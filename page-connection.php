<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <! -- lien bootstrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css Acceuil.css --> 
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
  <! --haut de page -->
  <?php Include 'header.php';?>  <! --fin de haut de page -->

        <div class='FondDégradé'>  <! --div avec le fond en dégradé  -->
            <div class='NappeDeContenu'> <! --div avec le fond bleu uni -->

                <div class="separation">
                </div>
                <! --titre-->
            <div class='CentrerTexte'>
            <p class='PoliceTitre'>Connexion</p>
            </div>  

            <div class="separation">
            </div>
            <! --div contenant le formulaire -->
            <div class='Container'>
            <form> <! --formulaire -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-12 col-lg-3 col-form-label PoliceTexte" >Email :</label>
    <div class="col-12 col-lg-9">
      <input type="email" class="form-control BordureFormulaire" id="inputEmail3">
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label  class="col-12 col-lg-3 col-form-label PoliceTexte">Nom :</label>
    <div class="col">
      <input  class="form-control BordureFormulaire" >
    </div>
    <label  class="col-12  col-lg-3 col-form-label CentrerTexte PoliceTexte ">Prénom : </label>
    <div class="col">
      <input  class="form-control BordureFormulaire" >
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-lg-3 col-form-label PoliceTexte">Mot de passe :</label>
    <div class="col-12 col-lg-9">
      <input type="password" class="form-control BordureFormulaire" id="inputPassword3" required>
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-lg-3 col-form-label PoliceTexte ">Confirmez le mot de passe :</label>
    <div class="col-12 col-lg-9">
      <input type="password" class="form-control BordureFormulaire" id="inputPassword3" required>
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="form-check">
      <! --checkbox pour le rgpd -->
        <input class="form-check-input" type="checkbox" id="gridCheck1" required>
        <label class="form-check-label PoliceTexte" for="gridCheck1">
          J'accepte que mes informations soient réutiliser pour me contacter et que mon nom et prénom peuvent être afficher sur le site.
        </label>
      </div>
    </div>
  </div>

  <div class="separation">
            </div>

  <div class="form-group row centrer">
    <div class="col-sm-9 CentrerTexte">
    <! --bouton envoyer-->
      <button type="submit" class="btn btn-primary  bouton  ">Se connecter</button>
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
