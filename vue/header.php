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
			<div id="bleu">
		   		<div id="droite">

		   			<img src='images/english.png' class="icones"/>
		   			<label>ENG</label>

					<div float="left" style="display: inline; margin-left: 1%"  ><img src=<?php echo $loginImg;?> style=' height:15px; with:15px;'/></div>

		   			<a href=<?php echo $target;?> id="connexion" class="dropbtn" name="connexion"><?php echo $status; ?></a>
		            <form action="" id="recherche">
			            <label>Recherche</label>
			            <input class="champ" type="text" value="" placeholder="exemple : nombres premiers"/>
			            <a href=""> <img src="images/search.png" class="icones"/></a>

		            </form>
		   		</div>
		   		 <br>
	   		</div>
		</div>

		<div id="bas" class="nav">
			<ul>
				<li id="logo2" class="menu"><img src='images/amotub.gif' id="logo"/></li>
			    <li class="menu">
			        <a href="./index.php" class="aPrincipal"><span  class="icon"> <img aria-hidden="true"  class="icoAcCon" src="images/white/house.png" /></span><span>Accueil</span></a>
			    </li>
			    <li class="dropdown menu">
			          <a  class="dropbtn aPrincipal" name="leçons" ><span  class="icon"> <img aria-hidden="true"  class="ico"src="images/white/lecon.png"/></span><span>Leçons</span></a>
			          <ul class="dropdown-content">
			            <li><a href="#">Math</a></li>
			            <li><a href="#">Physique</a></li>
			            <li><a href="#">SVT</a></li>
			          </ul>        
			    </li>

			    <li class="dropdown menu">
			          <a  class="dropbtn aPrincipal" name="exercies" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/exos.png"/></span><span>Exercises</span></a>
			           <ul class="dropdown-content">
			            <li><a href="#">Math</a></li>
			            <li><a href="#">Physique</a></li>
			            <li><a href="#">SVT</a></li>
			          </ul>        
			        </li>

			        <li class="dropdown menu ">
			          <a  class="dropbtn aPrincipal" name="annales" ><span  class="icon"> <img aria-hidden="true"  class="icoAnnales" src="images/white/annales.png"/> </span><span>Annales</span></a>
			           <ul class="dropdown-content">
			            <li><a href="connexion2.php">Math</a></li>
			            <li><a href="#">Physique</a></li>
			            <li><a href="connexion2.php">SVT</a></li>
			          </ul>        
			        </li>

			        <li class="dropdown menu">
			          <a  class="dropbtn aPrincipal" name="orientation" ><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/orientation.png"/></span><span>Orientation</span></a>
			           <ul class="dropdown-content">
			            <li><a href="#">Fiches Metiers</a></li>
			            <li><a href="#">Profils</a></li>
			            <li><a href="#">autre sous menu</a></li>
			          </ul>        
			        </li>

			         <li class="dropdown menu">
			          <a  class="dropbtn aPrincipal" name="conseils" href="conseils.php"> <span  class="icon"> <img aria-hidden="true"  class="ico" src="images/white/star2.png"/></span><span>Conseils et astuces</span> </a>   
			          <ul class="dropdown-content">
			            <li><a href="#">Se preparer au Bac</a></li>
			            <li><a href="sante.php">Santé</a></li>
			            <li><a href="#">autres?</a></li>    
			           </ul> 
			        </li>

			        <li class="dropdown menu">
			          <a  class="dropbtn aPrincipal" name="forum" href=""> <span  class="icon"> <img aria-hidden="true"  class="ico"src="images/white/chat.png" /></span><span>Forum</span> </a>      
			        </li>

			        <li class="menu">
			        <a href="index.php" class="aPrincipal"> <span  class="icon" href="contact.php"> <img aria-hidden="true"  class="icoAcCon" src="images/white/contact.png"/></span><span>Nous contacter</span> </a>
			      </li>
	 	   </ul>
		</div>
	</div>

	
 	<script type="text/javascript" src="script/modernizr.custom.js"></script>
</body>
</html>