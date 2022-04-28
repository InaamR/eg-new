<?php
	session_start();
	include("config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic page needs
	============================================ -->
	<title>Expert Gaming</title>
	
	<meta charset="utf-8">

    <meta name="keywords" content="Expert Gaming, Vente Pc Gamer, Carte Graphique, Processeur en Tunisie, Vente Pc Gamer et accessoires en Tunisie" />
    <meta name="robots" content="index, follow" />
	<meta name="author" content="Malek MENCHAOUI, Mohamed Inaam RACHDI, Zied JLASSI, Negi CHAIEB, Zied GROMBALI, Hedi JMEL">
	<meta name="description" content="Expert Gaming : Vente de matériel Gaming et informatique en Tunisie"/>
	
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url?>ico/favicon.png">

	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font-awesome
	============================================ -->
	<link href="<?php echo $url?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
    <!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="<?php echo $url?>css/bootstrap/css/bootstrap.css">
	
	<link href="<?php echo $url?>js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo $url?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo $url?>css/themecss/lib.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="<?php echo $url?>css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo $url?>css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?php echo $url?>css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?php echo $url?>css/header8.css" rel="stylesheet">
	<link href="<?php echo $url?>css/footer5.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo $url?>css/home8.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo $url?>css/home4.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo $url?>css/theme.css" rel="stylesheet">
	<link href="<?php echo $url?>css/responsive.css" rel="stylesheet">
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7NPZTD47KQ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-7NPZTD47KQ');
	</script>
		

</head>

<body class="common-home res layout-home8 ">

	<div class="se-pre-con"></div>
	
	<div id="wrapper" class="wrapper-full banners-effect-1">

		<!-- Header Container  -->
			<?php
				include("include/top.php");
			?>
		<!-- //Header Container  -->
		
		<!-- Block slideshow  -->
			<?php
				include("include/banniere.php");
			?>
		<!-- //Block slideshow  -->
		<!-- Block nvelle config  -->
		<?php
				//include("include/nvelle_config.php");
			?>
		<!-- //Block nvelle config  -->
		<!-- Main Container  -->
		<div class="main-container ">
			<div class="container">
				<div class="row">
				
					<div id="content" class="clearfix">
						<div class="col-xs-12 clearfix">

							<?php
								
								include('include/nouveau_produit.php');

							?>
							
							<?php
								
								include('include/promo_produit.php');

							?>
							
							<?php

								//include('include/configuration.php');

							?>

							<?php

								//include("include/actualites.php");

							?>
							<?php

							include("include/news.php");

							?>
							
							<!-- Section module so-extraslider -->
							<?php

								include("include/top_vente.php");
								
							?>
							<!-- End Section module so-extraslider -->


							<?php

								include("include/cartes_graphiques.php");

							?>

								
							<!-- Section Ambassadeurs -->
							<?php

								//include("include/membre.php");
								
							?>
							<!-- End Section Ambassadeurs -->

							<!-- Section nos partenaires -->
							<?php
								include('include/partenaires.php');
							?>
						</div>
					</div>

				</div>
			</div>	
		</div>
		<!-- //Main Container -->

		<script type="text/javascript"><!--
			var $typeheader = 'header-home1';
			//-->
		</script>

		<!-- Footer Container -->
			<?php
				include("include/footer.php");
			?>
		<!-- //end Footer Container -->

	</div>
<!-- Messenger Plugin de discussion Code -->
<div id="fb-root"></div>

<!-- Your Plugin de discussion code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo $url?>js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/themejs/libs.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="<?php echo $url?>js/themejs/application.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/themejs/homepage.js"></script>
<script type="text/javascript" src="<?php echo $url?>js/themejs/so_megamenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>


<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "102066778692533");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v11.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
