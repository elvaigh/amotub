<?php
session_start();
include_once("../model/model.php");
if(isset($_SESSION['type'])&&$_SESSION['type']=='login'){
	//Here user want to login
	if(isset($_POST['pseudo'])&&isset($_POST['mdp'])&&$_POST['mdp']!=NULL &&$_POST['pseudo']!=NULL){
			$resultat=login(htmlspecialchars($_POST['pseudo']),htmlspecialchars($_POST['mdp']));
			if($resultat){
				$_SESSION['pseudo']=$_POST["pseudo"];
				header('Location:../vue/index.php');
			}else{
				$_SESSION['connexionErreur']=true;
				header('Location:../vue/connexion.php');		
			}		
	}else{
			header('Location:../vue/connexion.php');
	}
}else if(isset($_SESSION['type'])&&$_SESSION['type']=='signup'){
	//Here user want to signup
	if(isset($_POST['pseudo'])&&isset($_POST['mdp'])&&isset($_POST['prenom'])&&isset($_POST['age'])&&isset($_POST['ville'])&&isset($_POST['serie'])&&isset($_POST['mail'])&&isset($_POST['nom'])&&isset($_POST['lycee'])){
		$resultat=signUp(htmlspecialchars($_POST['pseudo']),htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['mail']),htmlspecialchars($_POST['mdp'])
			,htmlspecialchars($_POST['age']),htmlspecialchars($_POST['ville']),htmlspecialchars($_POST['serie']),htmlspecialchars($_POST['lycee']));
		if(!$resultat){
			header('Location:../vue/index.php');
		}else{
			header('Location:../vue/inscription.php');
		}
	}else{
		header('Location:../vue/inscription.php');
	}		
/*}else if(isset($_SESSION['search'])){
	if($_SESSION['search']==''){
		header('Location:../vue/index.php');
	}else{

	}*/
}else{
	if(isset($_POST['deconnexion'])){
	  $_SESSION['id'] = '';
	  $_SESSION['pseudo'] = '';
      session_write_close ();	
	}
}
?>
