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
			<?php

				$PDO_query_produit_promo = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' AND eg_produit_date_fin_promo <> '' ORDER BY RAND()");
				$PDO_query_produit_promo->execute();

				$produit_promo = $PDO_query_produit_promo->fetch();
				
					

			?>
			<div class="col-xl-6 col-lg-6 mb-md-35px mb-lm-35px">
				<div class="single-feature-content">

					<div class="feature-image">
					<?php

					$PDO_query_produit_promo_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
					$PDO_query_produit_promo_image->bindParam(":eg_produit_id", $produit_promo['eg_produit_id'], PDO::PARAM_INT);
					$PDO_query_produit_promo_image->execute();

					while ($produit_promo_image = $PDO_query_produit_promo_image->fetch()){

							echo '
							<img src="https://betatest.expert-gaming.tn/ckfinder/userfiles/images/Casque/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR/MICRO-CASQUE-GAMER-WHITE-SHARK-CARACAL-GH-1949-NOIR-tunisie-1.jpg" alt="' . $produit_promo_image['eg_image_produit_title'] . '">
							';

					}

					$PDO_query_produit_promo_image->closeCursor();

					?>
						

					</div>
					
					<div class="bottom-content">
						<div class="deal-timing">
							<div data-countdown="<?php echo $produit_promo['eg_produit_date_fin_promo']; ?>"></div>
						</div>
						<a href="single-product-variable.html" class="btn btn-primary  m-auto">Découvrir</a>
					</div>
					<div class="top-content">
						<h4 class="title"><a href="single-product.html"><?php echo $produit_promo['eg_produit_nom']; ?> </a></h4>
						<span class="price">
							<span class="old"><del><?php echo round($produit_promo['eg_produit_prix']); ?>DT</del></span>
							<span class="new"><?php echo round($produit_promo['eg_produit_promo']); ?>DT</span>
						</span>
					</div>
				</div>
			</div>
			<?php
			$PDO_query_produit_promo->closeCursor();
			?>
			<div class="col-xl-6 col-lg-6">
				<div class="feature-right-content">
					<div class="image-side">
						<img src="assets/images/feature-image/2.webp" alt=""> 
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>End In:</span>
							<div data-countdown="2021/09/15"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
							<span class="price">
					<span class="old">$48.50</span>
							<span class="new">$38.50</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Predecessor : <span>None.</span></li>
								<li>Support Type : <span>Neutral.</span></li>
								<li>Cushioning : <span>High Energizing.</span></li>
								<li>Total Weight : <span> 300gm</span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="feature-right-content mt-30px">
					<div class="image-side">
						<img src="assets/images/feature-image/3.webp" alt="">
						<button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
							class="pe-7s-shopbag"></i></button>
					</div>
					<div class="content-side">
						<div class="deal-timing">
							<span>End In:</span>
							<div data-countdown="2021/09/15"></div>
						</div>
						<div class="prize-content">
							<h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
							<span class="price">
					<span class="old">$48.50</span>
							<span class="new">$38.50</span>
							</span>
						</div>
						<div class="product-feature">
							<ul>
								<li>Predecessor : <span>None.</span></li>
								<li>Support Type : <span>Neutral.</span></li>
								<li>Cushioning : <span>High Energizing.</span></li>
								<li>Total Weight : <span> 300gm</span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>