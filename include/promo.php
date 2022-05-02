<div class="feature-product-area pt-100px pb-100px">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title text-center">
					<h2 class="title">Nos promotions</h2>
					<p>Profitez vite de nos promotions chez Expert Gaming</p>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-xl-6 col-lg-6">
				<?php

				$PDO_query_produit_promo_2 = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' AND eg_produit_date_fin_promo <> '' ORDER BY RAND()");
				$PDO_query_produit_promo_2->execute();

				$produit_promo_2 = $PDO_query_produit_promo_2->fetch();				

				?>
				<div class="feature-right-content">
					<div class="image-side">
					<?php

					$PDO_query_produit_promo_image_2 = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
					$PDO_query_produit_promo_image_2->bindParam(":eg_produit_id", $produit_promo_2['eg_produit_id'], PDO::PARAM_INT);
					$PDO_query_produit_promo_image_2->execute();

					while ($produit_promo_image_2 = $PDO_query_produit_promo_image_2->fetch()){

							echo '
							<img src="https://betatest.expert-gaming.tn/ckfinder/userfiles/images/Casque/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR-tunisie-1.jpg" alt="' . $produit_promo_image_2['eg_image_produit_title'] . '"> 
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
							';

					}

					$PDO_query_produit_promo_image_2->closeCursor();

					?>

						
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>Fin dans |</span>
							<div data-countdown="<?php echo $produit_promo_2['eg_produit_date_fin_promo']; ?>"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html"><?php echo $produit_promo_2['eg_produit_nom']; ?></a></h5>
							<span class="price">
							<span class="old"><?php echo round($produit_promo_2['eg_produit_prix']); ?>DT</span>
							<span class="new"><?php echo round($produit_promo_2['eg_produit_promo']); ?>DT</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Réf : <span><?php echo $produit_promo_2['eg_produit_reference']; ?></span></li>
								<li>Modéle : <span><?php echo $produit_promo_2['eg_produit_modele']; ?></span></li>
								<li>Qualité : <span><?php echo $produit_promo_2['eg_produit_etoiles']; ?> étoiles</span></li>
							</ul>
						</div>
					</div>
				</div>
				<?php
				$PDO_query_produit_promo_2->closeCursor();
				?>
				<?php

				$PDO_query_produit_promo_3 = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' AND eg_produit_date_fin_promo <> '' ORDER BY RAND()");
				$PDO_query_produit_promo_3->execute();

				$produit_promo_3 = $PDO_query_produit_promo_3->fetch();				

				?>
				<div class="feature-right-content mt-30px">
				<div class="image-side">
					<?php

					$PDO_query_produit_promo_image_3 = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
					$PDO_query_produit_promo_image_3->bindParam(":eg_produit_id", $produit_promo_3['eg_produit_id'], PDO::PARAM_INT);
					$PDO_query_produit_promo_image_3->execute();

					while ($produit_promo_image_3 = $PDO_query_produit_promo_image_3->fetch()){

							echo '
							<img src="https://betatest.expert-gaming.tn/ckfinder/userfiles/images/Casque/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR-tunisie-1.jpg" alt="' . $produit_promo_image_3['eg_image_produit_title'] . '"> 
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
							';

					}

					$PDO_query_produit_promo_image_3->closeCursor();

					?>

						
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>Fin dans |</span>
							<div data-countdown="<?php echo $produit_promo_3['eg_produit_date_fin_promo']; ?>"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html"><?php echo $produit_promo_3['eg_produit_nom']; ?></a></h5>
							<span class="price">
							<span class="old"><?php echo round($produit_promo_3['eg_produit_prix']); ?>DT</span>
							<span class="new"><?php echo round($produit_promo_3['eg_produit_promo']); ?>DT</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Réf : <span><?php echo $produit_promo_3['eg_produit_reference']; ?></span></li>
								<li>Modéle : <span><?php echo $produit_promo_3['eg_produit_modele']; ?></span></li>
								<li>Qualité : <span><?php echo $produit_promo_3['eg_produit_etoiles']; ?> étoiles</span></li>
							</ul>
						</div>
					</div>
				</div>
				<?php
				$PDO_query_produit_promo_3->closeCursor();
				?>
			</div>

			<div class="col-xl-6 col-lg-6">
				<?php

				$PDO_query_produit_promo_2 = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' AND eg_produit_date_fin_promo <> '' ORDER BY RAND()");
				$PDO_query_produit_promo_2->execute();

				$produit_promo_2 = $PDO_query_produit_promo_2->fetch();				

				?>
				<div class="feature-right-content">
					<div class="image-side">
					<?php

					$PDO_query_produit_promo_image_2 = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
					$PDO_query_produit_promo_image_2->bindParam(":eg_produit_id", $produit_promo_2['eg_produit_id'], PDO::PARAM_INT);
					$PDO_query_produit_promo_image_2->execute();

					while ($produit_promo_image_2 = $PDO_query_produit_promo_image_2->fetch()){

							echo '
							<img src="https://betatest.expert-gaming.tn/ckfinder/userfiles/images/Casque/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR-tunisie-1.jpg" alt="' . $produit_promo_image_2['eg_image_produit_title'] . '"> 
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
							';

					}

					$PDO_query_produit_promo_image_2->closeCursor();

					?>

						
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>Fin dans |</span>
							<div data-countdown="<?php echo $produit_promo_2['eg_produit_date_fin_promo']; ?>"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html"><?php echo $produit_promo_2['eg_produit_nom']; ?></a></h5>
							<span class="price">
							<span class="old"><?php echo round($produit_promo_2['eg_produit_prix']); ?>DT</span>
							<span class="new"><?php echo round($produit_promo_2['eg_produit_promo']); ?>DT</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Réf : <span><?php echo $produit_promo_2['eg_produit_reference']; ?></span></li>
								<li>Modéle : <span><?php echo $produit_promo_2['eg_produit_modele']; ?></span></li>
								<li>Qualité : <span><?php echo $produit_promo_2['eg_produit_etoiles']; ?> étoiles</span></li>
							</ul>
						</div>
					</div>
				</div>
				<?php
				$PDO_query_produit_promo_2->closeCursor();
				?>
				<?php

				$PDO_query_produit_promo_3 = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' AND eg_produit_date_fin_promo <> '' ORDER BY RAND()");
				$PDO_query_produit_promo_3->execute();

				$produit_promo_3 = $PDO_query_produit_promo_3->fetch();				

				?>
				<div class="feature-right-content mt-30px">
				<div class="image-side">
					<?php

					$PDO_query_produit_promo_image_3 = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
					$PDO_query_produit_promo_image_3->bindParam(":eg_produit_id", $produit_promo_3['eg_produit_id'], PDO::PARAM_INT);
					$PDO_query_produit_promo_image_3->execute();

					while ($produit_promo_image_3 = $PDO_query_produit_promo_image_3->fetch()){

							echo '
							<img src="https://betatest.expert-gaming.tn/ckfinder/userfiles/images/Casque/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR-tunisie-1.jpg" alt="' . $produit_promo_image_3['eg_image_produit_title'] . '"> 
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
							';

					}

					$PDO_query_produit_promo_image_3->closeCursor();

					?>

						
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>Fin dans |</span>
							<div data-countdown="<?php echo $produit_promo_3['eg_produit_date_fin_promo']; ?>"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html"><?php echo $produit_promo_3['eg_produit_nom']; ?></a></h5>
							<span class="price">
							<span class="old"><?php echo round($produit_promo_3['eg_produit_prix']); ?>DT</span>
							<span class="new"><?php echo round($produit_promo_3['eg_produit_promo']); ?>DT</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Réf : <span><?php echo $produit_promo_3['eg_produit_reference']; ?></span></li>
								<li>Modéle : <span><?php echo $produit_promo_3['eg_produit_modele']; ?></span></li>
								<li>Qualité : <span><?php echo $produit_promo_3['eg_produit_etoiles']; ?> étoiles</span></li>
							</ul>
						</div>
					</div>
				</div>
				<?php
				$PDO_query_produit_promo_3->closeCursor();
				?>
			</div>
		</div>
	</div>
</div>