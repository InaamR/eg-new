<?php

include("../config/fonction.php");

		
		if(isset($_POST['categorieid'])){
			$categorie_id = $_POST['categorieid'];
		}else{
			$categorie_id = '';
		}
		if(isset($_POST['recherche'])){
			$recherche = "%".trim(strip_tags($_POST['recherche']))."%";
		}else{
			$recherche = "";
		}
		
		
		if(isset($_GET['page']) && !empty($_GET['page'])){
			$currentPage = (int) strip_tags($_GET['page']);
		}else{
			$currentPage = 1;
		}
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Recherche</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME']?>/ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font awesome
	============================================ -->
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/bootstrap/css/bootstrap.css">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/lib.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Theme CSS
	============================================ -->
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so-categories.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/header8.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/footer5.css" rel="stylesheet">
	<link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/home8.css" rel="stylesheet">
	<link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/home4.css" rel="stylesheet">
	<link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/theme.css" rel="stylesheet">


</head>

<body class="res layout-subpage">


	<div id="wrapper" class="wrapper-full">

		<!-- Header Container  -->
		<?php
				include("../include/top.php");
			?>
		<!-- //Header Container  -->


		<!-- Main Container  -->
        <div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="Accueil"><i class="fa fa-home"></i></a></li>
				<li>Résultat de votre Recherche</li>
			</ul>

			<div class="row">



				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-8">
					<div class="products-category">

						<!-- Pagination -->
						<div class="product-filter filters-panel">
							<div class="row">
								<div class="col-md-2 visible-lg">
									<div class="view-mode">
										<div class="list-view">
											<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip">
                                                <i class="fa fa-th"></i>
                                            </button>
											<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List">
                                                <i class="fa fa-th-list"></i>
                                            </button>
                                        </div>
								    </div>
								</div>
								</div>
							</div>
						</div>
						<!-- //end Pagination -->
						<!--changed listings-->
						<div class="products-list row grid">



						<?php

							
							$mot = "cc";
							$mot_2 = "ss";
							$str = $categorie_id;
							
							

							if(strpos($str, $mot) !== false && $recherche == ''){
								$cat = substr($str, -2);
								$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :cat ORDER BY eg_produit_prix ASC");
								$PDO_query_listes_produits->bindParam(":cat", $cat, PDO::PARAM_INT);
								
							}elseif(strpos($str, $mot) !== false && $recherche != ''){
								$cat = substr($str, -2);
								$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_nom LIKE :rech AND eg_categorie_id = :cat ORDER BY eg_produit_prix ASC");
								$PDO_query_listes_produits->bindParam(":cat", $cat, PDO::PARAM_INT);
								$PDO_query_listes_produits->bindParam(":rech", $recherche, PDO::PARAM_STR);
								
							}elseif(strpos($str, $mot_2) !== false && $recherche == ''){
								$scat = substr($str, -2);
								$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :scat ORDER BY eg_produit_prix ASC");
								$PDO_query_listes_produits->bindParam(":scat", $scat, PDO::PARAM_INT);
								
							}elseif(strpos($str, $mot_2) !== false && $recherche != ''){
								$scat = substr($str, -2);
								$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_nom LIKE :rech AND eg_sous_categorie_id = :scat ORDER BY eg_produit_prix ASC");
								$PDO_query_listes_produits->bindParam(":scat", $scat, PDO::PARAM_INT);
								$PDO_query_listes_produits->bindParam(":rech", $recherche, PDO::PARAM_STR);
								
							}else{
								$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_nom LIKE :rech ORDER BY eg_produit_prix ASC");
								$PDO_query_listes_produits->bindParam(":rech", $recherche, PDO::PARAM_STR);
								
							}
					
								

							$PDO_query_listes_produits->execute();
							$produit_existe = $PDO_query_listes_produits->rowCount();

									if($produit_existe == 0){

										echo' <div class="info-produit">Aucun produit ne correspond à votre recherche</div>';

									}else{
											while ($produits = $PDO_query_listes_produits->fetch()){

												echo '

													<div class="product-layout col-md-3 col-sm-6 col-xs-12">
													<div class="product-item-container">
																
												';

														$PDO_query_listes_produits_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
														$PDO_query_listes_produits_image->bindParam(":eg_produit_id", $produits['eg_produit_id'], PDO::PARAM_INT);
														$PDO_query_listes_produits_image->execute();

														while ($produits_image = $PDO_query_listes_produits_image->fetch()){

																echo '
																	<div class="left-block">
																		<div class="product-image-container lazy second_img">
																			<img data-src="https://betatest.expert-gaming.tn' . $produits_image['eg_image_produit_nom'] . '" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="' . $produits_image['eg_image_produit_title'] . '" class="img-responsive">
																		</div>
																';
																
																	if($produits['eg_produit_promo'] > 0){

																		echo '
																		<span class="label label-sale-produits">Promotion</span>
																		';
																	}	

																	if($produits['eg_produit_new'] == 1){

																		echo '
																		<span class="label label-new-produits">Nouveau</span>
																		';
																	}

																	if($produits['eg_produit_promo'] > 0 & $produits['eg_produit_new'] == 1){

																		echo '
																		<span class="label label-new-produits">Nouveau</span>
																		<span class="label label-sale-produits">Promotion</span>
																		';
																	}	

																echo'
																		<!--full quick view block-->
																		<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Quickview/'.$produits['eg_produit_id'].'">Aperçu rapide</a>
																		<!--end full quick view block-->
																	</div>
																';

														}

														$PDO_query_listes_produits_image->closeCursor();												

																echo'
																		<div class="right-block">
																		<div class="caption">
																			<h4><a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$produits['eg_produit_id'].'">';
																			
																			
																			$text = wordwrap($produits['eg_produit_nom'], 80, "***", true); // insertion de marqueurs ***

																			$tcut = explode("***", $text); // on créé un tableau à partir des marqueurs ***
																			$part1 = $tcut[0]; // la partie à mettre en exergue
																			$part2 = '';
																			for($i=1; $i<count($tcut); $i++) {
																				$part2 .= $tcut[$i].' ';
																			}
																			$part2 = trim($part2); //suppression du dernier espace dans la partie de texte restante
																			echo $part1;
																			
																			
																			
																			
																			
																			echo'
																			</a></h4>  
																			<h5>Référence: ' . $produits['eg_produit_reference'] . '</h5>      
																			<div class="ratings">
																				<div class="rating-box">';
																				$nb_etoile = $produits['eg_produit_etoiles'];
																				for ($i=1 ; $i<=$nb_etoile ; $i++)
																				{
																				echo '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> ';
																				}
																				echo'
																				</div>
																			</div>

																';

																if($produits['eg_produit_dispo'] == 0){

																	echo'

																		<div class="stock"><span class="status-outofstock">Hors stock</span></div>

																	';


																}elseif($produits['eg_produit_dispo'] == 1){

																	echo'
																	
																		<div class="stock"><span class="status-stock">Disponible</span></div>

																	';

																}elseif($produits['eg_produit_dispo'] == 2){
	
																	echo'
																	
																		<div class="stock"><span class="status-commande">Sur commande 48H</span></div>
				
																	';
				
																}else{
				
																	echo'
																	
																		<div class="stock"><span class="status-commande">Sur commande</span></div>
				
																	';
				
																}
																
																	if($produits['eg_produit_promo'] == 0){

																echo '
																	<div class="price">
																		<span class="price">' . $produits['eg_produit_prix'] . ' TND</span><br>
																		<span class="price">&nbsp</span>	
																	</div>
																';

																	}else{

																echo'
																	<div class="price">
																		<span class="price-new">' . $produits['eg_produit_promo'] . ' TND</span><br>
																		<span class="price-old">' . $produits['eg_produit_prix'] . ' TND</span>
																	</div>
																';

																}
																echo'
																					
																				<div class="description item-desc hidden">
																					<p>' . $produits['eg_produit_description'] . '</p>
																				</div>
																		</div>
																		
																		<div class="button-group">

																		';

																		if($produits['eg_produit_dispo'] == 0){

																			echo'
																			
																			';
																		}else{
																			echo'
																			<input type="hidden" name="hidden_name" id="name'.$produits["eg_produit_id"].'" value="'.$produits["eg_produit_nom"].'" />
																			<input type="hidden" name="hidden_price" id="price'.$produits["eg_produit_id"].'" value="'.$produits["eg_produit_prix"].'" />
																			<div class="quantity">
															<input type="number" name="quantity" onkeydown="return event.keyCode !== 69" id="quantity'.$produits["eg_produit_id"].'" class="form-control-panier" min="1" step="1" value="1">
															</div>
																			<button class="addToCart addToCart--notext add_to_cart" type="button" name="add_to_cart" id="'.$produits["eg_produit_id"].'" value="Add to Cart" onclick="cart.add(\'42\', \'1\');"><i class="fas fa-cart-plus"></i> <span class="button-group__text">Ajouter au panier</span></button>
																			
																			';
																		}

														echo'
																			<button class="wishlist" type="button" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-heart"></i></button>
																			<button class="compare" type="button" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-exchange-alt"></i></button>
																		</div>
																	</div><!-- right block -->
															
																';
																							
																echo'
																						
																	</div>
																	</div>

																';
																

											}
									}

							$PDO_query_listes_produits->closeCursor();

						?>





						</div>
						<!--// End Changed listings-->

					</div>

				</div>

			</div>
			<!--Middle Part End-->
		</div>
		<!-- //Main Container -->

		<!-- Footer Container -->
		<?php
			include("../include/footer.php");
		?>
		<!-- //end Footer Container -->

	</div>


	<!-- Include Libs & Plugins
============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/libs.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/application_interne.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/homepage.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/so_megamenu.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>

</html>