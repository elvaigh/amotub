<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('pseudo', 'mdp', time() + 365*24*3600, null, null, false, true); 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['id'] = '';
$_SESSION['pseudo'] = '';
include_once("header.php");
	$div = '
	<head>
		<title>Connexion</title>
	</head>
<div class="container" >
    <div class="row">

        <form role="form">
            <div class="col-lg-6">
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
                <div class="col-sm-offset-0 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
</div>
	';
		echo $div;
		include_once("footer.php");
		
		if(isset($_POST['pseudo'])&&isset($_POST['mdp'])&&$_POST['mdp']!=NULL &&$_POST['pseudo']!=NULL){
			$bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','bacenpoche','bac2016@',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$req=$bdd->prepare('select * from users where pseudo=:pseudo and mdp=:mdp');
				$req->execute(array('pseudo' => $_POST["pseudo"],'mdp'=>sha1($_POST['mdp'])));
				$resultat = $req->fetch();
				if(!$resultat){	
					  echo '<div class="col-lg-5 col-md-push-1">
					            <div class="col-md-12">
					                <div class="alert alert-danger">
					                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
					                </div>
					            </div>
					        </div>';
					  $req->closeCursor(); 
				}
				else{
					$_SESSION['id'] = $resultat['id'];
					$_SESSION['pseudo']=$_POST["pseudo"];
					$req->closeCursor(); 
					header('Location: http://bacenpoche.hebfree.org/bacenpoche/index.php');
				}
				
		}

?>
	