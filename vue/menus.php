<!DOCTYPE html>
<html>
<head>
<style>
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
</style>
</head>
 <body>  
     <ul>
        <li>
        <a href="index.php"  >Accueil</a>
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
</body>
</html>

