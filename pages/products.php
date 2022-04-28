<?php

include("../config/fonction.php");

		
		if(isset($_GET['menu_id'])){
			$menu_id = $_GET['menu_id'];
		}else{
			$menu_id = 0;
		}
		if(isset($_GET['cat_id'])){
			$cat_id = $_GET['cat_id'];
		}else{
			$cat_id = 0;
		}
		if(isset($_GET['sous_cat_id'])){
			$sous_cat_id = $_GET['sous_cat_id'];
		}else{
			$sous_cat_id = 0;
		}
		if(isset($_GET['marque_id'])){
			$marque_id = $_GET['marque_id'];
		}else{
			$marque_id = 0;
		}
		
		
		if(isset($_GET['page']) && !empty($_GET['page'])){
			$currentPage = (int) strip_tags($_GET['page']);
		}else{
			$currentPage = 1;
		}

		/* $PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix ASC");
		$PDO_query_nbProduits->execute();
		$nbProduits = $PDO_query_nbProduits->rowCount();
		$PDO_query_nbProduits->closeCursor();

		// On détermine le nombre d'articles par page
		$parPage = 9;

		// On calcule le nombre de pages total
		$pages = ceil($nbProduits / $parPage);

		// Calcul du 1er article de la page
		$premier = ($currentPage * $parPage) - $parPage; */
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Tous nos produits</title>
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
				<li><a href="https://www.expert-gaming.tn/"><i class="fa fa-home"></i></a></li>
					<?php

							if($marque_id != 0){

								$PDO_query_breadcrumb_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id = :eg_marque_id");
								$PDO_query_breadcrumb_marque->bindParam(":eg_marque_id", $marque_id);
								$PDO_query_breadcrumb_marque->execute();
								$breadcrumb_marque = $PDO_query_breadcrumb_marque->fetch();

									echo'<li><a href="#">'.$breadcrumb_marque['eg_marque_nom'].'</a></li>';

								$PDO_query_breadcrumb_marque->closeCursor();

							}

							

							if($menu_id != 0){

									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $menu_id);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();

							}


							if($cat_id != 0){

								$PDO_query_breadcrumb_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_categorie_id = :eg_categorie_id");
								$PDO_query_breadcrumb_cat->bindParam(":eg_categorie_id", $cat_id);
								$PDO_query_breadcrumb_cat->execute();
								$breadcrumb_cat = $PDO_query_breadcrumb_cat->fetch();

								$PDO_query_breadcrumb_cat->closeCursor();



									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $breadcrumb_cat['eg_menu_id']);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();



								echo'<li><a href="#">'.$breadcrumb_cat['eg_categorie_nom'].'</a></li>';
							}

							if($sous_cat_id != 0){

								$PDO_query_breadcrumb_sous_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id");
								$PDO_query_breadcrumb_sous_cat->bindParam(":eg_sous_categorie_id", $sous_cat_id);
								$PDO_query_breadcrumb_sous_cat->execute();
								$breadcrumb_sous_cat = $PDO_query_breadcrumb_sous_cat->fetch();

								$PDO_query_breadcrumb_sous_cat->closeCursor();



									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $breadcrumb_sous_cat['eg_menu_id']);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();



										$PDO_query_breadcrumb_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_categorie_id = :eg_categorie_id");
										$PDO_query_breadcrumb_cat->bindParam(":eg_categorie_id", $breadcrumb_sous_cat['eg_sous_categorie_id_categorie']);
										$PDO_query_breadcrumb_cat->execute();
										$breadcrumb_cat = $PDO_query_breadcrumb_cat->fetch();

											echo'<li><a href="#">'.$breadcrumb_cat['eg_categorie_nom'].'</a></li>';

										$PDO_query_breadcrumb_cat->closeCursor();

								echo'<li><a href="#">'.$breadcrumb_sous_cat['eg_sous_categorie_nom'].'</a></li>';
							}
						
					?>
			</ul>

			<div class="row">
				<!--Left Part Start -->
				<aside class="col-sm-4 col-md-3" id="column-left">
					<!--<div class="module menu-category titleLine">
						<h3 class="modtitle">Categories</h3>
						<div class="modcontent">
							<div class="box-category">
								<ul id="cat_accordion" class="list-group">
									
										<?php

												$PDO_query_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 ORDER BY eg_categorie_nom ASC");
												$PDO_query_categorie->execute();

												while ($categorie = $PDO_query_categorie->fetch()){

																$PDO_query_count_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_categorie_id");
																$PDO_query_count_categorie->bindParam(":eg_categorie_id", $categorie['eg_categorie_id'], PDO::PARAM_INT);

																$PDO_query_count_categorie->execute();

																$count_categorie = $PDO_query_count_categorie->fetchColumn();
																$PDO_query_count_categorie->closeCursor();
													
													if($count_categorie == 0){

														echo '

															<li class="">
															<a href="#" class="cutom-parent">' . $categorie['eg_categorie_nom'] . '</a>
															<span class="dcjq-icon"></span>
															</li>

														';

													}else{
														
														echo '

															<li class="hadchild">
															<a href="category.html" class="cutom-parent">' . $categorie['eg_categorie_nom'] . '</a>
															<span class="button-view  far fa-plus-square"></span>
															<ul style="display: block;">
														';

														

															$PDO_query_sous_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_categorie_id ORDER BY eg_sous_categorie_nom ASC");

															$PDO_query_sous_categorie->bindParam(":eg_categorie_id", $categorie['eg_categorie_id'], PDO::PARAM_INT);

															$PDO_query_sous_categorie->execute();

															while ($sous_categorie = $PDO_query_sous_categorie->fetch()){
																

																echo '

																	<li><a href="#">' . $sous_categorie['eg_sous_categorie_nom'] . '</a></li>

																';
															}
															$PDO_query_sous_categorie->closeCursor();

														echo '
														
															</ul>
															</li>
														';
													}

												}
												$PDO_query_categorie->closeCursor();

										?>

								</ul>
							</div>


						</div>
					</div>-->
					<div class="module menu-category titleLine">
						<h3 class="modtitle">Marques</h3>
						<div class="modcontent">
							<div class="box-category">
								<ul id="cat_accordion" class="list-group">
									
									<?php
											//AFFICHER QUE LES MARQUES DISPONIBLES SELON LES PRODUITS//

										if($sous_cat_id <> 0){
											
													$PDO_query_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id IN (SELECT eg_marque_id FROM eg_produit WHERE eg_sous_categorie_id =:eg_sous_categorie_id) ORDER BY eg_marque_nom ASC");
													$PDO_query_marque->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
													$PDO_query_marque->execute();

													while ($marque = $PDO_query_marque->fetch()){

															echo '

																<li class="">
																<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produit/scat/'.$marque['eg_marque_id'].'/Marque/'.$_GET['sous_cat_id'].'" class="cutom-parent">' . $marque['eg_marque_nom'] . '</a>
																<span class="dcjq-icon"></span>
																</li>

															';

													}
													$PDO_query_marque->closeCursor();

										}elseif($cat_id <> 0){
											
												$PDO_query_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id IN (SELECT eg_marque_id FROM eg_produit WHERE eg_categorie_id =:eg_categorie_id) ORDER BY eg_marque_nom ASC");
												$PDO_query_marque->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
												$PDO_query_marque->execute();

												while ($marque = $PDO_query_marque->fetch()){

														echo '

															<li class="">
															<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produit/cat/'.$marque['eg_marque_id'].'/Marque/'.$_GET['cat_id'].'" class="cutom-parent">' . $marque['eg_marque_nom'] . '</a>
															<span class="dcjq-icon"></span>
															</li>

														';

												}
												$PDO_query_marque->closeCursor();

										}elseif($menu_id <> 0){
											
											$PDO_query_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id IN (SELECT eg_marque_id FROM eg_produit WHERE eg_menu_id =:eg_menu_id) ORDER BY eg_marque_nom ASC");
											$PDO_query_marque->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_marque->execute();

											while ($marque = $PDO_query_marque->fetch()){

													echo '

														<li class="">
														<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produit/'.$marque['eg_marque_id'].'/Marque/'.$_GET['menu_id'].'" class="cutom-parent">' . $marque['eg_marque_nom'] . '</a>
														<span class="dcjq-icon"></span>
														</li>

													';

											}
											$PDO_query_marque->closeCursor();

									}elseif($marque_id <> 0 && $menu_id == 0 && $cat_id == 0 && $sous_cat_id == 0){
											
											echo '

													<li class="">
													<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produits" class="cutom-parent">Tous nos produits</a>
													<span class="dcjq-icon"></span>
													</li>

												';

									}elseif($marque_id == 0 && $menu_id == 0 && $cat_id == 0 && $sous_cat_id == 0){
											
										$PDO_query_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 ORDER BY eg_marque_nom ASC");
										$PDO_query_marque->execute();

										while ($marque = $PDO_query_marque->fetch()){

												echo '

													<li class="">
													<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Produit/Marque/'.$marque['eg_marque_id'].'" class="cutom-parent">' . $marque['eg_marque_nom'] . '</a>
													<span class="dcjq-icon"></span>
													</li>

												';

										}
										$PDO_query_marque->closeCursor();

								}

								?>

								</ul>
							</div>


						</div>
					</div>


					<div class="module menu-category titleLine">
						<h3 class="modtitle">Trier Par</h3>
						<div class="modcontent">
							<div class="box-category">
								<ul id="cat_accordion" class="list-group">

								<?php

									if(!isset($_GET['marque_id']) && $menu_id <> 0){
								?>

										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $menu_id ;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $menu_id ;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $menu_id ;?>/ASC/1" class="cutom-parent">Prix croissant</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $menu_id ;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
											<span class="dcjq-icon"></span>
										</li>

										<?php

										}elseif($marque_id <> 0 && $menu_id <> 0){

										?>
									
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $marque_id;?>/Marque/<?php echo $menu_id;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $marque_id;?>/Marque/<?php echo $menu_id;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $marque_id;?>/Marque/<?php echo $menu_id;?>/ASC/1" class="cutom-parent">Prix croissant</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/<?php echo $marque_id;?>/Marque/<?php echo $menu_id;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
												<span class="dcjq-icon"></span>
											</li>

								<?php

										}elseif(!isset($_GET['marque_id']) && $cat_id <> 0){
								?>

										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $cat_id ;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $cat_id ;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $cat_id ;?>/ASC/1" class="cutom-parent">Prix croissant</a>
											<span class="dcjq-icon"></span>
										</li>
										<li class="">
											<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $cat_id ;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
											<span class="dcjq-icon"></span>
										</li>

										<?php

										}elseif($marque_id <> 0 && $cat_id <> 0){

										?>
									
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $marque_id;?>/Marque/<?php echo $cat_id;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $marque_id;?>/Marque/<?php echo $cat_id;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $marque_id;?>/Marque/<?php echo $cat_id;?>/ASC/1" class="cutom-parent">Prix croissant</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/cat/<?php echo $marque_id;?>/Marque/<?php echo $cat_id;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
												<span class="dcjq-icon"></span>
											</li>

									<?php

										}elseif($marque_id <> 0 && $cat_id == 0 && $menu_id == 0 && $sous_cat_id == 0){

									?>
										
												<li class="">
													<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/Marque/<?php echo $marque_id;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
													<span class="dcjq-icon"></span>
												</li>
												<li class="">
													<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/Marque/<?php echo $marque_id;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
													<span class="dcjq-icon"></span>
												</li>
												<li class="">
													<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/Marque/<?php echo $marque_id;?>/ASC/1" class="cutom-parent">Prix croissant</a>
													<span class="dcjq-icon"></span>
												</li>
												<li class="">
													<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/Marque/<?php echo $marque_id;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
													<span class="dcjq-icon"></span>
												</li>
	
										<?php
	
											}elseif($marque_id <> 0 && $sous_cat_id <> 0){

									?>
									
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $marque_id;?>/Marque/<?php echo $sous_cat_id;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $marque_id;?>/Marque/<?php echo $sous_cat_id;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $marque_id;?>/Marque/<?php echo $sous_cat_id;?>/ASC/1" class="cutom-parent">Prix croissant</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $marque_id;?>/Marque/<?php echo $sous_cat_id;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
												<span class="dcjq-icon"></span>
											</li>

									<?php

										}elseif(!isset($_GET['marque_id']) && $sous_cat_id <> 0){
									?>

											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $sous_cat_id ;?>/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $sous_cat_id ;?>/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $sous_cat_id ;?>/ASC/1" class="cutom-parent">Prix croissant</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/scat/<?php echo $sous_cat_id ;?>/DESC/1" class="cutom-parent">Prix décroissant</a>
												<span class="dcjq-icon"></span>
											</li>
									<?php
										}elseif($marque_id == 0 && $cat_id == 0 && $sous_cat_id == 0 && $menu_id == 0){
									?>

											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/ASCN/1" class="cutom-parent">Nom (A - Z)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/DESCN/1" class="cutom-parent">Nom (Z - A)</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/ASC/1" class="cutom-parent">Prix croissant</a>
												<span class="dcjq-icon"></span>
											</li>
											<li class="">
												<a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $PARAM_url_non_doc_site;?>Produit/DESC/1" class="cutom-parent">Prix décroissant</a>
												<span class="dcjq-icon"></span>
											</li>

									<?php
										}
									
									?>
								</ul>
							</div>


						</div>
					</div>


					<div class="module latest-product titleLine hidden-xs">
						<h3 class="modtitle">Produits récents</h3>
						<div class="modcontent ">

							<?php

									$PDO_query_produits_recents = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_new = 1 ORDER BY RAND() LIMIT 3");
									$PDO_query_produits_recents->execute();

										while ($produits_recents = $PDO_query_produits_recents->fetch()){

											echo '

												<div class="product-latest-item">
													<div class="media">
														<div class="media-left">
															<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$produits_recents['eg_produit_id'].'">
											';

												$PDO_query_produits_recents_img = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
												$PDO_query_produits_recents_img->bindParam(":eg_produit_id", $produits_recents['eg_produit_id'], PDO::PARAM_INT);
												$PDO_query_produits_recents_img->execute();
													while ($produits_recents_img = $PDO_query_produits_recents_img->fetch()){

														echo '

																<img src="https://betatest.expert-gaming.tn'.$produits_recents_img['eg_image_produit_nom'].'" style="width: 100px;">

														';

													}
												$PDO_query_produits_recents_img->closeCursor();

														echo'

														
																	</a>
																</div>
																<div class="media-body">
																	<div class="caption">
																		<h4><a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'pages/product_view.php?produit_id='.$produits_recents['eg_produit_id'].'">' . $produits_recents['eg_produit_nom'] . '</a></h4>

																		<div class="price">
																			<span class="price-new">' . $produits_recents['eg_produit_prix'] . ' TND</span>
																		</div>

																	</div>

																</div>
															</div>
														</div>

												';
										}
									$PDO_query_produits_recents->closeCursor();
							?>

						</div>

					</div>

				</aside>
				<!--Left Part End -->



				<!--Middle Part Start-->
				<div id="content" class="col-md-9 col-sm-8">
					<div class="products-category">

						<!-- Pub banner -->
						<!-- <div class="category-derc">
							<div class="row">
								<div class="col-sm-12">
									<div class="banners">
										<div>
											<a href="#"><img src="https://<?php echo $_SERVER['SERVER_NAME']?>/image/demo/shop/category/electronic-cat.png"
													alt="Apple Cinema 30&quot;"><br></a>
										</div>
									</div>

								</div>
							</div>
						</div> -->
						<!-- En pub banner -->

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
								// Filters de A à Z et de Z à A

								if(!isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['marque_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
									
											// On détermine le nombre d'articles par page
											$parPage = 9;
									
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
									
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
									
											// On détermine le nombre d'articles par page
											$parPage = 9;
									
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
									
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
									
											// On détermine le nombre d'articles par page
											$parPage = 9;
									
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
									
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
									
											// On détermine le nombre d'articles par page
											$parPage = 9;
									
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
									
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
									
											// On détermine le nombre d'articles par page
											$parPage = 9;
									
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
									
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();

											// On détermine le nombre d'articles par page
											$parPage = 9;

											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);

											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();

											// On détermine le nombre d'articles par page
											$parPage = 9;

											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);

											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;
									

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();

											// On détermine le nombre d'articles par page
											$parPage = 9;

											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);

											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC");
									$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
									$PDO_query_nbProduits->execute();
									$nbProduits = $PDO_query_nbProduits->rowCount();
									$PDO_query_nbProduits->closeCursor();
							
									// On détermine le nombre d'articles par page
									$parPage = 9;
							
									// On calcule le nombre de pages total
									$pages = ceil($nbProduits / $parPage);
							
									// Calcul du 1er article de la page
									$premier = ($currentPage * $parPage) - $parPage;
									
									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

										$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
										$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
										$PDO_query_nbProduits->execute();
										$nbProduits = $PDO_query_nbProduits->rowCount();
										$PDO_query_nbProduits->closeCursor();

										// On détermine le nombre d'articles par page
										$parPage = 9;

										// On calcule le nombre de pages total
										$pages = ceil($nbProduits / $parPage);

										// Calcul du 1er article de la page
										$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['asc_nom']) && !isset($_GET['desc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();

											// On détermine le nombre d'articles par page
											$parPage = 9;

											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);

											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();

											// On détermine le nombre d'articles par page
											$parPage = 9;

											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);

											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_menu_id = :eg_menu_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_menu_id", $menu_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_categorie_id = :eg_categorie_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_categorie_id", $cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);									$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){
									
											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(isset($_GET['marque_id']) && isset($_GET['sous_cat_id']) && !isset($_GET['menu_id']) && !isset($_GET['cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND eg_sous_categorie_id = :eg_sous_categorie_id ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_sous_categorie_id", $sous_cat_id, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":eg_marque_id", $marque_id, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix ASC");
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;
									
									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix DESC");
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_prix DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && !isset($_GET['desc_nom']) && isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_nom ASC");
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_nom ASC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
					
								}elseif(!isset($_GET['marque_id']) && !isset($_GET['cat_id']) && !isset($_GET['sous_cat_id']) && isset($_GET['desc_nom']) && !isset($_GET['asc_nom']) && !isset($_GET['asc_prix']) && !isset($_GET['desc_prix'])){

											$PDO_query_nbProduits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_nom DESC");
											$PDO_query_nbProduits->execute();
											$nbProduits = $PDO_query_nbProduits->rowCount();
											$PDO_query_nbProduits->closeCursor();
											
											// On détermine le nombre d'articles par page
											$parPage = 9;
											
											// On calcule le nombre de pages total
											$pages = ceil($nbProduits / $parPage);
											
											// Calcul du 1er article de la page
											$premier = ($currentPage * $parPage) - $parPage;

									$PDO_query_listes_produits = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 ORDER BY eg_produit_nom DESC LIMIT :premier, :parpage;");
									$PDO_query_listes_produits->bindParam(":premier", $premier, PDO::PARAM_INT);
									$PDO_query_listes_produits->bindParam(":parpage", $parPage, PDO::PARAM_INT);
					
								}

								// End Filters de A à Z et de Z à A

							$PDO_query_listes_produits->execute();
							$produit_existe = $PDO_query_listes_produits->rowCount();

									if($produit_existe == 0){

										echo' <div class="info-produit">Aucun produit disponible</div>';

									}else{
											while ($produits = $PDO_query_listes_produits->fetch()){

												echo '

													<div class="product-layout col-md-4 col-sm-6 col-xs-12">
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
				
																}elseif($produits['eg_produit_dispo'] == 3){
	
																	echo'
																	
																	<div class="stock"><span class="status-commande">Sur commande</span></div>
				
																	';
				
																}elseif($produits['eg_produit_dispo'] == 4){
				
																	echo'
																	
																	<div class="stock"><span class="status-soon">En arrivage</span></div>
				
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

														if($produits['eg_produit_dispo'] == 0 || $produits['eg_produit_dispo'] == 4){

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
						<!-- Pagination -->
						<div class="product-filter product-filter-bottom filters-panel">
							<div class="row">
								
								
								<div class="box-pagination col-md-12 col-sm-4 text-center">
										<ul class="pagination">
											<?php 
											$chaine = $_SERVER['REQUEST_URI'];
											$mot = "/P/";

											if(strpos($chaine, $mot) !== false){
												$nbr = 4;
												$lien = substr($chaine, 0, -$nbr);
											}else{

												$lien = $_SERVER['REQUEST_URI'];
											}
											?>
											<li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
												<a href="<?php echo $lien;?>/P/<?= $currentPage - 1 ?>" class="page-link"><</a>
											</li>
											<?php for($page = 1; $page <= $pages; $page++): ?>
												<li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
													<a href="<?php echo $lien;?>/P/<?= $page ?>" class="page-link"><?= $page ?></a>
												</li>
											<?php endfor ?>
												<li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
												<a href="<?php echo $lien;?>/P/<?= $currentPage + 1 ?>" class="page-link">></a>
											</li>
										</ul>
								</div>

							</div>
						</div>
						<!-- //end Pagination -->

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