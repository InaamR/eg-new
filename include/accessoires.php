<div class="module container-full home8--banner3">
	<div class="container titleLine">
		<h3 class="modtitle modtitle--small">Accessoires</h3>
	</div>
		<div class="owl-banner__slider">

			<?php

				$PDO_query_accessoires = Bdd::connectBdd()->prepare("SELECT eg_raccourci.eg_raccourci_id, eg_raccourci.eg_raccourci_image, eg_raccourci.eg_raccourci_nom, eg_marque.eg_marque_nom AS Marque_nom, eg_sous_categorie.eg_sous_categorie_nom as Sous_cat_nom FROM eg_raccourci INNER JOIN eg_marque ON eg_marque.eg_marque_id = eg_raccourci.eg_marque_id
				INNER JOIN eg_sous_categorie ON eg_sous_categorie.eg_sous_categorie_id = eg_raccourci.eg_sous_categorie_id
				WHERE eg_raccourci.eg_raccourci_statut = 1 ORDER BY eg_raccourci.eg_raccourci_id ASC");
				$PDO_query_accessoires->execute();

				

				while ($accessoire = $PDO_query_accessoires->fetch()){
					
					echo '

						<div class="banner__item">
							<div class="banners banner__img">
								<div>
									<a title="' . $accessoire['Marque_nom'] . ' - ' . $accessoire['Sous_cat_nom'] . '" href="#">
										<img src="https://betatest.expert-gaming.tn' . $accessoire['eg_raccourci_image'] . '" alt="' . $accessoire['Marque_nom'] . ' - ' . $accessoire['Sous_cat_nom'] . '">
									</a>
								</div>
							</div>
							<div class="banner__info">	
								<h3>' . $accessoire['Marque_nom'] . ' - ' . $accessoire['Sous_cat_nom'] . '</h3>
								<p>' . $accessoire['eg_raccourci_nom'] . '</p>
							</div>
						</div>


					';
				}
				$PDO_query_accessoires->closeCursor();

			?>		
			
		</div>
	
</div>