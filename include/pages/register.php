<?php
afficheMessage();
unset($_SESSION['messages']);
?>	


	<form method="post" action="index.php?page=register.traitement" enctype="multipart/form-data"	>
	 <fieldset>
		<h2>Formulaire d'enregistrement</h2>
		
		<p>
		<label for="civil">Veuillez renseigner votre civilité </label><br />
       	<select name="civil">
			<option value="mr">M.</option>
			<option value="mme">Mme</option>
			<option value="mlle">Mlle</option>
		</select>  
		</p>
 
		<p>
	       Veuillez renseigner votre genre :<br />
	       	<div class="sexes">
				<label for="genre" class="genre">H</label>	<input type="radio" 	name="genre" 	value="ho"  /><br />
				<label for="genre" class="genre">F</label>	<input type="radio" 	name="genre" 	value="fe"  /><br />
			</div>
		</p>
		

		<br><br>
   
		<p><label for="nom">Nom: </label>				<input type="text" 		name="nom" 		placeholder="Entrez votre nom" pattern="[A-Z][a-Z]+" required /></p>
		<p><label for="prenom">Prénom: </label>			<input type="text" 		name="prenom" 	placeholder="Entrez votre prénom" required /></p>
		<p><label for="email">Email: </label>			<input type="email"		ame="email"  	required /></p>
		<p><label for="login">Login: </label>			<input type="text" 		name="login" 	required /></p>
		<p><label for="mdp">Mot de pass: </label>		<input type="password" 	name="mdp" 		required /></p>
		
		<p><label for="profil">Profil: </label><br>		<textarea name="profil"  rows="10" cols="50"></textarea></p>
		
		<p><label for="tel">Tél: </label>				<input type="tel" 		name="tel"/></p>
		<p><label for="adr">Adresse site: </label>		<input type="url" 		name="adr"/></p>
		<p><label for="pres">Présentation: </label>		<input type="text" 		name="pres"/></p>

		<p><label for="abo">Abonnement: </label>		<input type="checkbox" 	name="abo"/></p>
		<p><label for="naiss">Date naissance: </label>	<input type="date" 		name="naiss" 	min="1901-12-31"/></p>
		<p><label for="mois">Mois naissance:</label>	<input type="month" 	name="mois"  /></p>

	
  		<!-- MAX_FILE_SIZE doit précéder le champ input de type file -- ici 30M>
  														<input type="hidden" 	name="MAX_FILE_SIZE" value="30000000"/>
  									<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  		<p><label> Photo: </label>						<input type="file" 		name="userfile" /></p>		
		<p>												<input type="submit" 	value=" Envoyer "></p>
	 
 </fieldset>
</form>
 