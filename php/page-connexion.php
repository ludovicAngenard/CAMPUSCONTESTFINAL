<?php
session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <! -- lien bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css Acceuil.css -->
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
  <?php

$id=isset($_GET['id'])?$_GET['id']: 0;
Include 'classe bdd/route.php';
Include 'classe bdd/utilisateurSql.php';
$conn = new PDO("mysql:host=localhost:3308;dbname=portfoliov3",'root','');
$instance= DBConnection::getInstance();
if('POST' == $_SERVER['REQUEST_METHOD'] ) {
  if ($id == 0){
    if (!empty($_POST['name']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdpc'])){
      $nom=	htmlspecialchars($_POST['name']);
      $prenom=htmlspecialchars($_POST['prenom']);
      $email =md5(sha1(htmlspecialchars($_POST['email'])));
      $mdp=md5(sha1($_POST['mdp']));
      $mdpc=md5(sha1($_POST['mdpc']));
      if (strlen($nom)<=100 && strlen($nom)<=100 && strlen($nom)<=100){
        if ($mdp==$mdpc){
          if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $requête ="SELECT * FROM utilisateur WHERE Email_Utilisateur=:email";
            $prepare = $instance->getConnection()->prepare($requête);
            $execute = $prepare->execute(array('email'=>$email,));
            $mailExiste = $prepare->rowCount();
            if ($mailExiste==0){
              $requête = "INSERT INTO utilisateur (Nom_Utilisateur,Prenom_Utilisateur,Email_Utilisateur,MotDePasse_Utilisateur) VALUES (:nom,:prenom,:mail,:mdp)";
              $prepare = $instance->getConnection()->prepare($requête);
              $execute = $prepare->execute(array('nom'=>$nom, 'prenom'=>$prenom, 'mail'=>$email, 'mdp'=>$mdp));
              if ($execute  ==true){
                $requête ="SELECT * FROM utilisateur WHERE Email_Utilisateur=:email";
                $prepare = $instance->getConnection()->prepare($requête);
                $execute = $prepare->execute(array('email'=>$email,));
                $utilisateurInfo = $prepare->fetch();
                $_SESSION['id'] = $utilisateurInfo['idUtilisateur_Utilisateur'];
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['mail'] = $email;
                $_SESSION['mdp'] = $mdp;
                header("Location: Acceuil.php");
              }else{
                $message ="Votre compte n'a pas été créé.";
              }
            }else{
              $message = "Votre adresse E-mail existe déjà.";
            }
          }else{
            $message = "Votre E-mail est invalide !";
          }
        }else{
          $message = "Le confirmation de votre mot de passe est incorrect !";
        }
      }else{
        $message = "Votre nom, prénom et email ne doivent pas dépasser les 100 caractères chacun.";
      }
    }else{
      $message = "Tous les champs doivent être complétés.";
    }
  } else {
    if (!empty($_POST['email']) && !empty($_POST['mdp']) ){
      $email = md5(sha1(htmlspecialchars($_POST['email'])));
      $mdp = md5(sha1($_POST['mdp']));
      $requête = "SELECT * FROM utilisateur WHERE Email_Utilisateur=:email AND MotDePasse_Utilisateur=:mdp";
      $prepare = $instance->getConnection()->prepare($requête);
      $execute = $prepare->execute(array('email'=>$email, 'mdp'=>$mdp));
      $utilisateurExiste = $prepare->rowCount();
      if ( $utilisateurExiste == 1){
        $utilisateurIfo= $prepare->fetch();
        $_SESSION['id'] = $utilisateurIfo["IdUtilisateur_Utilisateur"];
        $_SESSION['nom'] = $utilisateurIfo["Nom_Utilisateur"];
        $_SESSION['prenom'] = $utilisateurIfo["Prenom_Utilisateur"];
        $_SESSION['mail'] = $utilisateurIfo["Email_Utilisateur"];
        $_SESSION['mdp'] = $utilisateurIfo["MotDePasse_Utilisateur"];
        header("Location: Acceuil.php");
      } else{
        $message = "votre adresse mail ou votre mot de passe est incorrecte";
      }
    } else {
      $message = " Tous les champs doivent être remplis !";

    }
  }
}
    ?>
  <! --haut de page -->
  <?php Include 'header.php';?>  <! --fin de haut de page -->
        <div class='FondDégradé'>  <! --div avec le fond en dégradé  -->
            <div class='NappeDeContenu'> <! --div avec le fond bleu uni -->

                <div class="separation">
                </div>
                <! --titre-->
            <div class='CentrerTexte'>
            <p class='PoliceTitre'> <?php
             if ($id == 0){
              echo "Inscription";
             } elseif($id == 1){
               echo "Connexion";
             } elseif ($id == 2){
              echo "Déconnexion";
             }?></p>
            </div>
            <div class="separation">
            </div>
              <! --div contenant le formulaire -->
            <div class='Container'> <?php
            if ( $id ==0 || $id ==1){ ?>
              <form action='' method='post'> <! --formulaire -->
                <p class='PoliceTexte'><?php $message ?></P>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-12 col-lg-3 col-form-label PoliceTexte" >Email :</label>
                  <div class="col-12 col-lg-9">
                    <input type="email" name='email'class="form-control BordureFormulaire" id="inputEmail3">
                  </div>
                </div>

                <div class="separation">
                          </div>
                <?php
                if ($id == 0){
                ?>
                <div class="form-group row">
                  <label  class="col-12 col-lg-3 col-form-label PoliceTexte">Nom :</label>
                  <div class="col">
                    <input   name='name'class="form-control BordureFormulaire" >
                  </div>
                  <label  class="col-12  col-lg-3 col-form-label CentrerTexte PoliceTexte ">Prénom : </label>
                  <div class="col">
                    <input  name='prenom'class="form-control BordureFormulaire" >
                  </div>
                </div>

                <div class="separation">
                          </div>
                <?php
                }
                ?>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-lg-3 col-form-label PoliceTexte">Mot de passe :</label>
                  <div class="col-12 col-lg-9">
                    <input type="password" name='mdp'class="form-control BordureFormulaire" id="inputPassword3" required>
                  </div>
                </div>

                <div class="separation">
                          </div>
                <?php
                if ($id ==0){
                ?>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-lg-3 col-form-label PoliceTexte ">Confirmez le mot de passe :</label>
                  <div class="col-12 col-lg-9">
                    <input type="password" name='mdpc'class="form-control BordureFormulaire" id="inputPassword3" required>
                  </div>
                </div>
                <?php
                }
                ?>
                <div class="separation">
                </div>
                <div class="form-group row">
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-10">
                    <div class="form-check">
                    <! --checkbox pour le rgpd -->
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="estValide" required>
                      <label class="form-check-label PoliceTexte" for="gridCheck1">
                        J'accepte que mes informations soient réutiliser pour me contacter et que mon nom et prénom peuvent être afficher sur le site.
                      </label>
                      <?php
                      if ($id == 0){
                      ?>
                      </br></br></br>
                      <a class="Soulignement PoliceTexte" href="page-connexion.php?id=1">Je suis déjà inscrit et je souhaite me connecter.</a>
                      <?php
                      } else {
                      ?>
                      </br></br></br>
                      <a class="Soulignement PoliceTexte"href="page-connexion.php">Je ne suis pas encore inscrit.</a>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>

                <div class="separation"></div>

                <div class="form-group row">
                  <div class="col-sm-9 CentrerTexte">
                  <! --bouton envoyer-->
                    <button type="submit" class="btn btn-primary  bouton  ">
                    <?php
                      if ($id == 0){?>
                        S'inscrire
                      <?php } else { ?>
                        Se connecter
                      <?php } ?>
                    </button>
                  </div>
                </div>
                <div>
                  <?php
                  if (!empty($message)){
                    echo $message;
                  }
                  ?>
                </div>
              </form> <! --fin du formulaire -->
  </div> <! --fin de tout le contenu relier au formulaire -->
  <?php } elseif($id == 2) {?>
    <div class='col-sm-9 CentrerTexte'>
      <p class='PoliceIntermédiaire'>
          Souhaitez vous vous déconnecter du compte <?php echo $_SESSION["prenom"].' '.$_SESSION['nom']?> ?
      </p>
      <div class="separation"></div>
    </div>
      <div class='col-sm-9'>
      <p class='PoliceTexte'>
        Si vous vous déconnectez, vous ne pourrez plus :
      </p>
      <ul class='PoliceTexte'>
        <li>Donner votre avis sur les différents projets.</li>
        <li>Laisser une Note sur les différents projets.</li>
        <li>Me Recommander sur le formulaire.</li>
      </ul>
    </div>
    <div class="separation"></div>
    <div class="col-sm-9 CentrerTexte">
      <a class="btn btn-primary CentrerTexte bouton" href="déconnexion.php"> Se déconnecter </a>
    </div>
  </div>
  <?php } ?>
  <div class="separation"></div>

            </div>   <! --fin du contenu sur fond bleu uni -->

            <div class="separation"></div>

        </div>
        <! --bas de page -->
      <?php Include 'footer.php';?>
	</body>
</html>
