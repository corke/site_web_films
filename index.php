<?php

$subject = "";
$name = "";
$email = "";
$message = "";
$errors=[];

$subject = filter_var(trim($_POST["subject"]), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);

if(!empty($_POST)){
    if(empty($_POST["subject"])){
        $errors["subject"]="Oula ! Pas touche aux sujets ! :)";
    }
    if(empty($_POST["name"])){
        $errors["name"]="Vous avez oubliez de saisir votre nom";
    }
    if(empty($_POST["email"])){
        $errors["email"]="Vous avez oubliez de saisir votre email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Email invalide";
    }
    if(empty($_POST["message"])){
        $errors["message"]="Vous avez oubliez de saisir votre message";
    }

    if(empty($errors)){
        //Pas d'erreur = On confirme qu'on envoie le mesage
        $confirmation = "Message bien envoyé ! Je reviens vers vous au plus vite !";

        // on envoie un mail à l'admin
        $subjectEmail = "Nouveau message de " . $email . " | Sujet : " . $subject;
        $contentEmail = "auteur: " . $name . ", email: " . $email . ", contenu :";
        $contentEmail .= $message;
        mail("scork.creation@gmail.com", $subjectEmail, $contentEmail);

        // je vide les valeurs dans les champs
        $subject = $name = $email = $message = "";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Julien-Films</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<header>
			<h1>Bienvenue sur Julien-Films</h1>
			<img id="logo" src="images/logo.png" alt="">
			<h2 id="text-introduction-home">Classement et liste des <strong>meilleurs films</strong> de Julien. <br /> Retrouvez mes critques et toutes les infos des meilleurs films que j'ai séléctionné pour vous. </h2>
		</header>

		<main>
			<!-- Bouton vers formulaire de contact-->
			<div class="">
				Bouton
			</div>
			<!-- Conteneur des meilleurs films par année -->
			<div class="films-year">
				<div class="films">
				<h2>Top films 2016</h2>
				<ul>
					<li class="film">
						<h3 class="titre_film">Warcraft</h3>
						<img class="affiche_film" src="images/warcraft.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=AG3jbSla-QY">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Le pacifique royaume d'Azeroth est au bord de la guerre alors que sa civilisation doit faire face à une redoutable race d’envahisseurs: des guerriers Orcs fuyant leur monde moribond pour en coloniser un autre. Alors qu’un portail s’ouvre pour connecter
								les deux mondes, une armée fait face à la destruction et l'autre à l'extinction. De côtés opposés, deux héros vont s’affronter et décider du sort de leur famille, de leur peuple et de leur patrie.
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Comptant plus de 100 millions de joueurs, World Of Warcraft fait partie des 10 MMORPG (Jeux de rôle massivement multi joueurs) les plus populaires du monde.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">Doctor Strange</h3>
						<img class="affiche_film" src="images/doctor_strange.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=r849NGQZqbA">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Doctor Strange suit l'histoire du Docteur Stephen Strange, talentueux neurochirurgien qui, après un tragique accident de voiture, doit mettre son égo de côté et apprendre les secrets d'un monde caché de mysticisme et de dimensions alternatives. Basé à
								New York, dans le quartier de Greenwich Village, Doctor Strange doit jouer les intermédiaires entre le monde réel et ce qui se trouve au-delà, en utlisant un vaste éventail d'aptitudes métaphysiques et d'artefacts pour protéger le Marvel Cinematic
								Universe.
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Le projet d'adapter Doctor Strange au cinéma est très ancien et date même de 1986. En 1992, il a été question que Wes Craven le réalise puis en 2001 David S. Goyer et en 2008 Guillermo del Toro.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">War Dogs</h3>
						<img class="affiche_film" src="images/wardogs.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=kmXo1Ncy0aM&list=PLxMHy9vSyBzh_pBHrSIHLEqVv5_vNJGON">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Deux copains âgés d'une vingtaine d'années vivant à Miami Beach à l'époque de la guerre en Irak, profitent d'un dispositif méconnu du gouvernement fédéral, permettant à de petites entreprises de répondre à des appels d'offres de l'armée américaine. Si
								leurs débuts sont modestes, ils ne tardent pas à empocher de grosses sommes d'argent et à mener la grande vie. Mais les deux amis sont totalement dépassés par les événements lorsqu'ils décrochent un contrat de 300 millions de dollars destiné à
								armer les soldats afghans. Car, pour honorer leurs obligations, ils doivent entrer en contact avec des individus très peu recommandables… dont certains font partie du gouvernement américain…
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Le vrai Efraim Diveroli a refusé de rencontrer Jonah Hill dans le cadre de la préparation de War Dogs. Le comédien l'a pris avec humour, affirmant que si quelqu'un était si agressif à l'idée d'être incarné par lui à l'écran, c'est que ça devait être probablement
									bon signe.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">Eddie the Eagle</h3>
						<img class="affiche_film" src="images/eddie_eagle.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=V-ab2SHMtM8">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Eddie Edwards n’a jamais rien eu d’un athlète, bien au contraire. Pourtant, depuis qu’il est petit, il n’a qu’un seul rêve : participer aux Jeux Olympiques. Au fil des années, ni son piètre niveau sportif, ni le manque de soutien, ni les moqueries n’ont entamé sa volonté. Et c’est ainsi qu’en 1988, celui qui n’a jamais lâché a réussi à se retrouver, on ne sait trop comment, aux Jeux Olympiques d’hiver de Calgary. Avec l’aide d’un entraîneur aussi atypique que lui, ce sauteur à ski pas comme les autres va secouer le monde du sport et conquérir le cœur du public en accomplissant une performance olympique aussi improbable qu’historique...
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Michael "Eddie" Edwards, surnommé "The Eagle", s'est fait un nom à la fin des années 1980 ; alors que rien ne l'y prédestinait, il a forcé son destin et été l'unique représentant de la délégation britannique aux JO de Calgary 1988. Malgré ses échecs, alors qu'il finit double dernier des compétitions auxquelles il a participé (70 et 90 mètres en saut à ski), son optimisme sans faille lui fait gagner une popularité sans précédent.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
				</ul>
			</div>
				<div class="films">
				<h2>Top films 2015</h2>
				<ul>
					<li class="film">
						<h3 class="titre_film">MAD MAX: FURY ROAD</h3>
						<img class="affiche_film" src="images/madmax.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=AG3jbSla-QY">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d'un véhicule militaire piloté par l'Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s'est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement…
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
								Environ 80% des effets visuels que l'on peut voir dans le film ont été réalisés sans trucages informatiques, avec de véritables véhicules, de vrais cascadeurs, des maquillages authentiques et bien d'autres choses... Une pratique peu courante à l'heure du développement du numérique mais que certains cinéastes comme Christopher Nolan et J.J Abrams affectionnent.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">LES HUIT SALOPARDS</h3>
						<img class="affiche_film" src="images/huit_salopards.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=r849NGQZqbA">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Quelques années après la Guerre de Sécession, le chasseur de primes John Ruth, dit Le Bourreau, fait route vers Red Rock, où il conduit sa prisonnière Daisy Domergue se faire pendre. Sur leur route, ils rencontrent le Major Marquis Warren, un ancien soldat lui aussi devenu chasseur de primes, et Chris Mannix, le nouveau shérif de Red Rock. Surpris par le blizzard, ils trouvent refuge dans une auberge au milieu des montagnes, où ils sont accueillis par quatre personnages énigmatiques : le confédéré, le mexicain, le cowboy et le court-sur-pattes. Alors que la tempête s’abat au-dessus du massif, l’auberge va abriter une série de tromperies et de trahisons. L’un de ces huit salopards n’est pas celui qu’il prétend être ; il y a fort à parier que tout le monde ne sortira pas vivant de l’auberge de Minnie…
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Dans le but de restituer au mieux les paysages neigeux de l'Ouest américain et rendre compte de l'intimité des intérieurs, Les Huit salopards a été tourné en Ultra Panavision 70mm, un format utilisé pour la dernière fois en 1966 pour le film Khartoum. Ce format nécessite des objectifs anamorphiques permettant d'obtenir une image très large comme on a pu le voir dans Les Révoltés du Bounty, Un monde fou, fou, fou, fou, La Plus grande histoire jamais contée et La Bataille des Ardennes. Pour ce, un important travail de restauration de matériel ancien a été entrepris : quinze vieux objectifs ont ainsi été trouvés (dont certains avaient servi pour la séquence de char de Ben Hur !) et il a ensuite fallu les remettre en état de marche et les adapter aux caméras actuelles
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">LES NOUVEAUX HÉROS</h3>
						<img class="affiche_film" src="images/nouveaux_heros.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=kmXo1Ncy0aM&list=PLxMHy9vSyBzh_pBHrSIHLEqVv5_vNJGON">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Un petit génie de la robotique nommé Hiro Hamada découvre qu’un complot criminel menace de détruire la ville de San Fransokyo. Avec l’aide de son plus proche ami, Baymax le robot infirmier, et de ses compagnons qu’il va transformer en une bande de superhéros high-tech, Hiro va tout faire pour sauver la ville et sa population de l’infâme Yokai…
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									San Fransokyo étant une ville immense, la production a dû créer les milliers de personnages qui y habitent. Afin de ne pas perdre de temps et d'avoir un aspect différent pour chaque habitant, l'équipe technique a inventé un programme appelé "the Denizen Factory" (l'usine à habitants). Ainsi, 670 personnages différents ont été créés, révolutionnant le monde de l'animation (le record était détenu jusqu'à maintenant par La Reine des neiges avec 270 personnages uniques).
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
					<li class="film">
						<h3 class="titre_film">Eddie the Eagle</h3>
						<img class="affiche_film" src="images/dissocies.jpg" alt="">
						<div class="infos">
							<a class="lien-ba" href="https://www.youtube.com/watch?v=V-ab2SHMtM8">Bande annonce</a>
							<div class="note">
								NOTE : 4/5
							</div>
							<h4>Synopsis et détails</h4>
							<p>
								Un matin, Lily et ben se réveillent côte à côte dans des corps qui ne sont pas les leurs. Et Magalie, une petite fille dans le corps d'un grand barbu, les attend dans la chambre d'ami. C'est le début d'une aventure rocambolesque, parfois parcours initiatique, où les corps et les identités s'inverseront au gré d'une simple accolade.
							</p>
							<h5>Secret de tournage</h5>
							<aside>
								<p>
									Les Dissociés a été écrit, produit, tourné (en trois semaines à peine) et monté par le collectif SURICATE, avec la volonté de proposer un film de qualité cinéma gratuit, pour internet. Après une tournée en salles dans 10 villes de France, le film est dévoilé en ligne sur www.youtube.com/user/GoldenMoustacheVideo à partir du 24 novembre 2015.
								</p>
							</aside>
						</div>
						<div class="ma_critique">
							<h4>Ma critique</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</main>
	<footer>
		<div id="copyright">© JULIEN-FILMS - 2017</div>

        <div id="background-bottom" class="">

        </div>

		<div class="contact-form">
			<form class="" id="confirmation" action="#confirmation" method="post">
				<p>
					<label for="subject">Sujet</label>
					<select class="" name="subject">
						<option value="info">Demande d'informations</option>
						<option value="critique">Proposition de critique</option>
						<option value="autres">Autres demandes</option>
					</select>
                    <span><?php if(isset($errors["subject"])) { echo $errors["subject"]; } ?></span>
				</p>
				<p>
					<label for="name">Nom</label>
					<input class=<?php if($_POST){if(isset($errors["name"])) { echo "error-form-input";}else{ echo "no_error-form-input" ;}} ?> type="text" name="name" value="<?php echo $name ?>" placeholder="Votre nom">
                    <span><?php if(isset($errors["name"])) { echo $errors["name"]; } ?></span>
				</p>
				<p>
					<label for="email">Email</label>
					<input class=<?php if($_POST){if(isset($errors["email"])) { echo "error-form-input";}else{ echo "no_error-form-input" ;}} ?> type="text" name="email" value="<?php echo $email ?>" placeholder="Votre email">
                    <span><?php if(isset($errors["email"])) { echo $errors["email"]; } ?></span>
				</p>
				<p>
					<label for="message">Message</label>
					<textarea class=<?php if($_POST){if(isset($errors["message"])) { echo "error-form-input";}else{ echo "no_error-form-input" ;}} ?> name="message" rows="8" cols="40" placeholder="Votre message"><?php echo $message ?></textarea>
                    <span><?php if(isset($errors["message"])) { echo $errors["message"]; } ?></span>
				</p>
				<button type="submit" name="button">Envoyer</button>
                <?php if(!empty($confirmation)) {echo '<p>' . $confirmation .'</p>';} ?>
			</form>
		</div>

	</footer>
	</div>
</body>

</html>
