<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('pseudo', 'mdp', time() + 365*24*3600, null, null, false, true); 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['id'] = '';
$_SESSION['pseudo'] = '';
	$div = '
	<html>
    <head>
        <meta charset="utf-8" />
        <title>Amotube</title>
		<link rel="stylesheet" type="text/css"
	href="/bacenpoche/vue/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css"
	href="/bacenpoche/vue/css/default3.css" />
    </head>
   <body class="sidebar" >
  <header id="header">
	 <div id="access">      
        <ul id="main" >       
     <li id="checked_menu">
		<a href="/bacenpoche/index.php"  >Accueil</a>
		</li>
		<li id="banner-top ">
		<a href="/bacenpoche/vue/connexion.php" class=" menu_link">Connexion</a>
		</li>
		<li id="banner-top ">
		<a href="/bacenpoche/vue/inscription.php"  class=" menu_link">Inscription</a>
		 </li>
		 </ul>
	</div>
	</header>
	<div  class="midle">  
			<form method="post" action="/bacenpoche/index.php">
			    <p>
			Pseudo *: <input type="text" name="pseudo" />
		</p>
		  <p>
			Nom *: <input type="text" name="nom" />
		</p>
		  <p>
			Prenom *: <input type="text" name="prenom" />
		</p>
		<p>
			Mot de Passe *: <input type="password" name="pwd" />
		</p>
		<label for="remember"> <input id="remember" type="checkbox">
			Se souvenir de moi
		</label>
				<p>
			<input type="submit" name="Valider" value="Valider"
				class="pure-button pure-button-primary" />
		</p>
			</form>
	</div>
	<footer class="footer"> 
  <ul>
  <li>
    <a href="https://www.facebook.com/amotub/" style="a { text-decoration : none; }" float="left" target="_blank">Notre page facebook</a> <br />
	</li>
	
	<li>
	<p>Copyright © 2015 - 2016 Amotube Tous droits réservés </p>
     </li>
</ul>	 
	</footer>
	</body>
	</html>
	';
	echo $div;
	if((isset($_GET['inscription']) && $_GET['inscription']!=null)||(isset($_POST['inscription']) && $_POST['inscription']!=null)){
		 $bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','bacenpoche','bac2016@',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$req=$bdd->prepare('insert into users(pseudo,nom,prenom,mdp) values (:pseudo,:nom,;prenom,:mdp)');
		if( isset($_POST['pseudo'])&& isset($_POST['mdp'])&& isset($_POST['nom']) && isset($_POST['prenom']) && $_POST['mdp']!=NULL && $_POST['prenom']!=NULL && $_POST['nom']!=NULL && $_POST['pseudo']!=NULL){
			$req->execute(array('pseudo' => $_POST["pseudo"],'nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'mdp'=>sha1($_POST['mdp'])));
			$resultat = $req->fetch();
			if(!$resultat){	
				  echo 'Pseudo existe deja!';
				  $req->closeCursor(); 
			}
			else{
				$_SESSION['id'] = $resultat['id'];
				$_SESSION['pseudo']=$_POST["pseudo"];
				$req->closeCursor(); 
				header('Location: http://bacenpoche.hebfree.org/bacenpoche/index.php');
			}
			
		}else{
			echo " Un champ est vide";
		}
	}
?>