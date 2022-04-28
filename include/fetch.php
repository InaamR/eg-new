<?php

include("../config/fonction.php");

if(isset($_GET["term"]))
{
	
	if(isset($_GET['term'])){
		$recherche_rapide = "%".trim(strip_tags($_GET['term']))."%";
	}else{
		$recherche_rapide = "";
	}


$statement = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_nom LIKE :rech ORDER BY eg_produit_prix ASC LIMIT 5");
$statement->bindParam(":rech", $recherche_rapide, PDO::PARAM_STR);


 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $temp_array = array();

	$PDO_query_rech_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
	$PDO_query_rech_image->bindParam(":eg_produit_id", $row['eg_produit_id'], PDO::PARAM_INT);
	$PDO_query_rech_image->execute();

	$produit_rech_image = $PDO_query_rech_image->fetch();
	$PDO_query_rech_image->closeCursor();
			
   $temp_array['value'] = $row['eg_produit_nom'];
   $temp_array['label'] = '<img src="https://betatest.expert-gaming.tn' . $produit_rech_image['eg_image_produit_nom'] . '" alt="' . $produit_rech_image['eg_image_produit_title'] . '" title="' . $produit_rech_image['eg_image_produit_title'] . '" width="70">&nbsp;&nbsp;&nbsp;'.$row['eg_produit_nom'].'';
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'No Record Found';
 }

 echo json_encode($output);
}

?>