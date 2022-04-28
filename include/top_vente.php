<div class="module so-extraslider--new titleLine mt-40">
	<h3 class="modtitle">Top Vente</h3>
	<div id="so_extraslider1">
		
		<!-- Begin extraslider-inner -->
		<div class="so-extraslider products-list grid"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="25" data-items_column0="4" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
		
			<!--Begin Items-->


			<?php

					$PDO_query_produit_top_vente = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_top_vente = 1 ORDER BY RAND()");
					$PDO_query_produit_top_vente->execute();

					while ($produit_top_vente = $PDO_query_produit_top_vente->fetch()){

										echo '

											<div class="ltabs-item product-layout">
												<div class="product-item-container">
													<div class="left-block">
										
										';

								$PDO_query_produit_top_vente_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
								$PDO_query_produit_top_vente_image->bindParam(":eg_produit_id", $produit_top_vente['eg_produit_id'], PDO::PARAM_INT);
								$PDO_query_produit_top_vente_image->execute();

								while ($produit_top_vente_image = $PDO_query_produit_top_vente_image->fetch()){

										echo '

											<div class="product-image-container lazy second_img">
												<img data-src="https://betatest.expert-gaming.tn' . $produit_top_vente_image['eg_image_produit_nom'] . '" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="' . $produit_top_vente_image['eg_image_produit_title'] . '" class="img-responsive">
											</div>
										';

								}

								$PDO_query_produit_top_vente_image->closeCursor();


										if($produit_top_vente['eg_produit_promo'] > 0){

											echo '
											<span class="label label-new">Produit en promo</span>
											';
										}
										echo '
										<!--full quick view block-->
										<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Quickview/'.$produit_top_vente['eg_produit_id'].'">Aperçu rapide</a>
										<!--end full quick view block-->
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$produit_top_vente['eg_produit_id'].'">';
																		$text = wordwrap($produit_top_vente['eg_produit_nom'], 50, "***", true); // insertion de marqueurs ***

																		$tcut = explode("***", $text); // on créé un tableau à partir des marqueurs ***
																		$part1 = $tcut[0]; // la partie à mettre en exergue
																		$part2 = '';
																		for($i=1; $i<count($tcut); $i++) {
																			$part2 .= $tcut[$i].' ';
																		}
																		$part2 = trim($part2); //suppression du dernier espace dans la partie de texte restante
																		echo $part1;
												echo'</a></h4>
											<h5>Réf : ' . $produit_top_vente['eg_produit_reference'] . '</h5>		
											<div class="ratings">
												<div class="rating-box">';
												$nb_etoile = $produit_top_vente['eg_produit_etoiles'];
												for ($i=1 ; $i<=$nb_etoile ; $i++)
												{
												echo '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> ';
												}
												echo'
												</div>
											</div>
													';

													if($produit_top_vente['eg_produit_dispo'] == 0){

														echo'
	
														<div class="stock"><span class="status-outofstock">Hors stock</span></div>
	
												';
	
	
													}elseif($produit_top_vente['eg_produit_dispo'] == 1){
	
														echo'
														
														<div class="stock"><span class="status-stock">Disponible</span></div>
	
														';
	
													}elseif($produit_top_vente['eg_produit_dispo'] == 2){
	
														echo'
														
														<div class="stock"><span class="status-commande">Sur commande 48H</span></div>
	
														';
	
													}elseif($produit_top_vente['eg_produit_dispo'] == 3){
	
														echo'
														
														<div class="stock"><span class="status-commande">Sur commande</span></div>
	
														';
	
													}elseif($produit_top_vente['eg_produit_dispo'] == 4){
	
														echo'
														
														<div class="stock"><span class="status-soon">En arrivage</span></div>
	
														';
	
													}

													if($produit_top_vente['eg_produit_promo'] == 0){

														echo '
														<div class="price">
															<span class="price">' . $produit_top_vente['eg_produit_prix'] . ' TND</span><br>
															<span class="price">&nbsp</span>	
														</div>
														';

													}else{

														echo '
														<div class="price">
															<span class="price-new">' . $produit_top_vente['eg_produit_promo'] . ' TND</span><br>
															<span class="price-old">' . $produit_top_vente['eg_produit_prix'] . ' TND</span>
														</div>
														';

													}

													
													
													echo'
											
										</div>
										
										<div class="button-group">
										';
										
										if($produit_top_vente['eg_produit_dispo'] == 0 || $produit_top_vente['eg_produit_dispo'] == 4){

											echo'
											
											';
											
										}else{

											echo'
											<input type="hidden" name="hidden_name" id="name'.$produit_top_vente["eg_produit_id"].'" value="'.$produit_top_vente["eg_produit_nom"].'" />
             								<input type="hidden" name="hidden_price" id="price'.$produit_top_vente["eg_produit_id"].'" value="'.$produit_top_vente["eg_produit_prix"].'" />
											<div class="quantity">
											 <input type="number" name="quantity" onkeydown="return event.keyCode !== 69" id="quantity'.$produit_top_vente["eg_produit_id"].'" class="form-control-panier" min="1" step="1" value="1">
										   	</div>
											<button class="addToCart  addToCart--notext add_to_cart" type="button" name="add_to_cart" id="'.$produit_top_vente["eg_produit_id"].'" value="Add to Cart" onclick="cart.add(\'42\', \'1\');"><i class="fas fa-cart-plus"></i> <span class="button-group__text">Ajouter au panier</span></button>';

										}
										echo'
											<button class="wishlist" type="button"><i class="fa fa-heart"></i>  </button>
											<button class="compare" type="button"><i class="fa fa-exchange-alt"></i>  </button>
										</div>
									</div><!-- right block -->
								</div>
							</div>

							';

					}
					$PDO_query_produit_top_vente->closeCursor();

			?>
			<!--End Items-->
			
		</div>
		<!--End extraslider-inner -->
	</div>
</div>