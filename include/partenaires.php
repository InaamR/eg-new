<?php

	$PDO_query_partenaire = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 ORDER BY eg_marque_id ASC");
	$PDO_query_partenaire->execute();

	while ($partenaire = $PDO_query_partenaire->fetch()){
		
		//rendre la partie nos partenaires dynamique

		echo '
			<div class="swiper-slide brand-slider-item text-center">
				<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produit/Marque/'.$partenaire['eg_marque_id'].'"><img class=" img-fluid" src="https://betatest.expert-gaming.tn' . $partenaire['eg_marque_logo'] . '" alt="' . $partenaire['eg_marque_nom'] . '" alt="' . $partenaire['eg_marque_nom'] . '" /></a>
			</div>
		';
	}
	$PDO_query_partenaire->closeCursor();

?>
