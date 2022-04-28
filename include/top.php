<header>
	<!-- Header top area start -->
	<div class="header-top">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col">
					<div class="welcome-text">
						<p>Retours entièrement gratuits dans toute la Tunisie</p>
					</div>
				</div>
				<div class="col d-none d-lg-block">
					<div class="top-nav">
						<ul>
							<li><a href="tel:58554255"><i class="fa fa-phone"></i> 58 554 255</a></li>
							<li><a href="mailto:contact@expert-gaming.tn"><i class="fa fa-envelope-o"></i> contact@expert-gaming.tn</a></li>
							<li><a href="#"><i class="fa fa-user"></i> Compte</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header top area end -->
	<!-- Header action area start -->
	<div class="header-bottom  d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-3 col">
					<div class="header-logo">
						<a href="<?php echo $url?>"><img src="<?php echo $url?>assets/images/logo/logo.png" alt="Site Logo" width="120" /></a>
					</div>
				</div>
				<div class="col-lg-6 d-none d-lg-block">
					<div class="search-element">
						<form action="<?php echo $url?>Recherche">
							<input type="text" placeholder="Saisissez des mots clés à rechercher ..." />
							<button><i class="pe-7s-search"></i></button>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col">
					<div class="header-actions">
						<!-- Single Wedge Start -->
						<a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
							<i class="pe-7s-like"></i>
						</a>
						<!-- Single Wedge End -->
						<a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
							<i class="pe-7s-shopbag"></i>
							<span class="header-action-num">01</span>
							<!-- <span class="cart-amount">€30.00</span> -->
						</a>
						<a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
							<i class="pe-7s-menu"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header action area end -->
	<!-- Header action area start -->
	<div class="header-bottom d-lg-none sticky-nav style-1">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-3 col">
					<div class="header-logo">
						<a href="<?php echo $url?>"><img src="<?php echo $url?>assets/images/logo/logo.png" alt="Site Logo"  width="90"/></a>
					</div>
				</div>
				<div class="col-lg-6 d-none d-lg-block">
					<div class="search-element">
						<form action="<?php echo $url?>Recherche">
							<input type="text" placeholder="Saisissez des mots clés à rechercher ..." />
							<button><i class="pe-7s-search"></i></button>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col">
					<div class="header-actions">
						<!-- Single Wedge Start -->
						<a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
							<i class="pe-7s-like"></i>
						</a>
						<!-- Single Wedge End -->
						<a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
							<i class="pe-7s-shopbag"></i>
							<span class="header-action-num">01</span>
							<!-- <span class="cart-amount">€30.00</span> -->
						</a>
						<a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
							<i class="pe-7s-menu"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header action area end -->
	<!-- header navigation area start -->
	<div class="header-nav-area d-none d-lg-block sticky-nav">
		<div class="container">
			<div class="header-nav">
				<div class="main-menu position-relative">
					<ul>
						<li class="dropdown"><a href="<?php echo $url?>">Accueil</a></li>                                
						<?php

							$PDO_query_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 ORDER BY eg_menu_ordre ASC");
							$PDO_query_menu->execute();													
							while ($menu = $PDO_query_menu->fetch()){
													
									$PDO_query_count_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_categorie_id ASC");
									$PDO_query_count_menu->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

									$PDO_query_count_menu->execute();

									$count_menu = $PDO_query_count_menu->fetchColumn();
									$PDO_query_count_menu->closeCursor();

									if($count_menu == 0){

										if($menu['eg_menu_id'] == 227){

											echo '
											<li class="dropdown"><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'">' . $menu['eg_menu_titre'] . '</a></li>';

										}else{
											
											echo '
											<li class="dropdown"><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'">' . $menu['eg_menu_titre'] . '</a></li>';

										}

									}else{
													
										echo '
										
										
												<li class="dropdown position-static"><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'">' . $menu['eg_menu_titre'] . '</a>
												<ul class="mega-menu d-block">
												<li class="d-flex flex-wrap align-content-between">
												';

													$PDO_query_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id
													ORDER BY eg_categorie_id ASC");

													$PDO_query_categorie->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

													$PDO_query_categorie->execute();
												
													while ($categorie = $PDO_query_categorie->fetch()){

														echo '
														<ul class="d-block">
														<li class="title"><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/cat/'.$categorie['eg_categorie_id'].'">'.$categorie['eg_categorie_nom'].'</a></li>';



														$PDO_query_sous_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_sous_categorie_id_categorie
														ORDER BY eg_sous_categorie_id ASC");

														$PDO_query_sous_categorie->bindParam(":eg_sous_categorie_id_categorie", $categorie['eg_categorie_id'], PDO::PARAM_INT);

														$PDO_query_sous_categorie->execute();
													
														while ($sous_categorie = $PDO_query_sous_categorie->fetch()){

															echo '
															<li><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/scat/'.$sous_categorie['eg_sous_categorie_id'].'">'.$sous_categorie['eg_sous_categorie_nom'].'</a></li>';

														}

														$PDO_query_sous_categorie->closeCursor();
														echo '</ul>';
														
													}

													$PDO_query_categorie->closeCursor();
										echo '</li>
										</ul></li>';

									}
							}
							$PDO_query_menu->closeCursor();

						?>
						<li class="dropdown"><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Promotions">Promotions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- header navigation area end -->
	<div class="mobile-search-box d-lg-none">
		<div class="container">
			<!-- mobile search start -->
			<div class="search-element max-width-100">
				<form action="<?php echo $url?>Recherche">
					<input type="text" placeholder="Saisissez des mots clés à rechercher ..." />
					<button><i class="pe-7s-search"></i></button>
				</form>
			</div>
			<!-- mobile search start -->
		</div>
	</div>
</header>