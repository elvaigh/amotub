<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('pseudo', 'mdp', time() + 365*24*3600, null, null, false, true); 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['id'] = '';
$_SESSION['pseudo'] = '';
include_once("header.php");
	$div = '
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inscription</title>
	</head>
	<body>
		<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Obligatoires</strong></div>
                <div class="form-group">
                    <label for="InputName">Nom et Prenom</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Adresse mail</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Pseudo</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputPseudo" name="InputPseudo" placeholder="Pseudo" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputPasseWord" name="InputPasseWord" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
</div>
	</body>
</html>
	';
	echo $div;	
	include_once("footer.php");
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