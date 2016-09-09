<?php
session_start();
include_once("header.php");
?>
 <head>
 	<title> Accueil </title>
    <link rel="stylesheet" type="text/css" href="acceuil.css"/>

 </head>

<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css/acceuil.css"/>

        <meta charset="utf-8" />
        <title>Amotub</title>
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

        <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>AMOTUB</h1>
                        <h3>Association Mauritanienne pour l'Orientation et le Tutorat des Bacheliers</h3>
                        <hr class="intro-divider">
                        <p> Amotub est une association crée et administrée par de jeunes étudiants mauritaniens, partout dans le monde. Elle a pour seul et unique but de venir en aide aux lycéens mauritaniens pour obtenir de la meilleure des manières leur baccalauréat </p>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

   <?php 
	if(isset($_SESSION['pseudo'])&&$_SESSION['pseudo']!=null){
		echo '<p class="widget-title">Vous êtes connecté '.' '.$_SESSION['pseudo'].'</p>';

	}
	 include_once("footer.php")
 ?>


    </body>
</html>