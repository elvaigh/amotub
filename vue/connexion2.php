<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include_once("header.php"); 
// On s'amuse à créer quelques variables de session dans $_SESSION
if(!isset($_SESSION['pseudo']))
	$_SESSION['pseudo'] = '';
$_SESSION['type'] = 'login';
	$sign="S'inscrire";
	$div = '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/connexion.css"/>

</head>
<body>


<div id="formulaire">
	<p id="h3"> Connexion</p>
	<form role="form"  method="post" action="../controleur/controleur.php"> <!-- ACTION A REMPLIR !!! -->
		<table>
			<tr>
				<td><p><label>Pseudo </label> :</td>
				<td><input type="text" name="pseudo" class="input" required="required" placeholder="Ici votre pseudo" size="30" maxlength="10"/> </p></td>
			</tr>
			<tr>
				<td> <p><label> Mot de passe </label> :</td>
				<td><input type="password" name="mdp" class="input"  required="required" placeholder="Ici votre mot de passe" size="30" maxlength="10"/></p></td>
			</tr>
		</table>
        <input type="submit" value="se connecter" id="button" />
         <div class="col-sm-offset-0 col-sm-10">
			        <label><a href="inscription2.php" id="sinscrire">'.$sign.'</a></label>
		 </div>
	</form>
	
<div>
</body>
</html>

';  
	if(isset($_SESSION['pseudo']) && $_SESSION['pseudo']!=''){
		header('Location:index.php');
	}else{
		echo $div;
		if(isset($_SESSION['connexionErreur']) && $_SESSION['connexionErreur']){
			echo '<div class="col-lg-5 col-md-push-1">
				            <div class="col-md-12">
				                <div class="alert alert-danger">
				                    <span class="glyphicon glyphicon-remove"></span><strong> Une erreur est survenue lors de votre connexion.</strong>
				                </div>
				            </div>
				        </div>';
		$_SESSION['connexionErreur']=false;
		}
	}
		include_once("footer.php");
?>
	