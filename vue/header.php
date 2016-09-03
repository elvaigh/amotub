<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>

</head>

 <body>  

   <header id="header">

    <form action="./../model/search.php" method="POST" align="center" id="search" >
      <!--  <div id="login"> !-->
          <p style="text-align: center; ">Recherche</p>
            <input type="text" name="login" />
            <img src="images/search.png" id="loupe"/>
        <!--</div>-!-->
    </form>  

    <h1><img src='images/titre.jpeg' id="titre"/></h1>
    <!-- <img src='amotub.png' id="iconeAmotube" /> !-->
    <div id="droite">
          <div float="left" style="display: inline;margin-right: 18px"  ><img src='images/english.png' style=' height:15px; with:15px;' /></div>
          <div style="display: inline ; margin-right: 18px"  float ='left' id ='div2'></div>
          <div  style="display: inline;margin-right: 18px" float ='left'> ENG</div> 
          <div float="left" style="display: inline;margin-right: 18px"  ><img src='images/cadnas1.png' style=' height:15px; with:15px;' /></div>
        
            <a href='./connexion.php' class="dropbtn" name="connexion">connexion</a>
      </div>  
    </header> 

    <nav id="menu" class="nav" >  
     <ul>

      <li>
        <a href="./index.php"><span  class="icon"> <img aria-hidden="true"  class="ico" src="images/home.png" /></span><span>Accueil</span></a>
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
          <a  class="dropbtn" name="conseils"> <span  class="icon"> <img aria-hidden="true"  class="ico" src="images/star-empty.png"/></span><span>Conseils et astuces</span> </a>       
        </li>

        <li class="dropdown">
          <a  class="dropbtn" name="sante"> <span  class="icon"> <img aria-hidden="true"  class="ico"src="images/checkmark.png" /></span><span>Santé</span> </a>      
        </li>

        <li>
        <a href="index.php"> <span  class="icon"> <img aria-hidden="true"  class="ico" src="images/mail2.png"/></span><span>Nous contacter</span> </a>
      </li>

    </ul>
</nav>


<script type="text/javascript" src="vue/script/modernizr.custom.js"></script>

</body>
</html>

