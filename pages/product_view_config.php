<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Expert-Gaming | </title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="../ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- font awesome
	============================================ -->
	<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
	<link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../css/themecss/lib.css" rel="stylesheet">
	<link href="../js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Theme CSS
	============================================ -->
	<link href="../css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="../css/themecss/so-categories.css" rel="stylesheet">
	<link href="../css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="../css/header8.css" rel="stylesheet">
	<link href="../css/footer5.css" rel="stylesheet">
	<link id="color_scheme" href="../css/home8.css" rel="stylesheet">
	<link id="color_scheme" href="../css/home4.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="../css/theme.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/configurateur.css" rel="stylesheet">


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
				<li><a href="#">Casque</a></li>
				<li><a href="#">Casque gaming</a></li>

			</ul>

			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">

					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">

								<!--Large Image Start-->

										<?php

											$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
											$PDO_query_verif_product->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_verif_product->execute();
												while ($verif_product = $PDO_query_verif_product->fetch()){

													echo '
													<div class="large-image">
														<img itemprop="image" class="product-image-zoom" data-zoom-image="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" src="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '" alt="' . $verif_product['eg_image_produit_title'] . '">
													</div>

													';

												}
											$PDO_query_verif_product->closeCursor();

										?>

								<!--Large Image End-->
									

									<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik">
										<i class="fa fa-youtube-play"></i>
									</a>

									<div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">


										<?php

											$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
											$PDO_query_verif_product->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_verif_product->execute();
												while ($verif_product = $PDO_query_verif_product->fetch()){

													echo '
													<a data-index="' . $verif_product['eg_image_produit_id'] . '" class="img thumbnail " data-image="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '">
													<img src="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '" alt="' . $verif_product['eg_image_produit_title'] . '">
													</a>

													';

												}
											$PDO_query_verif_product->closeCursor();

										?>


										

									</div>

								</div>

								<?php

										$PDO_query_quickview_product_description = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
										$PDO_query_quickview_product_description->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_quickview_product_description->execute();
											while ($quickview_product_description = $PDO_query_quickview_product_description->fetch()){

												echo '
												<div class="content-product-right col-sm-6 col-xs-12">
												<div class="title-product">
													<h1>' . $quickview_product_description['eg_produit_nom'] . '</h1>
												</div>
												<!-- Review ---->
												<div class="box-review form-group">
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
													<a class="reviews_button" href="quickview.php.html" onclick="$(\'a[href=\'#tab-review\']\').trigger(\'click\'); return false;">0 Avis</a>	
												</div>
			   
												<div class="product-label form-group">
												';

												if($quickview_product_description['eg_produit_promo'] > 0){

													echo'

													<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="https://data-vocabulary.org/Offer">
														<span class="price-new" itemprop="price">' . $quickview_product_description['eg_produit_promo'] . ' TND</span>
														<span class="price-old">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
											';


												}else{

													echo'
													<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="https://data-vocabulary.org/Offer">
														<span class="price">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
													';

												}



												if($quickview_product_description['eg_produit_disponibilite'] == 0){

													echo'

													<div class="stock"><span class="status-outofstock">Hors stock</span></div>

											';


												}else{

													echo'
													
													<div class="stock"><span class="status-stock">Disponible</span></div>

													';

												}
											
													echo'
													</div>

												<div class="product-box-desc">
													<div class="inner-box-desc">
													';


													$PDO_query_quickview_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id = :eg_marque_id");
													$PDO_query_quickview_marque->bindParam(":eg_marque_id", $quickview_product_description['eg_marque_id']);
													$PDO_query_quickview_marque->execute();
													$quickview_marque = $PDO_query_quickview_marque->fetch();

													echo'
														<div class="brand"><span>Marque: </span><a href="#">' . $quickview_marque['eg_marque_nom'] . '</a> </div>
													';
													
													$PDO_query_quickview_marque->closeCursor();

													

													echo'
													   
													   <div class="reward"><span>Modéle: </span> ' . $quickview_product_description['eg_produit_modele'] . '</div>
													   <div class="model"><span>Réf. Produit: </span>' . $quickview_product_description['eg_produit_reference'] . '</div>
													</div>
												</div>
			   
			   
												<div id="product">
													<h4>Switch clavier</h4>
													<div class="image_option_type form-group required">
														<label class="control-label">Couleur</label>
														<ul class="product-options clearfix"id="input-option231">
															<li class="radio">
																<label>
																	<input class="image_radio" type="radio" name="option[231]" value="33">
																	<img src="../image/demo/colors/blue.jpg" data-original-title="blue" class="img-thumbnail icon icon-color">
																	<i class="fa fa-check"></i>
																	<label> </label>
																</label>
															</li>
															<li class="radio">
																<label>
																	<input class="image_radio" type="radio" name="option[231]" value="34"> 
																	<img src="../image/demo/colors/brown.jpg" data-original-title="brown" class="img-thumbnail icon icon-color">
																	<i class="fa fa-check"></i>
																	<label> </label>
																</label>
															</li>
															<li class="radio">
																<label>
																	<input class="image_radio" type="radio" name="option[231]" value="35">
																	<img src="../image/demo/colors/green.jpg" data-original-title="green" class="img-thumbnail icon icon-color">
																	<i class="fa fa-check"></i>
																	<label> </label>
																</label>
															</li>
															<li class="selected-option">
															</li>
														</ul>
													</div>

													<div class="form-group box-info-product">
														<div class="option quantity">
															<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																<label>Qt<sup>é</sup> </label>
																<input class="form-control" type="text" name="quantity" value="1"/>
																<input type="hidden" name="product_id" value="50"/>
																<span class="input-group-addon product_quantity_down">− </span>
																<span class="input-group-addon product_quantity_up">+ </span>
															</div>
														</div>
														';

														if($quickview_product_description['eg_produit_disponibilite'] == 0){

															echo'
		
															<div class="cart">
															<input type="button" data-toggle="tooltip" title="" value="Ajouter au panier" onclick="cart.add(\'42\', \'1\');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" disabled="disabled" />
															</div>
		
															';
		
		
														}else{
		
															echo'
															
															<div class="cart">
															<input type="button" data-toggle="tooltip" title="" value="Ajouter au panier" onclick="cart.add(\'42\', \'1\');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" />
															</div>
		
															';
		
														}

															
														echo'
														
														<div class="add-to-links wish_comp">
															<ul class="blank list-inline">
																<li class="wishlist">
																	<a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add(\'50\');" data-original-title="Ajouter aux favoris"><i class="fa fa-heart"></i>
																	</a>
																</li>
																<li class="compare">
																	<a class="icon" data-toggle="tooltip" title="" onclick="compare.add(\'50\');" data-original-title="Comparer"><i class="fa fa-exchange-alt"></i>
																	</a>
																</li>
															</ul>
														</div>
			   
													</div>
			   
												</div>
			   
												<div class="com-sm-6">
			   
											   <!--Blockquote Part Start-->
											   <h2 class="text-uppercase">DESCRIPTION</h2>
											   <blockquote>
												   <p>' . $quickview_product_description['eg_produit_description'] . '
												   </p>
											   </blockquote>
											   <!--Blockquote Part End-->
			   
												</div>
												<!-- end box info product -->
			   
											</div>
											';

									}
									$PDO_query_quickview_product_description->closeCursor();
								?>




							</div>
						</div>

					</div>

					<!-- Product Tabs -->
					<div class="producttab ">
						<div class="tabsslider  vertical-tabs col-xs-12">
							<ul class="nav nav-tabs col-lg-2 col-sm-3">
								<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
								<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Composition</a></li>
								<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Avis (1)</a></li>
								<!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li> -->
							</ul>
							<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
												<p>
												' . $product_description['eg_produit_description'] . '
												</p>
											</div>

							<?php

								/*$PDO_query_product_description = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
								$PDO_query_product_description->bindParam(":eg_produit_id", $_GET['produit_id']);
								$PDO_query_product_description->execute();
									while ($product_description = $PDO_query_product_description->fetch()){

										echo '

											<div id="tab-1" class="tab-pane fade active in">
												<p>
												' . $product_description['eg_produit_description'] . '
												</p>
											</div>

										';

								}
								$PDO_query_product_description->closeCursor();
*/
						?>

											<div id="tab-review" class="tab-pane fade">
												<form>
													<div id="review">
														<table class="table table-striped table-bordered">
															<tbody>
																<tr>
																	<td style="width: 50%;"><strong>Super Administrator</strong>
																	</td>
																	<td class="text-right">01/06/2021</td>
																</tr>
																<tr>
																	<td colspan="2">
																		<p>Best this product opencart</p>
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack">
																					<i class="fa fa-star-o fa-stack-1x"></i>
																				</span>
																				<span class="fa fa-stack">
																					<i class="fa fa-star fa-stack-1x"></i>
																					<i class="fa fa-star-o fa-stack-1x"></i>
																				</span>
																				<span class="fa fa-stack">
																					<i class="fa fa-star fa-stack-1x"></i>
																					<i class="fa fa-star-o fa-stack-1x"></i>
																				</span>
																				<span class="fa fa-stack">
																					<i class="fa fa-star fa-stack-1x"></i>
																					<i class="fa fa-star-o fa-stack-1x"></i>
																					</span>
																				<span class="fa fa-stack">
																					<i class="fa fa-star-o fa-stack-1x"></i>
																				</span>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<div class="text-right"></div>
													</div>
													<h2 id="review-title">Donnez votre avis</h2>
													<div class="contacts-form">

														<div class="form-group">
															<span class="icon icon-user"></span>
															<input type="text" name="name" class="form-control" value="Your Name"
																onblur="if (this.value == '') {this.value = \'Your Name\';}"
																onfocus="if(this.value == \'Your Name\') {this.value = '';}">
														</div>

														<div class="form-group">
															<span class="icon icon-bubbles-2"></span>
															<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = \'Your Review\';}" onfocus="if(this.value == \'Your Review\') {this.value = '';}">Your Review</textarea>
														</div>


														<div class="form-group">
															<b>Rating</b> <span>Bad</span>&nbsp;
															<input type="radio" name="rating" value="1"> &nbsp;
															<input type="radio" name="rating" value="2"> &nbsp;
															<input type="radio" name="rating" value="3"> &nbsp;
															<input type="radio" name="rating" value="4"> &nbsp;
															<input type="radio" name="rating" value="5"> &nbsp;
															<span>Good</span>
														</div>

														<div class="buttons clearfix">
															<a id="button-review" class="btn buttonGray">Continue</a>
														</div>
													</div>
												</form>
											</div>

											<div id="tab-4" class="tab-pane fade">
												<!-- Accordion Item begin -->
												<div class="accordion-item">
													<div class="accordion-wrapper">
														<div class="accordion-content wrapper col-sm-12" id="accordionContent">
															<div class="accordion-content-left">
																<div class="accordion-image">
																	<img src="../EXPERT_LOGO/LD0005368478_2.jpg" alt="">
																</div>
																<div class="accordion-desc">
																	<h4>Lorem ipsum dolor sit.</h4>
																	<!-- <a href="#">Fiche produit</a> -->
																</div>
															</div>
															<div class="accordion-content-right action">
																<span class="quantité">X1</span>
															</div>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
												<!-- Accordion Item end -->
											</div>

									<!-- <div id="tab-5" class="tab-pane fade">
											<h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
											<p>Lorem ipsum dolor sit amet, consetetur
												sadipscing elitr, sed diam nonumy eirmod
												tempor invidunt ut labore et dolore
												magna aliquyam erat, sed diam voluptua.
												At vero eos et accusam et justo duo
												dolores et ea rebum. Stet clita kasd
												gubergren, no sea takimata sanctus est
												Lorem ipsum dolor sit amet. Lorem ipsum
												dolor sit amet, consetetur sadipscing
												elitr, sed diam nonumy eirmod tempor
												invidunt ut labore et dolore magna aliquyam
												erat, sed diam voluptua. 
											</p>

											<p>At vero eos et accusam et justo duo dolores
											et ea rebum. Stet clita kasd gubergren,
											no sea takimata sanctus est Lorem ipsum
											dolor sit amet. Lorem ipsum dolor sit
											amet, consetetur sadipscing elitr.</p>

											<ul class="marker-simple-list two-columns">
												<li>Nam liberempore</li>
												<li>Cumsoluta nobisest</li>
												<li>Eligendptio cumque</li>
												<li>Nam liberempore</li>
												<li>Cumsoluta nobisest</li>
												<li>Eligendptio cumque</li>
											</ul>

											<p>Sed diam nonumy eirmod tempor invidunt
											ut labore et dolore magna aliquyam erat,
											sed diam voluptua. At vero eos et accusam
											et justo duo dolores et ea rebum. Stet
											clita kasd gubergren, no sea takimata
											sanctus est Lorem ipsum dolor sit amet.</p>
									</div> -->

							</div>
						</div>
					</div>
					<!-- //Product Tabs -->

					<!-- Related Products -->
					<div class="related titleLine products-list grid module ">
						<h3 class="modtitle">Autres produits de la marque <span class="marque"><?php echo
														$quickview_marque['eg_marque_nom']; ?></span>
													</h3>
						<div class="releate-products ">
								<?php

										$PDO_query_produits_lies = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND   eg_produit_id != :eg_produit_id ");
										$PDO_query_produits_lies->bindParam(":eg_marque_id", $quickview_marque['eg_marque_id']);
										$PDO_query_produits_lies->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_produits_lies->execute();
											while ($produits_lies = $PDO_query_produits_lies->fetch()){

												echo '

												<div class="product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container second_img ">
														';
														$PDO_query_produits_lies_img = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
														$PDO_query_produits_lies_img->bindParam(":eg_produit_id", $produits_lies['eg_produit_id'], PDO::PARAM_INT);
														$PDO_query_produits_lies_img->execute();
															while ($produits_lies_img = $PDO_query_produits_lies_img->fetch()){

																echo '

																<img src="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$produits_lies_img['eg_image_produit_nom'].'"
																title="' . $produits_lies_img['eg_image_produit_title'] . '" class="img-responsive" />


																';

															}
														$PDO_query_produits_lies_img->closeCursor();
																		
														echo'
															
														</div>
														<!--Sale Label-->
														';

															if($produits_lies['eg_produit_promo'] > 0){

																echo '
																<span class="label label-sale">Promotion</span>
																';
															}	

														echo'
														<!--full quick view block-->
																	<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.php?produit_id='.$produits_lies['eg_produit_id'].'">Aperçu rapide</a>
																	<!--end full quick view block-->
													</div>
				
				
													<div class="right-block">
													
														<div class="caption">
															<h4><a href="https://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$produits_lies['eg_produit_id'].'">' . $produits_lies['eg_produit_nom'] . '</a></h4>
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack">
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																</div>
															</div>
				
															<div class="price">
															';

															if($produits_lies['eg_produit_promo'] > 0){

																echo '
																<span class="price-new">' . $produits_lies['eg_produit_promo'] . ' TND</span>
																<span class="price-old">' . $produits_lies['eg_produit_prix'] . ' TND</span>
																';
																
															}else{

																echo '
																<span class="price">' . $produits_lies['eg_produit_prix'] . ' TND</span>
																';
																
															}
	

															echo'
															</div>
															<div class="description item-desc hidden">
																<p>' . $produits_lies['eg_produit_description'] . '</p>
															</div>
														</div>
				
														<div class="button-group">
															<button class="addToCart" type="button" data-toggle="tooltip" title="Ajouter au panier" onclick="cart.add(\'42\', \'1\');">
																<i class="fa fa-shopping-cart"></i> 
																<span class="hidden-xs">Ajouter au panier</span>
															</button>
															<button class="wishlist" type="button" data-toggle="tooltip" title="liste des favories" onclick="wishlist.add(\'42\');">
																<i class="fa fa-heart"></i>
															</button>
															<button class="compare" type="button" data-toggle="tooltip" title="Comparer ce produit" onclick="compare.add(\'42\');">
																<i class="fa fa-exchange-alt"></i>
															</button>
														</div>
													</div><!-- right block -->
				
														</div>
													</div>
														';
													}
													$PDO_query_produits_lies->closeCursor();
								?>
						</div>
					</div>
					<!-- end Related  Products-->

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
	<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/themejs/libs.js"></script>
	<script type="text/javascript" src="../js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="../js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="../js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="../js/themejs/application.js"></script>
	<script type="text/javascript" src="../js/themejs/homepage.js"></script>
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>

	<script>$(document).ready(function(){
		$('.large-image').magnificPopup({
		items: [
			<?php

						$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
						$PDO_query_verif_product->bindParam(":eg_produit_id", $_GET['produit_id']);
						$PDO_query_verif_product->execute();

							while ($verif_product = $PDO_query_verif_product->fetch()){

									echo "
											{src: 'https://".$_SERVER['SERVER_NAME']."/ExpertGaming/admin/upload_images/".$verif_product['eg_image_produit_nom']."' },
										";

							}

						$PDO_query_verif_product->closeCursor();

			?>
			
		],
		gallery: { enabled: true, preload: [0,2] },
		type: 'image',
		mainClass: 'mfp-fade',
		callbacks: {
			open: function() {
				
				var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));
				var magnificPopup = $.magnificPopup.instance;
				magnificPopup.goTo(activeIndex);
			}
		}
	});
});
	</script>


</body>

</html>