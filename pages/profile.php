<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Mon compte</title>
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
	<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
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
				<li>Mon compte</li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div class="col-sm-12" id="content">
					<h2 class="title">Mon compte</h2>
					<p class="lead">Bienvenue, <strong>Jhone Cary!</strong> - dans votre interface Perso.</p>
					<form>
						<div class="row">
							<div class="img-profile-user">
								<img src="image/Zied_expert.jpg" alt="user-avatar">
							</div>
							<div class="col-sm-6">
								<fieldset id="personal-details">
									<legend>Informations personnelles</legend>
									<div class="form-group required">
										<label for="input-firstname" class="control-label">Prénom</label>
										<input type="text" class="form-control" id="input-firstname" placeholder="Prénom" value="" name="firstname">
									</div>
									<div class="form-group required">
										<label for="input-lastname" class="control-label">Nom</label>
										<input type="text" class="form-control" id="input-lastname" placeholder="Nom" value="" name="lastname">
									</div>
									<div class="form-group required">
										<label for="input-email" class="control-label">Adresse E-Mail</label>
										<input type="email" class="form-control" id="input-email" placeholder="Adresse E-Mail" value="" name="email">
									</div>
									<div class="form-group required">
										<label for="input-telephone" class="control-label">Téléphone</label>
										<input type="tel" class="form-control" id="input-telephone" placeholder="Téléphone" value="" name="telephone">
									</div>
									<div class="form-group required">
										<label for="input-image" class="control-label">Ajout/Modification Photo</label>
										<input type="file" name="Ajout/Modification Photo" value="" id="input-image" class="form-control">
									</div>

								</fieldset>
								<br>
							</div>
							<div class="col-sm-6">
								<fieldset>
									<legend>Changer mon mot de passe</legend>
									<div class="form-group required">
										<label for="input-password" class="control-label">Ancien mot de passe</label>
										<input type="password" class="form-control" id="input-password" placeholder="Ancien mot de passe" value="" name="old-password">
									</div>
									<div class="form-group required">
										<label for="input-password" class="control-label">Nouveau mot de passe</label>
										<input type="password" class="form-control" id="input-password" placeholder="Nouveau mot de passe" value="" name="new-password">
									</div>
									<div class="form-group required">
										<label for="input-confirm" class="control-label">Confirmer mot de passe</label>
										<input type="password" class="form-control" id="input-confirm" placeholder="Confirmer mot de passe" value="" name="new-confirm">
									</div>
								</fieldset>
								<fieldset>
									<legend>Newsletter</legend>
									<div class="form-group">
										<label class="col-md-2 col-sm-3 col-xs-3 control-label">S'inscrire</label>
										<div class="col-md-10 col-sm-9 col-xs-9">
											<label class="radio-inline">
												<input type="radio" value="1" name="newsletter"> oui
											</label>
											<label class="radio-inline">
												<input type="radio" checked="checked" value="0" name="newsletter"> non
											</label>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<fieldset id="address">
									<legend>Votre Adresse</legend>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Adresse 1</label>
										<input type="text" class="form-control" id="input-address-1" placeholder="Adresse 1" value="" name="address_1">
									</div>
									<div class="form-group required">
										<label for="input-address-2" class="control-label">Adresse 2</label>
										<input type="text" class="form-control" id="input-address-2" placeholder="Adresse 2" value="" name="address_2">
									</div>
									<div class="form-group required">
										<label for="input-city" class="control-label">Ville</label>
										<select class="form-control" id="input-country" name="country_id">
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
									<div class="form-group required">
										<label for="input-postcode" class="control-label">Code postal</label>
										<input type="text" class="form-control" id="input-postcode" placeholder="Code postal" value="" name="postcode">
									</div>
								</fieldset>
							</div>
						</div>

						<div class="buttons clearfix">
							<div class="pull-right">
								<input type="submit" class="btn btn-md btn-primary" value="Enregistrer">
							</div>
						</div>
					</form>
				</div>
				<!--Middle Part End-->
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