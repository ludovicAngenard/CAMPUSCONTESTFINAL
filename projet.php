<?php 
//appel le fichier fonctionphp
require 'fonction.php';
//on récuperd l'id grâce au lien
$id=isset($_GET['id'])?$_GET['id']: 0;
//on stocke le bon tableau de données suivant le projet choisit
$slide = findOneById($id);
//on stocke le nombre de photo que contient le projet dans le slide
$nb=CountNumberOfPhoto($id);
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
		<title> first page</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href='projet.css'>
		
		
	</head>
	<body>
    <! -- scripte js venant de bootstrap pour que le diaporama fonctionne -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<! -- haut de page -->
<header>
            <div id="banderole">
                <div id='alignetexte'>
                    <p>Ludovic Angenard - Campus Academy </p>
                </div>
                <! -- menu contenant les onglets -->
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
        </header> <! -- fin de haut de page -->

        <! -- fond contenant le dégradé bleu -->
<div id="fond">
<! -- titre du projet avec la banderole-->
        <div class= intercalaire > 
                <div class='titre'>
                    <h1> <?php echo $slide['titre'] ?></h1>
                </div>
        </div>
        <div class="separation">
        </div>    
        <! -- contenu de la page projet sur le fond bleu uni-->    
<div class="contenu">
<! -- div contenant le carousel -->
<div id='taille'>
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
            <div id='description'>
                <p> <?php echo $slide['description'] ?> </p>
            </div>

            <div class="separation">
            </div>
            <! -- div contenant le formulaire -->
            <div class='titre2'>
            <! -- formulaire-->
                <form>
                    <div class="form-group ">
                    <label for="exampleFormControlTextarea1"  >Votre Avis sur le projet :<?php echo $slide['titre']?> </label>
                    <textarea class="form-control col col-lg-20" id="exampleFormControlTextarea1" rows="4" placeholder="Vous devez vous connecter pour insérez votre avis ici". ></textarea>
                    </div>
                    <p class='recom'>Note :</p>
            <! -- checkbox pour les notes -->
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios0" value="option0" >
                <label class="form-check-label recom" for="exampleRadios0">
                    0
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                <label class="form-check-label recom" for="exampleRadios1">
                    1
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label recom" for="exampleRadios2">
                2
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label recom" for="exampleRadios3">
                3
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                <label class="form-check-label recom" for="exampleRadios4">
                4
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" checked>
                <label class="form-check-label recom" for="exampleRadios5">
                5
                </label>
            </div>
                    <a class="btn btn-primary btn-outline-light" href="#" role="button">Envoyer</a>
                </form><! -- fin du formulaire -->
            </div>
            <div class="separation">
            </div>
            <! --div contenant les avis -->
            <div id="contienavis">
            <! --un avis -->
            <div class='liste-avis'>
                <h1>Nom Prénom note/5</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
            </div><! --fin de l'avis avis -->
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
                    <a href='https://www.linkedin.com/in/ludovic-angenard-37743719a/' target="_blank"><img src='Linkedin.png' alt='linkedin' id="réseausoc"></a>
                </li>
                <img src='Campus_academy.png' alt='logo_campus'id="logoc">
            </div>
            </ul>
        </div>
    </footer>
	</body>
</html>