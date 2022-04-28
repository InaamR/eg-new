<div class="module titleLine">	
	<h3 class="modtitle modtitle--small">Configurateur</h3>
	<div class="module">
		<div class="modcontent clearfix">
			<div class="banner-wraps ">
				<div class="m-banner row">

					<!-- banniere top -->

				
								<?php
								/*
	
									$PDO_query_img_config_top = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_config WHERE eg_image_config_statut = 1 AND eg_image_config_type = 1 ORDER BY eg_image_config_price ASC LIMIT 3");
									$PDO_query_img_config_top->execute();
	
										while ($img_config_top = $PDO_query_img_config_top->fetch()){
											
											echo '

												<div class="banner htmlconten1 col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<div class="banners">
														<div>
			
															<div class="item">
																<a href="#"><img src="https://betatest.expert-gaming.tn' . $img_config_top['eg_image_config_nom'] . '" alt="' . $img_config_top['eg_image_config_title'] . '" class="img-responsive"></a>
															</div>

														</div>
													</div>
												</div>
		
											';

										}
	
									$PDO_query_img_config_top->closeCursor();
									*/
	
								?>
							
				</div>
			</div>
		</div>
	</div>
</div>

<div class="module titleLine container-full">

	<!-- baniere large-->

		<div class="container">
			<div class="item">
				<a  href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/<?php echo $PARAM_url_non_doc_site; ?>Produit/cat/11"><img src="image/banner/config.jpg" alt="Configuration" class="img-responsive"></a>
			</div>
			<?php

				/*$PDO_query_img_config_banniere = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_config WHERE eg_image_config_statut = 1 AND eg_image_config_type = 2 ORDER BY eg_image_config_date ASC LIMIT 1");
				$PDO_query_img_config_banniere->execute();
			
				$img_config_banniere = $PDO_query_img_config_banniere->fetch();
					
					//rendre la banniere dynamique

					echo '

						<div class="item">
							<a href="#"><img src="admin/upload_images/' . $img_config_banniere['eg_image_config_nom'] . '" alt="' . $img_config_banniere['eg_image_config_title'] . '" class="img-responsive"></a>
						</div>
			
					';
				
				$PDO_query_img_config_banniere->closeCursor();*/

			?>
			
		</div>
		
</div>



<div class="module">
	<div class="modcontent clearfix">
		<div class="banner-wraps ">
			<div class="m-banner row">

				<!-- banniere bottom -->


							<?php
							/*

								$PDO_query_img_config_bottom = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_config WHERE eg_image_config_statut = 1 AND eg_image_config_type = 3 ORDER BY eg_image_config_price ASC LIMIT 3");
								$PDO_query_img_config_bottom->execute();

								while ($img_config_bottom = $PDO_query_img_config_bottom->fetch()){
									
									echo '

									<div class="banner htmlconten1 col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<div class="banners">
											<div>

												<div class="item">
													<a href="#"><img src="https://betatest.expert-gaming.tn' . $img_config_bottom['eg_image_config_nom'] . '" alt="' . $img_config_bottom['eg_image_config_title'] . '" class="img-responsive"></a>
												</div>

											</div>
										</div>
									</div>

									';

								}

									$PDO_query_img_config_bottom->closeCursor();
							*/

							?>
					

			</div>
		</div>
	</div>
</div>