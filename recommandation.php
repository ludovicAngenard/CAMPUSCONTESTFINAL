<?php
session_start();
Include 'route.php';
$id=isset($_GET['id'])?$_GET['id']: 0;

Include 'RecommandationSql.php';
$instance= DBConnection::getInstance();
$results=$instance->getConnection()->query("SELECT *, utilisateur.Nom_Utilisateur, utilisateur.Prenom_Utilisateur FROM recommandation INNER JOIN utilisateur ON recommandation.IdUtilisateur_Utilisateur=utilisateur.IdUtilisateur_Utilisateur",)->fetchAll(PDO::FETCH_CLASS, RecommandationSql::class);
$execute=false ;
if(isset($_SESSION) && !empty($_SESSION)){
    $message= "Vous êtes connectés";
    if('POST' == $_SERVER['REQUEST_METHOD'] ) {
        $message= "Votre message a été envoyé";
        $instance= DBConnection::getInstance();
        $query="INSERT INTO recommandation (ContenuRecommandation_recommandation,Entreprise_Recommandation,Profession_Recommandation,IdUtilisateur_Utilisateur) VALUES (:recommandation, :nomEntreprise, :nomPoste, :utilisateur)";
        $prepare= $instance->getConnection()->prepare($query);
        $execute= $prepare->execute( array ('recommandation'=>$_POST['Recommandation'], 'nomEntreprise'=>$_POST['nomEntreprise'], 'nomPoste'=>$_POST['nomPoste'], 'utilisateur'=>$_SESSION['id']));
        if ($execute ==true){
            $recommandation=new RecommandationSql($_POST);
        } else {
            echo'le message n\' a pas été ajouté.';
            error_log($prepare->errorCode());
        }
    }
} else {
    $message = "Vous n'êtes pas connecté !";
}
    ?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <! -- lien bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css recommandation.css -->
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
    <! -- haut de page -->
    <?php Include 'header.php';?><! -- fin de haut de page -->
        <! -- fond avec le dégradé -->
        <div class='FondDégradé'>
            <! -- contenu de la page recommandation sur fond bleu uni-->
            <div class='NappeDeContenu'>
                <div class="separation">
                </div>
                <! -- div contenant le formulaire -->
                <div class='ContainerProche CentrerTexte'>
                <! -- formulaire -->
                    <form action='recommandation.php' method='post'>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class='PoliceTexte'>Votre recommandation :</label>
                            <textarea class="form-control BordureFormulaire" name='Recommandation'id="exampleFormControlTextarea1" rows="5" placeholder="Vous devez vous connecter pour insérez votre recommandation ici."></textarea>
                        </div>
                        <div class="separation">
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class='PoliceTexte'>Votre Entreprise :</label>
                        <input class="form-control BordureFormulaire" name='nomEntreprise'id="exampleFormControlInput1"  placeholder="Insérez le nom de votre entreprise ici." >
                    </div>
                    <div class="separation">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class='PoliceTexte'>Votre poste :</label>
                        <input class="form-control BordureFormulaire" id="exampleFormControlInput1" name='nomPoste' placeholder="Insérez le nom de votre poste ici." >
                    </div>
                    <div class="separation">
                    </div>
                    <! -- bouton envoyer -->
                     <div>
                        <?php
                        if (!empty($message)){
                        echo '<p class="PoliceTexte">'.$message.'</p>';
                        }
                        ?>
                    </div>
                    <input class=" btn btn-primary bouton" type='submit' value='Envoyer'>

                    </form><! -- fin du formulaire -->
                </div>

                <div class="separation">
                </div>
                <! -- div contenant toutes les recommandations-->
                <div  class='Scroll Container'>
                <! -- une recommandation -->
                <?php
                foreach ($results as $key => $result)
                {?>
                    <div class='liste-avis Container '>
                        <h1 class='PoliceTexte PaddingGauche '><?php echo $result->getPrenom_Utilisateur().' '.$result->getNom_Utilisateur().' travail à '.$result->getEntreprise_Recommandation().' en tant que '.$result->getProfession_Recommandation()?></h1>
                        <p class='BordureFormulaire PaddingGauche PaddingDroite PoliceTexte'>
                            <?php echo $result->getContenuRecommandation_Recommandation()?>
                        </p>
                    </div>

                <?php } ?>

                </div>
                <div class="separation">
                </div>
            </div> <! -- fin du fond bleu uni -->
            <div class="separation">
            </div>
        </div><! -- fin du dégradé -->

        <! -- bas de page -->
        <footer>
        <div id='bas' >
            <div>
            <ul>
                <li>CONTACT:
                </li>
                <li>
                    ludovic.angenard@students.campus.academy
                </li>
                <li>
                    07 82 64 27 86
                </li>
                <li>
                    <a href='https://www.linkedin.com/in/ludovic-angenard-37743719a/' target="_blank"><img src='imageSite/Linkedin.png' alt='linkedin' id="réseausoc"></a>
                </li>
                <img src='imageSite/Campus_academy.png' alt='logo_campus'id="logoc">
            </div>
            </ul>
        </div>
    </footer>
	</body>
</html>