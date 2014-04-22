exemple_site.php
================
<!DOCTYPE html>
	<html lang="fr">
	<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/div/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
  <body>
	
	<?php
	try {
	 $dns = 'mysql:host=localhost;dbname=article';
	 $utilisateur = 'root';
	 $motDePasse = 'root';
	 
	 // Options de connection
	 $options = array(
	   PDO::ATTR_TIMEOUT => "10",
	   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
	   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	 ); 
 	 
	} catch ( Exception $e ) {
	 echo "Connection à MySQL impossible : ", $e->getMessage();
	 die();
	}  
	
	  ?>
	
	<br>
	Exercice 2 :
	</br>
	<table border="1">
  <tr>
   <th>
  Libell&eacute de la categorie
   </th>
   <th>      
   image de l'article
  </th>
   <th>
  nom de l'article 
	 </th>
     </tr>
		  
	<?php
	
	$dernierlibelle=undef;
	// Récupération des données
	try {
	 // On envois la requèt
	
	 $select = $connection->query("SELECT * FROM Article,Categorie where Article.idCategorie=Categorie.idCategorie  order by libelle,nom");
	 
	 // On indique que nous utiliserons les résultats en tant qu'objet
	 $select->setFetchMode(PDO::FETCH_OBJ);
	
	 // Nous traitons les résultats en boucle
	 while( $enregistrement = $select->fetch() )
	 {
	  $doitEcrireLibelle=false;
	 	if(strcmp($dernierlibelle,$enregistrement->libelle)!=0)
	 	{
	 		$doitEcrireLibelle=true;
	 		$dernierlibelle=$enregistrement->libelle;
	 	}
	   // Affichage des enregistrements
	   echo "<tr>";
	   if($doitEcrireLibelle)
	   {
	   echo "<td>", $enregistrement->libelle,"</td>";
	   }
	   else
	   {
	   	echo "<td></td>";
	   }
	   echo "<td><img src='images/", $enregistrement->image,"'></td>";
	   echo "<td>", $enregistrement->nom,"</td>";
	   echo "</tr>";
	  
	   
	   
	 }
	} catch ( Exception $e ) {
	 echo "Une erreur est survenue lors de la récupération des créateurs";
	}
	
	?>
	
	 </table>
	 
	 </body>
	 
	</html>
