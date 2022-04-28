<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Actualités</title>
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
    <link href="../css/404.css" rel="stylesheet">

</head>

<body>
<div id="wrapper" class="wrapper-full">

  	<!-- Header Container  -->
  	<?php
      include("../include/top.php");
    ?>

    <!-- Main container begin-->
  <div class="main-container container">
    	<ul class="breadcrumb">
				<li><a href="../Accueil"><i class="fa fa-home"></i></a></li>
				<li>Toutes les actualités</li>
		</ul>
		
		<div class="row">			
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-8">

				

				<div class="blog-listitem">
					<?php
					try {
					$PDO_query_comm = Bdd::connectBdd()->prepare("SELECT * FROM eg_comm WHERE eg_comm_statut = 1 ORDER BY eg_comm_date DESC");
					$PDO_query_comm->execute();
					$nb_comm = $PDO_query_comm->rowCount();

					if($nb_comm == 0){


					}else{

						while ($comm = $PDO_query_comm->fetch()){

								$text = wordwrap($comm['eg_comm_desc_courte'], 500, "***", true); // insertion de marqueurs ***
								$tcut = explode("***", $text); // on créé un tableau à partir des marqueurs ***
								$part1 = $tcut[0]; // la partie à mettre en exergue
								$part2 = '';
								for($i=1; $i<count($tcut); $i++) {
									$part2 .= $tcut[$i].' ';
								}
								$part2 = trim($part2); //suppression du dernier espace dans la partie de texte restante

								
								$date = date_create($comm['eg_comm_date']);
								$date = date_format($date, "d/m/Y");
								echo '
								<div class="blog-item">

									<div class="itemBlogImg col-md-4 col-sm-12">
										<div class="article-image banners">
											<div>
											<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'"><img src="https://betatest.expert-gaming.tn' . $comm['eg_comm_img'] . '" alt="' . $comm['eg_comm_titre'] . '"></a>
											</div>
										</div>
									</div>

									<div class="itemBlogContent col-md-8 col-sm-12">

										<div class="article-title">
											<h4>
												<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'">' . $comm['eg_comm_titre'] . '</a>
											</h4>
											
										</div>

										<div class="article-sub-title">
											<span class="article-date">
												<i class="fa fa-calendar"></i>'.$date.'							
											</span>
										</div>

										<div class="article-description">
												'.Caractere::coupeCourt($comm['eg_comm_desc_courte'], 500, 10).'							    
										</div>
										<div class="blog-meta">

											<span class="author">
												<span>Poster par : </span>'.Membre::info($comm['eg_comm_user'], 'nom').' '.Membre::info($comm['eg_comm_user'], 'prenom').'
											</span>

										</div>
										
									</div>
									
								</div>
								';

						}
					}

					$PDO_query_comm->closeCursor();
					} catch (PDOException $x) {
						die("Secured");
					}
					?>					
									
				</div>






			</div>		
		</div>
		<!--Middle Part End-->
	</div>
    <!-- Main container end -->

  <!-- Footer Container -->
  	<?php
      include("../include/footer.php");
    ?>
  <!-- //end Footer Container -->

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="../js/themejs/application_interne.js"></script>
	<script type="text/javascript" src="../js/themejs/homepage.js"></script>
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

  </body>

</html>