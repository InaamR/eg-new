<?php
    include("../config/fonction.php");
?>
<?php
if(!empty($_GET["id_actu"])){$id_comm = $_GET["id_actu"];}else{$id_comm = "";}
$PDO_query_comm_unique = Bdd::connectBdd()->prepare("SELECT * FROM eg_comm WHERE eg_comm_id = :id ORDER BY eg_comm_id ASC");
$PDO_query_comm_unique->bindParam(":id", $id_comm, PDO::PARAM_INT);
$PDO_query_comm_unique->execute();
$communication = $PDO_query_comm_unique->fetch();
$PDO_query_comm_unique->closeCursor();
$date = date_create($communication['eg_comm_date']);
$date = date_format($date, "d/m/Y");
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title><?php if(!empty($id_comm)){echo $communication['eg_comm_titre'];}?></title>
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
					<li><i class="fa fa-home"></i></li>
					<li><a href="actu.php">Toutes les actualités</a></li>
					<li>Lire l'article</li>
		</ul>
			
		<div class="row">
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-8">
				<div class="article-info">
					<div class="blog-header">
						<h3><?php if(!empty($id_comm)){echo $communication['eg_comm_titre'];}?></h3>
						<small><?php if(!empty($id_comm)){echo $communication['eg_comm_sous_titre'];}?></small>
					</div>
					<div class="article-sub-title">
						<span class="article-author">Posté par : <a href="#"><b><?php echo Membre::info($communication['eg_comm_user'], 'nom').' '.Membre::info($communication['eg_comm_user'], 'prenom'); ?></b></a></span>
						<span class="article-date">Date d'insertion : <b><?php echo $date;?></b></span>
					</div>
					<div class="form-group">
						<img src="https://betatest.expert-gaming.tn<?php if(!empty($id_comm)){echo $communication['eg_comm_img'];}?>" alt="<?php if(!empty($id_comm)){echo $communication['eg_comm_titre'];}?>">
					</div>
					<hr>
					<div class="article-description">
						<?php if(!empty($id_comm)){echo $communication['eg_comm_desc'];}?>
					</div>
				</div>

			</div>
			<!--Middle Part End-->
		</div>
			
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