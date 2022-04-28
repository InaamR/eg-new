
<?php

$PDO_query_menu_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_hot = 1");
$PDO_query_menu_cat->execute();													
while ($menu_cat = $PDO_query_menu_cat->fetch()){

?>
<div class="tab-pane fade <?php if($menu_cat['eg_menu_ordre'] == 8){echo'show active';}?>" id="<?php echo $menu_cat['eg_menu_titre']; ?>">
	<div class="row">
	<?php

		$PDO_query_produit_index = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY RAND() LIMIT 20");
		$PDO_query_produit_index->bindParam(":eg_menu_id", $menu_cat['eg_menu_id']);
		$PDO_query_produit_index->execute();

		while ($produit_index = $PDO_query_produit_index->fetch()){
		?>


		<!-- Single Prodect -->

			<?php

				$PDO_query_produit_index = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = 5 ORDER BY RAND() LIMIT 8");
				$PDO_query_produit_index->execute();

					while ($produit_index = $PDO_query_produit_index->fetch()){
						echo '<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">';
						echo '<div class="product">';
						echo '<span class="badges">';
						if($produit_index['eg_produit_dispo'] == 0){

							echo '<span class="hs">Hors stock</span>';


						}elseif($produit_index['eg_produit_dispo'] == 1){

							echo '<span class="dispo">Disponible</span>';

						}elseif($produit_index['eg_produit_dispo'] == 2){

							echo '<span class="commande">Sur commande 48H</span>';

						}elseif($produit_index['eg_produit_dispo'] == 3){

							echo '<span class="commande">Sur commande</span>';

						}elseif($produit_index['eg_produit_dispo'] == 4){

							echo '<span class="arrivage">En arrivage</span>';

						}
						
						echo '</span>';
						echo '<div class="thumb">';
						$PDO_query_produit_index_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
						$PDO_query_produit_index_image->bindParam(":eg_produit_id", $produit_index['eg_produit_id'], PDO::PARAM_INT);
						$PDO_query_produit_index_image->execute();
						while ($produit_index_image = $PDO_query_produit_index_image->fetch()){

								echo '
								
								<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$produit_index['eg_produit_id'].'" class="image">
									<img src="https://betatest.expert-gaming.tn' . $produit_index_image['eg_image_produit_nom'] . '" alt="' . $produit_index_image['eg_image_produit_title'] . '" />
									<img class="hover-image" src="https://betatest.expert-gaming.tn' . $produit_index_image['eg_image_produit_nom'] . '" alt="' . $produit_index_image['eg_image_produit_title'] . '" />
								</a>

								';

						}
						$PDO_query_produit_index_image->closeCursor();
						echo '</div>';
						echo '<div class="content">';
						echo '<h5 class="title"><a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$produit_index['eg_produit_id'].'">';
						$text = wordwrap($produit_index['eg_produit_nom'], 50, "***", true); // insertion de marqueurs ***
						$tcut = explode("***", $text); // on créé un tableau à partir des marqueurs ***
						$part1 = $tcut[0]; // la partie à mettre en exergue
						$part2 = '';
						for($i=1; $i<count($tcut); $i++) {
							$part2 .= $tcut[$i].' ';
						}
						$part2 = trim($part2); //suppression du dernier espace dans la partie de texte restante
						echo $part1;
						echo '</a>';
						echo '</h5>';
						echo '<span class="price">';
						echo '<span class="new">' . $produit_index['eg_produit_prix'] . ' TND</span>';
						echo '</span>';
						echo '</div>';
						echo '<div class="actions">
								<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
									class="pe-7s-shopbag"></i></button>
								<button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
										class="pe-7s-like"></i></button>
								<button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
								<button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
										class="pe-7s-refresh-2"></i></button>
							</div>';
						echo '</div>';
						echo '</div>';


					}
				$PDO_query_produit_index->closeCursor();
			
			?>

		<?php } ?>
	</div>
</div>
<?php
}
$PDO_query_menu_cat->closeCursor();

?>

		