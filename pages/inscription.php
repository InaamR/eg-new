<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>S'inscrire</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

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
				<li>S'inscrire</li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<h2 class="title">Inscription</h2>
					<p>Si vous êtes déjà client veuillez vous <a href="Identification">Connecter</a>.</p>
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
						<fieldset id="account">
							<legend>Vos informations personnelles</legend>

							<!-- Input revendeur -->
							<div class="form-group required" style="display: none;">
								<label class="col-sm-2 control-label">Customer Group</label>
								<div class="col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
										</label>
									</div>
								</div>
							</div>
							<!-- End Input revendeur -->

							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-firstname">Nom</label>
								<div class="col-sm-10">
									<input type="text" name="firstname" value="" placeholder="Nom" id="input-firstname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Prénom</label>
								<div class="col-sm-10">
									<input type="text" name="lastname" value="" placeholder="Prénom" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Adresse E-mail</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="" placeholder="Adresse E-mail" id="input-email" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Téléphone</label>
								<div class="col-sm-10">
									<input type="tel" name="telephone" value="" placeholder="Téléphone" id="input-telephone" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-image">Ajout/Modification Photo</label>
								<div class="col-sm-10 col-md-3">
									<input type="file" name="Ajout/Modification Photo" value="" placeholder="Ajout/Modification Photo" id="input-image" class="form-control">
								</div>
							</div>
						</fieldset>

						<fieldset id="address">
							<legend>Votre Adresse</legend>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-address-1">Adresse 1</label>
								<div class="col-sm-10">
									<input type="text" name="address_1" value="" placeholder="Adresse 1" id="input-address-1" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-address-2">Adresse 2</label>
								<div class="col-sm-10">
									<input type="text" name="address_2" value="" placeholder="Adresse 2" id="input-address-2" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-city">Ville</label>
								<div class="col-sm-10">
								<select name="country_id" id="input-country" class="form-control">
										<option value=""> --- Ville --- </option>
										<option value="1">Ariana</option>
										<option value="2">Béja</option>
										<option value="3">Ben Arous</option>
										<option value="4">Bizerte</option>
										<option value="5">Gabès</option>
										<option value="6">Gafsa</option>
										<option value="7">Jendouba</option>
										<option value="8">Kairouan</option>
										<option value="9">Kasserine</option>
										<option value="10">Kébili</option>
										<option value="11">Kef</option>
										<option value="12">Mahdia</option>
										<option value="13">Manouba</option>
										<option value="14">Médenine</option>
										<option value="15">Monastir</option>
										<option value="16">Nabeul</option>
										<option value="17">Sfax</option>
										<option value="18">Sidi Bouzid</option>
										<option value="19">Siliana</option>
										<option value="20">Sousse</option>
										<option value="21">Tataouine</option>
										<option value="22">Tozeur</option>
										<option value="23">Tunis</option>
										<option value="24">Zaghouan</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-postcode">Code postal</label>
								<div class="col-sm-10">
									<input type="text" name="postcode" value="" placeholder="Code postal" id="input-postcode" class="form-control">
								</div>
							</div>

						</fieldset>
						<fieldset>
							<legend>Votre mot de passe</legend>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-password">Mot de passe</label>
								<div class="col-sm-10">
									<input type="password" name="password" value="" placeholder="Mot de passe" id="input-password" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-confirm">Confirmer le mot de passe</label>
								<div class="col-sm-10">
									<input type="password" name="confirm" value="" placeholder="Confirmer le mot de passe" id="input-confirm" class="form-control">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Newsletter</legend>
							<div class="form-group">
								<label class="col-sm-2 control-label">S'inscrire</label>
								<div class="col-sm-10">
									<label class="radio-inline">
										<input type="radio" name="newsletter" value="1"> Oui
									</label>
									<label class="radio-inline">
										<input type="radio" name="newsletter" value="0" checked="checked"> Non
									</label>
								</div>
							</div>
						</fieldset>
						<div class="buttons">
							<div class="pull-right">J'ai lu et j'accepte les <a href="#" class="agree"><b>Les conditions générales de vente</b></a>
								<input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
								<input type="submit" value="Continuer" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
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


</body>

</html>