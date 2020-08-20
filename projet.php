<?php
session_start();
Include 'route.php';
Include 'ProjetSql.php';
Include 'AvisSql.php';
//appel le fichier fonctionphp
Include 'fonction.php';
//on récuperd l'id grâce au lien
$id=isset($_GET['id'])?$_GET['id']: 0;
//on stocke le bon tableau de données suivant le projet choisit
$slide = findOneById($id);
//on stocke le nombre de photo que contient le projet dans le slide
$nb=CountNumberOfPhoto($id);

$instance= DBConnection::getInstance();
$results=$instance->getConnection()->query("SELECT * FROM projet ",)->fetchAll(PDO::FETCH_CLASS, ProjetSql::class);
foreach ($results as $key => $result) {
    if ($result->getIdProjet_Projet()==$slide['id'] ) {
        $idProjet = $result->getIdProjet_Projet();
    }
}
if('POST' == $_SERVER['REQUEST_METHOD'] && verifieIdentification() == true){
    $instance= DBConnection::getInstance();
    $query="INSERT INTO avis (ContenuAvis_AVIS,Note_AVIS,IdUtilisateur_Utilisateur,IdProjet_Projet) VALUES (:avis, :note, :utilisateur, :projet)";
    $prepare= $instance->getConnection()->prepare($query);
    $execute= $prepare->execute( array ('projet'=>$idProjet, 'note'=>$_POST['note'], 'avis'=>$_POST['avis'], "utilisateur"=>$_SESSION['id']));
    if ($execute ==true){
        $avis=new AvisSql($_POST);
    }else{
        echo 'Voici le numéro de l erreur : '.error_log($instance->errorInfo());
    }
}
$results=$instance->getConnection()->query("SELECT *, utilisateur.Nom_Utilisateur, utilisateur.Prenom_Utilisateur FROM avis INNER JOIN projet on projet.IdProjet_Projet = avis.IdProjet_Projet INNER JOIN utilisateur ON avis.IdUtilisateur_Utilisateur=utilisateur.IdUtilisateur_Utilisateur WHERE avis.IdProjet_Projet=$idProjet",)->fetchAll(PDO::FETCH_CLASS, AvisSql::class);
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title> first page</title>

        <! -- lien bootstrap -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <! -- lien avec le fichier css projet.css -->
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="Page-css-pour-le-portfolio.css">
        <link rel="stylesheet" href="responsive.css">
	</head>
	<body>
    <! -- scripte js venant de bootstrap pour que le diaporama fonctionne -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <! -- haut de page -->
<?php Include 'header.php';?><! -- fin de haut de page -->

        <! -- fond contenant le dégradé bleu -->
<div class="FondDégradé">
<! -- titre du projet avec la banderole-->
        <div class= BanderoleTitre >
                <div class='CentrerTexte'>
                    <h2 class='PoliceTitre'> <?php echo $slide['titre'] ?></h2>
                </div>
        </div>
        <div class="separation">
        </div>
        <! -- contenu de la page projet sur le fond bleu uni-->
<div class="NappeDeContenu">
<div class="separation">
        </div>
<! -- div contenant le carousel -->
<div class='ContainerProche'>
<! -- carousel bootstrap-->
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">

		<div class="carousel-item active">
        <! -- prmière image du projet -->
			<img src="image_slide/<?php echo $slide['image']['photo1'];?>.png" class="d-block w-100" alt="<?php echo $slide['photo1'];?>">
		</div>
		<! -- affuchage des autres images selon leur nombre  -->
		<?php for ($i = 2; $i <= $nb; $i++) {?>
		<div class="carousel-item ">
		<img src="image_slide/<?php echo $slide['image']['photo'.$i];?>.png" class="d-block w-100" alt="<?php echo $slide['photo'.$i];?>">
		</div>
		<?php } ?>

	</div>
    </div><! -- fin du carousel -->

    <div class="separation">
    </div>

</div><! -- fin de la div contenant carousel -->
            <! -- description du projet  -->
            <div class='CentrerTexte Container'>
                <p class='PoliceTexte'> <?php echo $slide['description'] ?> </p>
            </div>

            <div class="separation">
            </div>
            <! -- div contenant le formulaire -->
            <div class='CentrerTexte ContainerProche'>
            <! -- formulaire-->
                <form method='post'>
                    <div class="form-group ">
                    <label for="exampleFormControlTextarea1" class='PoliceTexte' >Votre Avis sur le projet :<?php echo $slide['titre']?> </label>
                    <textarea class="form-control BordureFormulaire col col-lg-20" name='avis' id="exampleFormControlTextarea1" rows="4" placeholder="Vous devez vous connecter pour insérez votre avis ici". ></textarea>
                    </div>
                    <div class="separation">
                    </div>
                    <p class='PoliceTexte'>Note :</p>
            <! -- checkbox pour les notes -->
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios0" value="0" >
                <label class="form-check-label PoliceTexte" for="exampleRadios0">
                    0
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios1" value="1" >
                <label class="form-check-label PoliceTexte" for="exampleRadios1">
                    1
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios2" value="2">
                <label class="form-check-label PoliceTexte" for="exampleRadios2">
                2
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios3" value="3">
                <label class="form-check-label PoliceTexte" for="exampleRadios3">
                3
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios4" value="4">
                <label class="form-check-label PoliceTexte" for="exampleRadios4">
                4
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="note" id="exampleRadios5" value="5" checked>
                <label class="form-check-label PoliceTexte" for="exampleRadios5">
                5
                </label>
            </div>
            <div class="separation">
            </div>
                    <input class=" btn bouton" type='submit' value='Envoyer'>

                </form><! -- fin du formulaire -->
            </div>
            <div class="separation">
            </div>
            <! --div contenant les avis -->
            <div  class='Scroll Container'>
            <! --un avis -->
            <! -- une recommandation -->
                <?php
                foreach ($results as $key => $result)
                {?>
                    <div class='liste-avis Container '>
                        <h1 class='PoliceTexte PaddingGauche '><?php echo $result->getPrenom_Utilisateur().' '.$result->getNom_Utilisateur().' '.$result->getNote_AVIS().'/5'?></h1>
                        <p class='BordureFormulaire PaddingGauche PaddingDroite PoliceTexte'>
                            <?php echo $result->getContenuAvis_AVIS()?>
                        </p>
                    </div>
                <?php }
                ?>
            </div>

            <div class="separation">
            </div>

        </div><! --fin du contenu sur fond bleu uni -->
        <div class="separation">
        </div>
</div>
<! --Bas de pages -->
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