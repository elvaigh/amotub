<?php

// On démarre la session AVANT d'écrire du code HTML
session_start();
$_SESSION['connexionErreur']=false;
$_SESSION['inscptionErreur']=false;
setcookie('pseudo', 'mdp', time() + 365*24*3600, null, null, false, true); 
include_once("./header.php");
if(isset($_POST['pseudo'])&&isset($_POST['mdp'])&&$_POST['mdp']!=NULL &&$_POST['pseudo']!=NULL){
	  try{
			$bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','bacenpoche','bac2016@',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$req=$bdd->prepare('select * from users where pseudo=:pseudo and mdp=:mdp');
				$req->execute(array('pseudo' => $_POST["pseudo"],'mdp'=>sha1($_POST['mdp'])));
				$resultat = $req->fetch();
				if(!$resultat){	
					  echo 'Mauvais identifiant ou mot de passe !';
					  $_SESSION['connexionErreur']=true; 
				}
				else{
					$_SESSION['id'] = $resultat['id'];
					$_SESSION['pseudo']=$_POST["pseudo"];
				}
				 $req->closeCursor(); 
		}catch (Exception $e){ // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
			echo "Une erreur est survenue lors de votre connexion";
			$_SESSION['connexionErreur']=true;
		}
}
 if( isset($_POST['pseudo'])&& isset($_POST['mdp'])&& isset($_POST['nom']) && isset($_POST['prenom']) && $_POST['mdp']!=NULL && $_POST['prenom']!=NULL && $_POST['nom']!=NULL && $_POST['pseudo']!=NULL){
	try{
	 $_SESSION['id'] = '';
	 $_SESSION['pseudo'] = '';
	$bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','bacenpoche','bac2016@',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$req=$bdd->prepare('insert into users(pseudo,nom,prenom,mdp) values (?,?,?,?)');		
	$req->execute(array(htmlspecialchars( $_POST["pseudo"]),htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),sha1($_POST['mdp'])));
	$resultat = $req->fetch();
	if(!$resultat){	
		  echo 'Pseudo existe deja!';
		  $_SESSION['inscptionErreur']=true; 
	}
	else{
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['pseudo']=$resultat["pseudo"];
		if(isset($_SESSION['pseudo'])&&$_SESSION['pseudo']!=null)
		echo '<p class="widget-title">Vous êtes connecté '.' '.$_SESSION['pseudo'].'</p>';
	}
	 $req->closeCursor(); 
}catch (Exception $e) // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
{
  $_SESSION['inscptionErreur']=true; 
  echo ' Message d\'erreur :Pseudo existe deja ou il y une case vide';
}

}
if(isset($_POST['deconnexion'])){
	  $_SESSION['id'] = '';
	  $_SESSION['pseudo'] = '';
      session_write_close ();	
}
?>
 <head>
 	<title> Accueil </title>
 </head>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Amotube</title>
	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	function visibilite(thingId) {            
                var targetElement;
                targetElement = document.getElementById(thingId) ;
                 if(targetElement.style.display=="none"){
                    targetElement.style.display = "" ;
                 }else{
					 targetElement.style.display ="none";
            }
	}
	
	</SCRIPT>
    </head>
    <body >
    	<?php 
	if(isset($_SESSION['pseudo'])&&$_SESSION['pseudo']!=null)
	echo '<p class="widget-title">Vous êtes connecté '.' '.$_SESSION['pseudo'].'</p>';
?>
	<!-- <div>
		<img src="#" alt="Logo" title="Logo" />
	</div> -->
	<?php 
	 if(isset($_POST['connexion'])||(isset($_SESSION['connexionErreur'])&&$_SESSION['connexionErreur'])){
		echo' <nav class="midle">
		<br/><form method="post" action="/bacenpoche/index.php" name="connexion">
			    <p>
			Pseudo *: <input type="text" name="pseudo" />
		</p>
		<p>
			Mot de Passe * : <input type="password" name="mdp" />
		</p>
		<label for="remember"> <input id="remember" type="checkbox">
			Se souvenir de moi
		</label>
				<p>
			<input type="submit" name="Valider" value="Valider"
				class="button-color" />
		</p>
			</form>
	</nav>';
	 }else if(isset($_POST['inscription'])||(isset($_SESSION['inscptionErreur']) && $_SESSION['inscptionErreur'])){
		 echo '<nav class="midle">
		 <form method="post" action="/bacenpoche/index.php">
		   <table cellpadding="0" cellspacing="1" >
		   <tr>
		     <td>
				Pseudo *: </td> <td><input type="text" name="pseudo" /></td>
			/tr>
			<tr>
			Nom *: </td> <td><input type="text" name="nom" />
			</tr>
			<tr>
			Prenom *:</td> <td> <input type="text" name="prenom" />
			</tr>
			<tr>
			<td>Mot de Passe *:</td> <td> <input type="password" name="mdp" /></td>
			</tr>
			<tr>
			<label for="remember"> <input id="remember" type="checkbox">
				Se souvenir de moi
			</label>
			<tr>
			</tr>
			<input type="submit" name="Valider" value="Valider"
				class="pure-button pure-button-primary" />
			<tr>
			</form>
			</nav>';
	 }else{
	 echo "
    <nav>
		<br/>
		<h3>Bienvenue dans le site d'amotube</h3>
		<section >AMOTUB : Association Mauritanienne d'Orientation et du Tutorat des Bacheliers.<br/>
		Le but de l'association est d' améliorer le niveau des bacheliers en les offerant du 
               contenu en vidéo sur tout le programme.<br/>
		L association est à but non lucratif.
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		</section >
	</nav>";
	 }
	 include_once("./footer.php")
	 ?>

    </body>
</html>