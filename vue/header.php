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

	   		<!--<div id="titre">
	   			<p id="title">am</p><img src='images/amotub.gif' id="logo"/><p id="title">tub</p>
	   		</div> -->

	   		<div id="droite">
	   			<!--
	   		<form action="../vue/recherche.php" method="POST" align="center" id="search" >
		          <p style="text-align: center; ">Recherche
		            <input type="text" name="search" id='inputSearch'/>
		            <a href="../vue/recherche.php"> <img src="images/search.png" id="loupe"/></a>
		          </p>
	   		</form>  -->

	   			<img src='images/english.png' class="icones"/>
	   			<label>ENG</label>

				<div float="left" style="display: inline; margin-left: 1%"  ><img src=<?php echo $loginImg;?> style=' height:15px; with:15px;'/></div>
	   			<!--demander à cheikh brahim a quoi ça sert -->

	   			<a href=<?php echo $target;?> id="connexion" class="dropbtn" name="connexion"><?php echo $status; ?></a>


	   		</div>
		</div>

		<div id="bas" class="nav">
			<ul>
				<li id="logo2">
				<img src='images/amotub.gif' id="logo"/>
				</li>
		      <li>
		        <a href="./index.php"><span  class="icon"> <img aria-hidden="true"  class="icoAcCon" src="images/white/house.png" /></span><span>Accueil</span></a>
		      </li>

		      <li class="dropdown">
		          <a  class="dropbtn" name="leçons" ><span  class="icon"> <img aria-hidden="true"  class="ico"src="images/white/lecon.png"/></span><span>Leçons</span></a>
		          <div class="dropdown-content">
		            <a href="#">Math</a>
		            <a href="#">Physique</a>
		            <a href="#">SVT</a>
		          </div>        
		        </li>

		       <li class="dropdown">
		          <a  class="dropbtn" name="exercies" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/exos.png"/></span><span>Exercises</span></a>
		          <div class="dropdown-content">
		            <a href="#">Math</a>
		            <a href="#">Physique</a>
		            <a href="#">SVT</a>
		          </div>        
		        </li>

		        <li class="dropdown">
		          <a  class="dropbtn" name="annales" ><span  class="icon"> <img aria-hidden="true"  class="icoAnnales" src="images/white/annales.png"/> </span><span>Annales</span></a>
		          <div class="dropdown-content">
		            <a href="#">Math</a>
		            <a href="#">Physique</a>
		            <a href="#">SVT</a>
		          </div>        
		        </li>

		        <li class="dropdown">
		          <a  class="dropbtn" name="orientation" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/orientation.png"/></span><span>Orientation</span></a>
		          <div class="dropdown-content">
		            <a href="#">Fiches métier</a>
		            <a href="#">sous menu2</a>
		            <a href="#">sous menu3</a>
		          </div>        
		        </li>

		         <li class="dropdown">
		          <a  class="dropbtn" name="conseils" href="conseils.php"> <span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/star.png"/></span><span>Conseils et astuces</span> </a>       
		        </li>

		        <li class="dropdown">
		          <a  class="dropbtn" name="sante"href="sante.php"> <span  class="icon"> <img aria-hidden="true"  class="ico"src="images/white/sante.png" /></span><span>Santé</span> </a>      
		        </li>

		        <li>
		        <a href="index.php"> <span  class="icon" href="contact.php"> <img aria-hidden="true"  class="icoAcCon" src="images/white/contact.png"/></span><span>Nous contacter</span> </a>
		      </li>

	    </ul>
		</div>
	</div>

	
 	<script type="text/javascript" src="script/modernizr.custom.js"></script>
</body>
</html>