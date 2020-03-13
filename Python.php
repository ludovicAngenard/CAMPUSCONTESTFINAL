<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf8">
        <title> first page</title>
        <! -- lien bootstrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="Python.css">
        
        <link rel="stylesheet" href="responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Page-css-pour-le-portfolio.css">
	</head>
	<body>
    <! -- haut de page -->
    <?php Include 'header.php';?> <! -- fin du haut de page --> 


        <! -- div contenant le fond en dégradé -->
        <div class="FondDégradé">
        <! --div contenant l'affichage de mes compétences -->
            <div class='Container'>
            <! -- compétences de developpement -->
                <div id='développement'>
                    <div class='colonne'>
                        <p class='PoliceTitre PoliceTaille-3'>Développement</p>
                    </div>
                    <! -- lien menant a la section python -->
                    <a href="#titre">
                    <div class='CarréCompétences'>
                        <img src="Python.png" alt=" python" id='python' >
                    </div>
                    <a>
                    <div class='CarréCompétences'>
                        <img src="php.png" alt="php" id='php' >
                    </div>
                    <div class='CarréCompétences'>
                        <img src="html.png" alt="html" id='html5' >
                    </div>
                    <div class='CarréCompétences'>
                        <img src="css.png" alt="css" id='css3' >
                    </div>
                    <div class='CarréCompétences'>
                        <img src="sql.png" alt="sql" id='sql' >
                    </div>
                    
            </div>
                <! -- compétence d'infra -->
                <div id='infrastructure'>
                    <div class='colonne'>
                        <p class='PoliceTitre PoliceTaille-3'>Infrastructure</p>
                    </div>
                    <! -- lien menant à la section réseaux -->
                    <a href="#titrer">
                    <div class='CarréCompétences'>
                        <img src='routeur.png' alt=' routeur' id="réseaux">
                    </div>
                    </a>
                    <! -- lien menant à la section linux -->
                    <a href="#titrel">
                    <div class='CarréCompétences'>
                        <img src='linux.png' alt='logo linux' id="linux">
                    </div>
                    </a>
                    </div>
            <div class='clear'>
                </div>
                <div class="separation">
                </div>
            </div>
            <! -- cette div permet de mettre en avant le titre de la section  -->
            <div class= BanderoleTitre > 
            
                <div class=' CentrerTexte'>
                <! -- logo de la section-->
                    <img src="Python.png" alt="logo python" id='logoP' >
                    <! -- titre de la section -->
                    <h2 class='PoliceTitre '>Python</h2>
                </div>
            <div class="clear"></div>
        </div>
        <div class="separation">
        
        </div> <! -- fin de la banderole contenant le titre et le logo de la section -->

        <! -- contenu de la section python sous fond bleu uni -->
        <div class="NappeDeContenu">
        <div class="separation">
        </div>
            <h2 class='PoliceIntermédiaire PaddingGauche'>Mes projets en python:</h2>
            <div class="separation">
        </div>
            <! -- premier paragraphe -->

            <div class="ImageGauche PaddingGauche">
                <a href= 'projet.php?id=1' ><img src="Memory.png" alt="image mémory" id='mémo'></a>
            </div>
            <div class="TexteDroite PaddingDroite PoliceTexte">
            
            <! -- description du projet avec un lien menant vers la page projet qui s'adapte en fonction du projet choisit -->

                <p> Le memory: Le jeu reprend les règles simples d'un memory classique. Vous avez que deux secondes pour mémoriser l'emplacement de vingt cartes et ainsi retrouver les cartes par paire en moins de trente secondes ! Si vous êtes bon, vous pouvez gagner 4 trophées ! Le premier s'obtient quand on gagne une partie, le second quand on gagne en moins de vingt secondes, le troisième quand on gagne 
                en moins de 15 coups et enfin le quatrième quand on gagne dix parties! <a href='projet.php?id=1' class='Soulignement PoliceTexte'>En savoir plus </a></p>
            </div>
            <div class="clear"></div>

            <! -- second paragraphe-->

            <div class="ImageDroite PaddingDroite">
            <a href= 'projet.php?id=2'><img src="menu_chasse_taupe.png" alt="image chasse taupe"  id='chasse-taupe'></a>
            </div>
            <div class='TexteGauche PaddingGauche PoliceTexte'>
                <p>Le Chasse Démons: Le jeu est une variante du chasse taupe. Ici vous n'écrasez pas des taupes mais vous incarnez DIEU afin de repousser les démons hors du paradis à l'aide d'un marteau. Vous avez trente secondes pour en repousser le plus possible ! Lors de ce laps de temps, vous devrez surmonter trois phases! A chaque phase passée le jeu s'accélère et le nombre de démons augmente! Attention, lors de la dernière phase à ne pas toucher un ange. A la fin de la partie, vous devez inscrire votre pseudo et peut être que grâce a votre score il sera 
                sur le podium qui sait. <a href='projet.php?id=2' class='Soulignement PoliceTexte' >En savoir plus </a> </p>
            </div>
            <div class="clear"></div>

            <! -- troisième paragraphe -->

            <div class='ImageGauche PaddingGauche'>
            <a href= 'projet.php?id=3'><img src="menu_pac_man.png" alt="image pac man"  id='pac'></a>
            </div>
            <div class="TexteDroite PaddingDroite PoliceTexte">
                <p id=>Le Pac-Man: Le jeu est, comme son nom l'indique, une revisitation du jeu Pac-Man créé en 1980. Vous dirigez Pac-Man a l'aide des flèches directionnelles et vous devez le guider afin qu'il mange toutes les billes jaunes. Attention à ne pas vous faire attrapper par les fantômes! Cela provoquerait la fin de la partie! Au fil de la partie, vous gagnez de la monnaie fictive, des points et ainsi des niveaux pour débloquer des déguisements pour embellir votre Pac-Man! A partir du niveau huit la difficulté augmente grâce à l'ajout de quatre
                 nouveaux fantômes. <a href='projet.php?id=3' class='Soulignement PoliceTexte'>En savoir plus </a></p>
            </div>
            <div class="clear"></div>
            <! -- dernier paragraphe -->
            <div class='ImageDroite PaddingDroite'>
            <a href= 'projet.php?id=4'><img src="pfc.png" alt="image pierre feuille ciseaux"  id='pfc'></a>
            </div>
            <div class="TexteGauche PaddingGauche PoliceTexte">
                <p >Le Pierre, Feuille, Ciseaux: Le jeu est tout simplement un pierre, feuille, ciseaux avec quelques ajouts afin de pimenter les parties. Il se joue en trois manches gagnantes. Il y'a un mode facile où vous jouez contre un robot qui chosit son élément aléatoirement. Au contraire, dans le mode difficile, le robot choisit son élément en fonction de quelques règles prédéfinies. Enfin entre chaque partie, vous pouvez choisir un avatar et si vous n'en choisissez pas vous aurez 
                l'avatar anonyme. <a href='projet.php?id=4' class='Soulignement PoliceTexte'>En savoir plus </a></p>
            </div>
            <div class="clear"></div>
        </div>
    


        <div class="separation"> <! -- div séparant le contenu python et la banderole réseaux -->

        </div>
        <! -- banderole avec le logo et le titre de la section réseaux -->
        <div class= BanderoleTitre > 
            <div class='CentrerTexte'>
                <img src='routeur.png' alt=' routeur' id="routeur">
                <h2 class='PoliceTitre '>Réseaux</h2>
            </div>
            <div class="clear"></div>
        </div> <! -- fin de la banderole -->

        <div class="separation">
        </div>
        <! -- début du contenu réseaux-->
        <div class="NappeDeContenu">
            
        <! -- premier paragraphe -->
            <div class='action'>
                <p class='PoliceTexte CentrerTexte'>J'ai des aptitudes théoriques sur les adresses IPv4/v6, mac, réseaux et gateway. Mais aussi sur , les 7 couches du modèle OSI ainsi que les protocoles TCPip et UDP, la structure des paquets et les différents câblages (de la fibre multiplexée aux différentes catégories de câbles éthernet).  </p>
                <! -- image du cable  -->
            <img src='ethernet-cable.png' alt='cable ethernet' id="ethernet" class='ImageGauche'>
            <! -- image qui est mise en mouvement pour imiter un transfert de données -->
            <div><img src='chargement.png' alt='chargement' class="chargement A"></div>
            <! -- image du pc-->
            <img src='pc.png' alt='pc' class="pc ImageDroite">
            </div>
            <div class='clear'></div>

            <! -- deuxième paragraphe-->
            <div class='action'>
                <p class='PoliceTexte CentrerTexte'>J'ai pu mettre en pratique ses connaissances en créant de A à Z sur packet tracer un réseaux avec différentes vlan et différents commutateurs avec un routeur, paramétrés uniquement en lignes de commandes.</p>
                <! -- 3 images pour montrer la rapiditer de la fibre optique multiplexées -->
            <img src='fibre.png' alt='cable optique' id="fibre" class='ImageGauche'>
            <div><img src='chargement.png' alt='chargement' class="chargement B"></div>
            <img src='pc.png' alt='pc' class="pc ImageDroite">
            </div>
            <div class='clear'></div>

            <! -- troisième et dernier paragraphes de la section réseaux -->
            <div class='action'>
                <p class='PoliceTexte CentrerTexte'> J'ai pu manipuler sur des commutateurs et routeurs via putty et ainsi j'ai pu expérimenter et comprendre comment fonctionnait le matériel cisco. Par exemple comment passer outre le mot de passe d'un commutateur.</p>
                <! -- les images du derniers paragraphes -->
            <img src='hdmi.png' alt='wifi' id="wifi" class='ImageGauche'>
            <div ><img src='chargement.png' alt='chargement' class="chargement C"></div>
            <img src='pc.png' alt='pc' class="pc ImageDroite">
            </div>
            <div class='clear'></div>
            <div class="separation">
        </div>
        </div>


            <div class="separation"> <! -- séparation entre le contenu du réseaux et la banderole linux -->
            </div>

            <! -- banderole contenant le logo et le titre de la section linux -->
            <div class= BanderoleTitre > 
                <div class='CentrerTexte'>
                <img src='linux.png' alt='logo linux' class='CentrerTexte'id="logol">
                <h2 class='PoliceTitre'>Linux</h2>
            </div>
            <div class="clear"></div>

            </div>
            <div class="separation">
            </div>
            <! -- contenu de la section linux -->
            <div class="NappeDeContenu">
            <div class="separation">
            </div>
                <div class="clear"></div>
                <! -- premier paragraphe -->
                <div class="bordure vir">
                    <img src='Virtualbox.png' alt='logo virtual box' class='PaddingGauche'id="virtual">
                    
                        <p class='PoliceTexte TexteDroite PaddingDroite'> Pour installer linux il y'a plusieurs mannières possible de le faire. En effet, on peut l'installer en double boot (avoir un autre os + linux dans le meme ordinateur) en simple boot (n'avoir que linux comme os) ou en machine virtuelle (émuler linux) par exemple. La machine virtuelle m'a paru être la meilleure solution car on peut avoir plusieurs distributions sur un meme pc et on peut faire des crash test aussi.</p>
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="separation">
            </div>
                <! -- deuxième paragraphe -->
                <div class="bordure ubu">
                    <img src='Ubuntu.png' alt='logo ubuntu' class='PaddingGauche' id="ubuntu">
                    
                        <p class='PoliceTexte TexteDroite PaddingDroite'>La distribution linux ubuntu qui est une dérivé de débian m'a permi de bien débuter car on n'est pas perdu grâce à l'interface graphique mais on peut quand même gagner en liberter par rapport à windows ou mac os par exemple et s'amuser en lignes de commandes. Même si on est plus limité sur ubuntu que sur une autre distribution comme fédora ou débian, celle-ci permet de bien commencer à apprendre. </p>
                    
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="separation">
            </div>
                <! -- troisième paragraphe  -->
                <div >
                    <img src='terminal.png' alt='logo terminal' class='PaddingGauche' id="terminal">
                    
                    <p class='PoliceTexte TexteDroite PaddingDroite'>Grâce à linux, on a accès a beaucoup plus de choses car linux est open-source. Et c'est grâce au terminal que l'on peut pleinement exploiter le potentiel de linux. Créer une base de données grâce à mysql en lignes de commandes est désormais possible. </p>
                    
                    <div class="clear"></div>
            </div> 
                <div class="clear"></div>
                <div class="separation">
            </div>
            </div> <! -- fin du contenu de linux -->
            <div class="separation">
            </div>
    </div> 
    <! -- bas de pages  -->
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