<!DOCTYPE html>
<!-- GROUPE: PAPA MATAR DIOP / IBRAHIMA CISSE -->

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/formulaire.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<title> Inscription </title>
</head>
<body>

<form method="post" action="#">
	<!-- Contenu Principale -->
	<section class="contain">

		<!-- Premier Formulaire -->
		<div class="inscription inscription1">

			<!-- En-tête du formulaire -->
			<div class="header">
				<h1>Inscription</h1>
				<h3>Votre chauffeur en un clic !</h3>
				<button class="button"><p><a href="https://www.facebook.com/">Continuer avec Facebook</a></p></button>
			</div>
			<!-- Fin En-tête du formulaire -->

			<!-- Section ou / Diviseur  -->
			<div id="divider">
				<div class="divider"></div>
				<div><p>ou</p></div>
				<div class="divider"></div>
			</div>
			<!-- Fin Section ou / Diviseur  -->

			<!-- Formulaire HTML 1  -->
			<div class="form">
		     	<div class="underform">
		     		<label for="email">EMAIL</label>
		     		<br>
		       		<input type="email" name="email" class="input"/>
			    </div>
			    <br>
			   	<div class="underform">
			    	<label for="mdp">MOT DE PASSE</label>
			    	<br>
			    	<input type="password" name="mdp" class="input" id="input" />
			       	<span><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="Changeeye()"></i></span>
			    </div>
				<div class="footer">
					<div class="active" id="lien">
						<a href="#">J'ai déjà un compte</a>
					</div>
					<div class="active" id="bouton">
						<button type="button" class="button" onclick="Activationform(), Removebutton()" type="submit"><p>S'incrire</p><span><i class="fa fa-arrow-right" aria-hidden="true" id="arrow"></i></span></button>
					</div>
					
				</div>
			</div>
			<!-- Fin Formulaire HTML 1  -->

		</div>
		<!-- Fin Premier Formulaire -->

		<!-- Deuxième Formulaire -->
		<div class="inscription incription2" id="formdesactive">

			<!-- En-tête du formulaire -->
			<div class="header">
				<h1>Bienvenue</h1>
				<h3>Finalisez votre inscription en renseignant les informations manquantes</h3>
			</div>
			<!-- Fin En-tête du formulaire -->

			<!-- Formulaire HTML 2  -->
			<div class="form">

				<!-- Premier bloc du Formulaire HTML 2  -->
		     	<div class="underform form1">
		     		<div class="form-item">
		     			<label for="prenom">PRENOM</label>
			     		<br>
			       		<input type="name" name="prenom" class="input"/>
		     		</div>
		     		<div class="form-item">
		     			<label for="name">NOM</label>
			     		<br>
			       		<input type="name" name="name" class="input"/>
		     		</div>
			    </div>
			    <!-- Premier bloc du Formulaire HTML 2  -->
			    <br>
			    <!-- Deuxieme bloc du Formulaire HTML 2  -->
			   	<div class="underform">
			    	<label for="tel">TELEPHONE</label>
			    	<br>
			    	<div class="underform form2">
			    		<div class="form-item">
			    			<span class="indicateur"><img src="assets/images/senegal.png"><p>+ 221</p></span>
			    		</div>
			    		<div class="form-item">
			    			<input type="tel" name="tel" class="input tel"/>
			    		</div>
			    	</div>
			    </div>
			    <!-- Fin Deuxieme bloc du Formulaire HTML 2  -->
			    <br>
			    <!-- Troisieme bloc du Formulaire HTML 2  -->
			    <div class="underform form3">
		     		<div class="form-item">
		     			<span><i style="color: #C4C4C4; font-size: xx-large;" class="fa fa-gift" aria-hidden="true"></i></span>
			     		<p onclick="Activation()">Ajouter un compte promo</p>
		     		</div>
		     		<div class="form-item desactive">
			       		<input type="text" name="" class="input" id="desactive" />
		     		</div>
			    </div>
			    <!-- Fin Troisieme bloc du Formulaire HTML 2  -->

			    <!-- Pied de page du formulaire  -->
				<div class="footer">
					<div>
						<button type="submit" value="submit" class="button"><p>S'incrire</p><span><i class="fa fa-arrow-right" aria-hidden="true" id="arrow"></i></span> </button>
					</div>
				</div>
				<!-- Fin Pied de page du formulaire  -->

			</div>
			<!-- Fin Formulaire HTML 2  -->

		</div>
		<!-- Fin Deuxième Formulaire -->

	</section>
	<!-- Fin Contenu Principale -->
</form>





<!-- Script: Voir mot de passe/cacher mot de passe  -->
<script type="text/javascript">
	function Changeeye(){
		let classe = document.getElementById("eye");
		let entree = document.getElementById("input")
		if (classe.className == 'fa fa-eye') {
			classe.className = "fa fa-eye-slash";
			entree.type = "text";
		}
		else {
			classe.className = "fa fa-eye";
			entree.type = "password";
		}
	}
</script>
<!-- Fin Script: Voir mot de passe/cacher mot de passe  -->


<!-- Script: afficher deuxieme formulaire  -->
<script type="text/javascript">
	function Activationform(){
		let entree = document.getElementById("formdesactive");
		if (entree.style.display != "block") {
			entree.style.display = "block";
		}
	}
</script>
<!-- Script: afficher afficher deuxième formulaire  -->


<!-- Script: supprimer bouton  -->
<script type="text/javascript">
	function Removebutton(){
		let bouton = document.getElementById("bouton");
		let lien = document.getElementById("lien");
		bouton.className = "desactive";
		lien.className = "desactive";
	}
</script>
<!-- Fin Script: supprimer bouton  -->


<!-- Script: afficher input du code promo/ cacher input du code promo  -->
<script type="text/javascript">
	function Activation(){
		let entree = document.getElementById("desactive");
		if (entree.style.display != "block") {
			entree.style.display = "block";
			console.log(entree.style.display)
		}
		else{
			entree.style.display = "none";
			console.log(entree.style.display)
		}
	}
</script>
<!-- Fin Script: afficher input du code promo/ cacher input du code promo  -->

</body>
</html>
<!-- GROUPE: PAPA MATAR DIOP / IBRAHIMA CISSE -->