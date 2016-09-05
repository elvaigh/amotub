<?php
if(isset($_SESSION['pseudo']) && $_SESSION['pseudo']!=''){
  $loginImg='images/logout.png';
  $status="Déconnexion";
  $target='deconnexion.php';
}else{
  $loginImg='images/lock.png';
  $status="Connexion";
  $target='connexion2.php';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/header.css"/>
</head>

<body>

	<div id="hautDePage">

		<div id="top">

		    <form action="../controleur/controleur.php" method="POST" align="center" id="search" >
		      <!--  <div id="login"> !-->
		          <p style="text-align: center; ">Recherche
		            <input type="text" name="search" id='inputSearch'/>
		            <a href=""> <img src="images/search.png" id="loupe"/></a></p> <!--ECRIRE LIEN POUR RECHERCHE !requetes php-->
		        <!--</div>-!-->
	   		</form>  
	   		
	   		<img src='images/amotub.png' id="titre"/> 
	   		
	   		<div id="droite">
	   			<img src='images/english.png' class="icones"/>
	   			<label>ENG</label>
	   			<img class="icones"/>

	   			<div float="left" style="display: inline;margin-right: 18px"  ><img src=<?php echo $loginImg;?> style=' height:15px; with:15px;'/></div> <!--demander à cheikh brahim a quoi ça sert -->

	   			<a href=<?php echo $target;?> class="dropbtn" name="connexion"><?php echo $status; ?></a>

	   		</div>
		</div>

		<div id="bas" class="nav">
			<ul>

	      <li>
	        <a href="./index.php"><span  class="icon"> <img aria-hidden="true"  class="icoAcCon" src="images/home.png" /></span><span>Accueil</span></a>
	      </li>

	      <li class="dropdown">
	          <a  class="dropbtn" name="leçons" ><span  class="icon"> <img aria-hidden="true"  class="ico"src="images/book.png"/></span><span>Leçons</span></a>
	          <div class="dropdown-content">
	            <a href="#">Math</a>
	            <a href="#">Physique</a>
	            <a href="#">SVT</a>
	          </div>        
	        </li>

	       <li class="dropdown">
	          <a  class="dropbtn" name="exercies" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/pencil2.png"/></span><span>Exercises</span></a>
	          <div class="dropdown-content">
	            <a href="#">Math</a>
	            <a href="#">Physique</a>
	            <a href="#">SVT</a>
	          </div>        
	        </li>

	        <li class="dropdown">
	          <a  class="dropbtn" name="annales" ><span  class="icon"> <img aria-hidden="true"  class="icoAnnales" src="images/books.png"/> </span><span>Annales</span></a>
	          <div class="dropdown-content">
	            <a href="#">Math</a>
	            <a href="#">Physique</a>
	            <a href="#">SVT</a>
	          </div>        
	        </li>

	        <li class="dropdown">
	          <a  class="dropbtn" name="orientation" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/question.png"/></span><span>Orientation</span></a>
	          <div class="dropdown-content">
	            <a href="#">Fiches métier</a>
	            <a href="#">sous menu2</a>
	            <a href="#">sous menu3</a>
	          </div>        
	        </li>

	         <li class="dropdown">
	          <a  class="dropbtn" name="conseils" href="conseils.php"> <span  class="icon"> <img aria-hidden="true"  class="ico" src="images/star-empty.png"/></span><span>Conseils et astuces</span> </a>       
	        </li>

	        <li class="dropdown">
	          <a  class="dropbtn" name="sante"href="sante.php"> <span  class="icon"> <img aria-hidden="true"  class="ico"src="images/checkmark.png" /></span><span>Santé</span> </a>      
	        </li>

	        <li>
	        <a href="index.php"> <span  class="icon" href="contact.php"> <img aria-hidden="true"  class="icoAcCon" src="images/mail2.png"/></span><span>Nous contacter</span> </a>
	      </li>

	    </ul>
		</div>
	</div>

	
 	<script type="text/javascript" src="script/modernizr.custom.js"></script>
</body>
</html>