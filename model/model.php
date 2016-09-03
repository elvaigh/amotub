<?php
session_start();
function login($pseudo,$mdp){
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$req=$bdd->prepare('select * from users where pseudo=:pseudo and mdp=:mdp');
		$req->execute(array('pseudo' =>htmlspecialchars($pseudo),'mdp'=>sha1($mdp)));
		$resultat = $req->fetch();
		$req->closeCursor(); 
	}
	catch (Exception $e){ // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
			$_SESSION['connexionErreur']=true;
		}
	return $resultat;
}

function signUp($pseudo,$nom,$prenom,$mail,$mdp,$age,$ville,$serie,$lycee){
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=bacenpoche0','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$req=$bdd->prepare('insert into users(pseudo,nom,prenom,mail,mdp,age,ville,serie,lycee) values (?,?,?,?,?,?,?,?,?)');		
		$req->execute(array($pseudo,$nom,$prenom,$mail,sha1($mdp),$age,$ville,$serie,$lycee));
		$resultat = $req->fetch();
		$req->closeCursor(); 
		$_SESSION['pseudo']=$pseudo;
		header('Location:../vue/index.php');
	}catch (Exception $e){ // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
			$_SESSION['inscriptionErreur']=true;
			header('Location:../vue/inscription.php');
	}
	return $_SESSION['inscriptionErreur'];
}
?>