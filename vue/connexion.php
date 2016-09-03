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
	<head>
		<title>Connexion</title>
	</head>
<div class="container" >
    <div class="row">
        <form role="form"  method="post" action="../controleur/controleur.php">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputEmail">Pseudo</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="pseudo" placeholder="Pseudo" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputPasseWord" name="mdp" placeholder="mot de passe" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="col-sm-offset-0 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                 <div class="col-sm-offset-0 col-sm-10">
			        <label><a href="inscription.php">'.$sign.'</a></label>
			    </div>
            </div>
        </form>
    </div>
</div>
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
	