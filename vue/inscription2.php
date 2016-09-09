<?php 
session_start();
if(isset($_SESSION['pseudo']) && $_SESSION['pseudo']!=''){
    header('Location:index.php');
}else{
include_once("header.php");
$_SESSION['type'] = 'signup';
if(!isset($_SESSION['pseudo']))
    $_SESSION['pseudo'] = '';

$div = '
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/inscription.css"/>

</head>
<body>


<div id="formulaire">
	<p id="h3"> Inscription</p>
	<form role="form" method="post" action="../controleur/controleur.php"> 
	<table>
	<tr>
	   <td>	<p><label>Nom </label> : </td >
	   <td> <input type="text" name="nom" class="input"required="required" " /></td>  
	   <td> <label>    Prénom </label> :</td >
	   <td> <input type="text" name="prenom" class="input" required="required"  /></td> </p>
	</tr>
		<td> <p><label>Âge </label> :</td >
		<td> <input type="text" name="age" class="input" id="age" required="required"  maxlength="2"/> </td> 
		<td> <label>   Émail </label> :</td >
		<td> <input type="text" name="mail" class="input" id="mail"required="required" /> </td></p>
	<tr>
		<td> <p><label>Pseudo</label> :  </td >
		<td><input type="text" name="pseudo" class="input" required="required" maxlength="25"/> </td>  
		<td> <label>    Mot de passe</label> : </td >
		<td><input type="text" name="mdp" class="input"required="required" maxlength="10"/> </td></p>
	<tr>
		<td> <p><label>Lycée</label> :</td >
		<td> <input type="text" name="lycee" class="input"required="required" maxlength="25"/> </td> 
		<td> <label>Ville </label> :</td >
		<td><input type="text" name="ville" class="input"required="required"  maxlength="25"/> </td></p>	   
	</tr>
	</table>
	<p><label>	&nbsp&nbsp&nbsp&nbsp&nbsp Quel type de baccalauréat passez vous? </label> : 
       		<select name="pays" id="pays" required="required">
				<option value="C">Bac A</option>
	           	<option value="D">Bac C</option>
	           	<option value="A">Bac D</option>
	           	<option value="Autre">Bac O</option>
	           	<option value="Autre">Autre</option>
           </select></p>

           <input type="submit" value="Sincrire" id="button" />
	</form>
	
<div>


</body>
</html>
';
   echo $div;
   if(isset($_SESSION['inscriptionErreur']) &&$_SESSION['inscriptionErreur']){
    echo '<div class="col-lg-5 col-md-push-1">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-remove"></span><strong> Votre pseudo existe!</strong>
                            </div>
                        </div>
                    </div>';
    $_SESSION['inscriptionErreur']=false;
   }	
}
include_once("footer.php");
?>