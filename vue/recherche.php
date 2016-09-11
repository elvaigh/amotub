<?php
include_once("header.php");
include_once("../model/model.php");
if( isset($_POST['search']) && $_POST['search']!=''){
	$result=search(htmlspecialchars($_POST['search']));
	if($result){
		while($donnees = mysql_fetch_array($result)) // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
		{
		echo "
		<a href='recherche.php?id=".$donnees['id'].">".$donnees['nom']."</a><br/>";
		
		} // fin de la boucle

	}else{
		echo "hhhhhhhhhhhhhhhhhhhhhhhhhh";
	}
}else{
	header("Locatoion:index.php");
}
 include_once("footer.php");
?>