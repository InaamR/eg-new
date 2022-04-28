<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Configurateur</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font awesome
	============================================ -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/header8.css" rel="stylesheet">
	<link href="css/footer5.css" rel="stylesheet">
	<link id="color_scheme" href="css/home8.css" rel="stylesheet">
	<link id="color_scheme" href="css/home4.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/configurateur.css" rel="stylesheet">


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
					<li>Configurateur</li>
				</ul>
				
				<div class="row">
					
					<div class="configurateur">
						<!--Middle Part Start-->
						<div id="content" class="module titleLine col-sm-7">
							<!-- composants Begin -->
							<div clas="composants">
								<h3 class="modtitle modtitle--small">Composants</h2>
								<div class="accordion-panel mt-40">
									<div class="accordion-list">
										
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-1"></span>
													<h3 class="title">Processeurs</h3>
												</div>
												<div class="add-selection" id="addSelection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent"  style="opacity: 0;">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
										
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem" data-toggle="modal" data-target="#myModal">
												<div class="accordion-heading">
												<span class="ico-2"></span>
													<h3 class="title">Carte mère</h3>
												</div>
												<div class="add-selection">
												<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-3"></span>
													<h3 class="title">Carte graphique</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-4"></span>
													<h3 class="title">Alimentation</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-5"></span>
													<h3 class="title">Refroidissement CPU</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-6"></span>
													<h3 class="title">Boîtier</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-7"></span>
													<h3 class="title">Mémoire vive</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-8"></span>
													<h3 class="title">SSD</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
	
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-9"></span>
													<h3 class="title">HDD</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
									</div>
								</div>
							</div>
							<!-- composants End -->
	
							<!-- Accessoires Begin -->
							<div class="accessoires">
								<h3 class="modtitle modtitle--small">Périphériques</h2>
								<div class="accordion-panel mt-40">
									<div class="accordion-list">
										
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-10"></span>
													<h3 class="title">Souris</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
										
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-11"></span>
													<h3 class="title">Claviers</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
										
										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-12"></span>
													<h3 class="title">Casque</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-13"></span>
													<h3 class="title">Tapis</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-14"></span>
													<h3 class="title">Manette</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-15"></span>
													<h3 class="title">Webcam</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-16"></span>
													<h3 class="title">Pack gaming</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-17"></span>
													<h3 class="title">Microphone</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->

										<!-- Accordion Item begin -->
										<div class="accordion-item">
											<div class="accordion-bondeau col-sm-12" id="accordionItem">
												<div class="accordion-heading">
													<span class="ico-18"></span>
													<h3 class="title">Haut parleur</h3>
												</div>
												<div class="add-selection">
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="Modal">
														<i class="fas fa-plus-circle"></i>
													</a>
												</div>
											</div>
											<div class="accordion-wrapper">
												<div class="accordion-content wrapper col-sm-12" id="accordionContent">
													<div class="accordion-content-left">
														<div class="accordion-image">
															<img src="EXPERT_LOGO/LD0005368478_2.jpg" alt="">
														</div>
														<div class="accordion-desc">
															<h4>Lorem ipsum dolor sit.</h4>
															<a href="#">Fiche produit</a>
														</div>
													</div>
													<div class="accordion-content-right action">
														<i class="fas fa-info-circle"></i>
														<i class="far fa-edit"></i>
														<i class="far fa-trash-alt"></i>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- Accordion Item end -->
									</div>
								</div>
							</div>
							<!-- Accessoires End -->
						</div>
						<!--Middle Part End-->
						
						<!-- Right part start -->
						<aside id="column-right" class="module titleLine col-sm-5">
							<h3 class="modtitle modtitle--small">Récapitulatif</h2>
							<div class="right-side mt-40">
								<div class="panier col-col-sm-12">
									<h3>Code Promo</h3>
	
									<!-- input-group Begin -->
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Saisissez votre code PROMO...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Go!</button>
										</span>
									</div>
									<!-- input-group End -->
									<h3>Résumé de la commande</h3>
	
									<div class="product_list">
										<div class="product-info">
											<span class="dispo"></span>
											<span class="product_name">Lorem ipsum dolor sit amet consectetur.</span>
										</div class="product-info">
										<span class="price">10.00 TND</span>
									</div>
									<hr>
	
									<!-- Total Begin -->
									<div class="total">
										<h4 class="title">Total</h4>
										<span class="solde">10.00 TND</span>
									</div>
									<!-- Total End -->
	
									<div class="validate">
										<a href="" class="btn-big">Sauvegarder</a>
										<a href="" class="btn-big">Valider</a>
									</div>
								</div>
							</div>
						</aside>
						<!-- Right part End -->
					</div>
				</div>
			</div>
			<!-- //Main Container -->

			<!-- Footer Container -->
			<?php
				include("../include/footer.php");
			?>
			<!-- end Footer Container -->
	</div>


	<!-- Include Libs & Plugins
============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/costum.js"></script>


</body>

</html>