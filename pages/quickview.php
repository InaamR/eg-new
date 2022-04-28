<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
     <!-- Basic page needs
	============================================ -->
	<title>Aperçu rapide du produit</title>
	 <meta charset="utf-8" />
     <meta name="robots" content="index, follow" />
   
	 <!-- Mobile specific metas
	============================================ -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	 <!-- Favicon
	============================================ -->
     <link rel="shortcut icon" href="ico/favicon.png" />
	
	 <!-- Google web fonts
	============================================ -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
     <!-- Libs CSS
	============================================ -->
     <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/owl-carousel/owl.carousel.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/lib.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	 <!-- Theme CSS
	============================================ -->
   	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so_megamenu.css" rel="stylesheet" />
     <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so-categories.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/themecss/so-listing-tabs.css" rel="stylesheet" />
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/footer1.css" rel="stylesheet">
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/header1.css" rel="stylesheet">
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/theme.css" rel="stylesheet" id="color_scheme" />
	 <link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/home8.css" rel="stylesheet">
	 <link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/home4.css" rel="stylesheet">
	 <link id="color_scheme" href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/theme.css" rel="stylesheet">
	 <link href="https://<?php echo $_SERVER['SERVER_NAME']?>/css/responsive.css" rel="stylesheet"/>
	
   
	

 </head>

 <body class="res layout-subpage">
     <div id="wrapper" class="wrapper-full ">
	<!-- Main Container  -->
	 <div class="main-container container">
		
		 <div class="row">
			 <!--Middle Part Start-->
			 <div id="content" class="col-md-12 col-sm-12">

				 <div class="product-view row">
					 <div class="left-content-product col-lg-12 col-xs-12">
						 <div class="row">
							 <div class="content-product-left  col-sm-6 col-xs-12 ">

								<!--Large Image Start-->
								<div class="large-image">

									<?php

										$PDO_query_quickview = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
										$PDO_query_quickview->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_quickview->execute();
											while ($quickview_product = $PDO_query_quickview->fetch()){

												echo '

													<img  id="myImg" src="https://betatest.expert-gaming.tn'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '" alt="' . $quickview_product['eg_image_produit_title'] . '" />

												';

											}
										$PDO_query_quickview->closeCursor();

									?>
									 

								</div>
								<!--Large Image End-->
								<!-- The Modal -->
								<div id="myModal" class="modal">

								<!-- The Close Button -->
								<span class="close">&times;</span>

								<!-- Modal Content (The Image) -->
								<img class="modal-content" id="img01">

								<!-- Modal Caption (Image Text) -->
								<div id="caption"></div>
								</div>

								<!--Large Image End-->
								 <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
										<?php

											$PDO_query_quickview = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
											$PDO_query_quickview->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_quickview->execute();
												while ($quickview_product = $PDO_query_quickview->fetch()){

													if(!empty($quickview_product['eg_image_produit_nom'])){

														echo '
															<a data-index="0" class="img thumbnail " data-image="https://betatest.expert-gaming.tn'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '">
															<img src="https://betatest.expert-gaming.tn'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '" alt="' . $quickview_product['eg_image_produit_title'] . '" />
															</a>

														';

													}

												}
											$PDO_query_quickview->closeCursor();

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
														<div class="rating-box">';
														$nb_etoile = $quickview_product_description['eg_produit_etoiles'];
														for ($i=1 ; $i<=$nb_etoile ; $i++)
														{
														echo '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> ';
														}
														echo'
														</div>
													</div>
												</div>
			   
												<div class="product-label form-group">
												';

												if($quickview_product_description['eg_produit_promo'] > 0){

													echo'

													<div class="product_page_price price" itemprop="offerDetails">
														<span class="price-new" itemprop="price">' . $quickview_product_description['eg_produit_promo'] . ' TND</span>
														<span class="price-old">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
											';


												}else{

													echo'
													<div class="product_page_price price" itemprop="offerDetails">
														<span class="price">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
													';

												}



												if($quickview_product_description['eg_produit_dispo'] == 0){

													echo'

													<div class="stock"><span class="status-outofstock">Hors stock</span></div>

												';


												}elseif($quickview_product_description['eg_produit_dispo'] == 1){

													echo'
													
													<div class="stock"><span class="status-stock">Disponible</span></div>

													';

												}elseif($quickview_product_description['eg_produit_dispo'] == 2){

													echo'
													
													<div class="stock"><span class="status-commande">Sur commande 48H</span></div>

													';

												}else{

													echo'
													
													<div class="stock"><span class="status-commande">Sur commande</span></div>

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
														<div class="brand"><span>Marque : </span>' . $quickview_marque['eg_marque_nom'] . '</div>
													';
													
													$PDO_query_quickview_marque->closeCursor();

													

													echo'
													   
													   <div class="reward"><span>Modéle : </span> ' . $quickview_product_description['eg_produit_modele'] . '</div>
													   <div class="model"><span>Réf. Produit : </span>' . $quickview_product_description['eg_produit_reference'] . '</div>
													</div>
												</div>
			   
			   
												<div id="product">
			   
													<div class="form-group box-info-product">
														';

														if($quickview_product_description['eg_produit_dispo'] == 0){

															echo'
															<div class="option quantity">
																<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																	<label>Qt<sup>é</sup> </label>
																	<input type="number" name="quantity" onkeydown="return event.keyCode !== 69" id="quantity'.$quickview_product_description["eg_produit_id"].'" class="form-control" value="1"/>
																	<span class="input-group-addon product_quantity_down">− </span>
																	<span class="input-group-addon product_quantity_up">+ </span>
																</div>
															</div>
															<div class="cart">
															<button class="add_to_cart btn btn-mega btn-lg panier_details" type="button" name="add_to_cart" id="'.$quickview_product_description["eg_produit_id"].'" value="Add to Cart" onclick="cart.add(\'42\', \'1\');" data-toggle="tooltip" title="" value="Bientot disponible" data-loading-text="Loading..." disabled="disabled"><i class="fas fa-cart-plus"></i> <span class="button-group__text">Ajouter au panier</span></button>
															</div>

															';
														}else{
															echo'
															<input type="hidden" name="hidden_name" id="name'.$quickview_product_description["eg_produit_id"].'" value="'.$quickview_product_description["eg_produit_nom"].'" />';

															if($quickview_product_description['eg_produit_promo'] > 0){

																echo'
			
																<input type="hidden" name="hidden_price" id="price'.$quickview_product_description["eg_produit_id"].'" value="'.$quickview_product_description["eg_produit_promo"].'" />
																';
			
			
															}else{
			
																echo'
			
																<input type="hidden" name="hidden_price" id="price'.$quickview_product_description["eg_produit_id"].'" value="'.$quickview_product_description["eg_produit_prix"].'" />
																';
			
															}

															
															
															echo'
															<div class="option quantity">
																<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																	<label>Qt<sup>é</sup> </label>
																	<input type="number" name="quantity" onkeydown="return event.keyCode !== 69" id="quantity'.$quickview_product_description["eg_produit_id"].'" class="form-control" value="1"/>
																	<span class="input-group-addon product_quantity_down">− </span>
																	<span class="input-group-addon product_quantity_up">+ </span>
																</div>
															</div>
															<div class="cart">
															<button class="add_to_cart btn btn-mega btn-lg panier_details" type="button" name="add_to_cart" id="'.$quickview_product_description["eg_produit_id"].'" value="Add to Cart" onclick="cart.add(\'42\', \'1\');" data-toggle="tooltip" title="" value="Bientot disponible" data-loading-text="Loading..."><i class="fas fa-cart-plus"></i> <span class="button-group__text">Ajouter au panier</span></button>
															</div>
																														
															';
														}




														// COMPARE & WISHLIST

														echo'

														<div class="add-to-links wish_comp">
															<ul class="blank list-inline">
																<li class="wishlist">
																	<a class="icon" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-heart"></i>
																	</a>
																</li>
																<li class="compare">
																	<a class="icon" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-exchange"></i>
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

				
			 </div>
			
			
		 </div>
		 <!--Middle Part End-->
	 </div>
	 <!-- //Main Container -->
	
 <style type="text/css">
	#wrapper{box-shadow:none;}
	#wrapper > *:not(.main-container){display: none;}
	#content{margin:0}
	.container{width:100%;}
	
	.product-info .product-view,.left-content-product,.box-info-product{margin:0;}
	.left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

	.left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
	.add-to-links ul li{margin:0;}
	
</style></div>

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
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/application_interne.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/homepage.js"></script>
	<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME']?>/js/themejs/so_megamenu.js"></script>
 	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		modal.style.display = "none";
		}		
	</script>

</body>

</html>