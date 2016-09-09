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
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <link rel="stylesheet" type="text/css" href="css/inscription.css"/>
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <form role="form" method="post" action="../controleur/controleur.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Obligatoires</strong></div>
                <div class="form-group">
                    <label for="InputName">Nom </label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nom" id="InputName" placeholder="Nom" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Prenom</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="prenom" placeholder="Prenom" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Adresse mail</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="mail" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
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
                        <input type="password" class="form-control" id="InputPasseWord" name="mdp" placeholder="Mot de passe" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Age</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="age" placeholder="29" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputEmail">Ville</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="ville" placeholder="Rosso" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputEmail">Lycee</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="lycee" placeholder="Lycée de Rosso" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputEmail">Type de Bac</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPseudo" name="serie" placeholder="Mathématique" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
    </div>
        </body>
    </html>';
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