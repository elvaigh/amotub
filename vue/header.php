<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<style>
html,
    body {
      height: 100%;
      /* The html and body elements cannot have any padding or margin. */
    }
  #header {
      background-color: #000;
      height: 80px;
      width: 100%;
      margin-top: 0%;
      color: white;
      position:relative;
    }
    #login{
      background-repeat: no-repeat;
      background-position: 95% 30%;
      background-image:url("./images/recherche.png");
      background-size: 15% auto;
      margin-left:80%;
    }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    z-index:20;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
div a {
    text-decoration: none;
    font-size: 20px;
    padding: 15px;
    display:inline-block;
}
ul li ul li a {display:block !important;}
ul{z-index:1;}
body{z-index:-1;}
</style>
 <header style='margin-right: 18px;' id="header">
    <div float="left" style="display: inline;margin-right: 30%"  ><img src='./images/amotub.png' style=' height:50px; with:50px;' /></div>
    <div float='center' style="display: inline; margin-right: 45%" >Amotub</div>
    <div float="left" style="display: inline;margin-right: 18px"  ><img src='./images/english.png' style=' height:15px; with:15px;' /></div>
    <div style="display: inline ; margin-right: 18px"  float ='left' id ='div2'> 
      <div  style="display: inline;margin-right: 18px" float ='left'> ENG</div> 
      <div float="left" style="display: inline;margin-right: 18px"  ><img src='./images/cadnas1.png' style=' height:15px; with:15px;' /></div>
      <a href='./connexion.php' class="dropbtn" name="login" >login</a>
      <form action="./../model/search.php" method="POST" align="center" id="search" >
      <div id="login">
        <input type="text" name="login" />
      </div>
      </form>
    </div>
  </header>  
</head>
 <body>  
  <div>   
   <ul>
        <li>
        <a href="./index.php"  >Accueil</a>
      </li>
      <li class="dropdown">
          <a  class="dropbtn" name="leçons" >Leçons</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
       <li class="dropdown">
          <a  class="dropbtn" name="exercies" >Exercices</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
        <li class="dropdown">
          <a  class="dropbtn" name="annales" >Annales</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
        <li class="dropdown">
          <a  class="dropbtn" name="orientation" >Orientation</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
         <li class="dropdown">
          <a  class="dropbtn" name="conseils" >Conseils et astuces</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
        <li class="dropdown">
          <a  class="dropbtn" name="sante" >Santé</a>
          <div class="dropdown-content">
            <a href="#">Math</a>
            <a href="#">Physique</a>
            <a href="#">SVT</a>
          </div>        
        </li>
        <li>
        <a href="index.php"  >Nous contacter</a>
      </li>
    </ul>
</div>
</body>
</html>

