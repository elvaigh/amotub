<?php
session_start();
include_once("./header.php");
?>
 <head>
 	<title> Accueil </title>
 </head>
<!DOCTYPE html>
<html>
    <head>
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
   <?php 
	if(isset($_SESSION['pseudo'])&&$_SESSION['pseudo']!=null){
		echo '<p class="widget-title">Vous êtes connecté '.' '.$_SESSION['pseudo'].'</p>';

	}
	 include_once("./footer.php")
 ?>

    </body>
</html>