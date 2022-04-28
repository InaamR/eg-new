<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Nous contacter</title>
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

	<!-- font-awesome
	============================================ -->
	<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
    <!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
	
	<link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../css/themecss/lib.css" rel="stylesheet">
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
	<link id="color_scheme" href="../css/theme.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">


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
				<li>
					<a href="Accueil">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li>Nous contacter
			</li>			
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-title">
						<h2>Nous contacter</h2>
					</div>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1342.4105782883412!2d10.167306993277293!3d36.847063995639274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33db7d96de5f%3A0xa806d6b4c07ade8d!2sExpert-Gaming!5e0!3m2!1sfr!2stn!4v1622414224675!5m2!1sfr!2stn" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

					<div class="info-contact clearfix">
						<div class="col-lg-4 col-sm-4 col-xs-12 info-store">
							<div class="row">
								<div class="name-store">
									<h3><u>Coordonnées du magasin</u></h3>
								</div>
								<!-- <address>
									<div class="address clearfix form-group">
										<div class="icon">
											<i class="fas fa-map-pin"></i>
										</div>
										<div class="text">Menzah 6, galerie le Colisée 8éme boutique à droite,<br>
										En face de la Clinique Farabi</div>
									</div>
									<div class="phone form-group">
										<div class="icon">
											<i class="fa fa-mobile"></i>
										</div>
										<div class="text">Tel 1 : 58 554 255</div>
									</div>
									<div class="phone form-group">
										<div class="icon">
											<i class="fa fa-mobile"></i>
										</div>
										<div class="text">Tel 2 : 28 516 916</div>
									</div>
									<div class="mail form-group">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="text"><a href="mailto:contact@expert-gaming.tn">contact@expert-gaming.tn</a></div>
									</div>
								</address> -->
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fas fa-map-pin"></span> Menzah 6, galerie le Colisée 8<sup>éme</sup> boutique à droite, <br>
										En face de la Clinique Farabi</li>
										<li><span class="fas fa-envelope"></span> <a href="mailto:contact@expert-gaming.tn">contact@expert-gaming.tn</a></li>
										<li><span class="fas fa-phone">&nbsp;</span> Téléphone 1 : 58 554 255<br>Téléphone 2 : 28 516 916</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
						<form metod="post" id="captcha_form"  class="form-horizontal">
						<fieldset>
										<h3><u>Votre message</u></h3>
										<div class="alert alert-success text-center" id="ok" style="display:none;"></div>
										<div class="form-group required">
										
											<label class="col-sm-2 control-label" for="input-name">Prénom :</label>
											<div class="col-sm-10">
												<input type="text" name="first_name" id="first_name" class="form-control" />
												<span id="first_name_error" class="text-danger"></span>
											</div>
										</div>

										<div class="form-group required">
										
											<label class="col-sm-2 control-label" for="input-name">Nom :</label>
											<div class="col-sm-10">
												<input type="text" name="last_name" id="last_name" class="form-control" />
												<span id="last_name_error" class="text-danger"></span>
											</div>
										</div>

										<div class="form-group required">
											<label class="col-sm-2 control-label" for="input-name">Téléphone :</label>
											<div class="col-sm-10">
												<input type="number" name="tel" id="tel" class="form-control" />
												<span id="tel_error" class="text-danger"></span>
											</div>
										</div>

										<div class="form-group required">
											<label class="col-sm-2 control-label" for="input-name">Adresse Email :</label>
											<div class="col-sm-10">
											<input type="text" name="email" id="email" class="form-control" />
											<span id="email_error" class="text-danger"></span>
											</div>
										</div>
										<div class="form-group required">
											<label class="col-sm-2 control-label" for="input-name">Votre message :</label>
											<div class="col-sm-10">
												<textarea name="message" rows="10" id="input-enquiry" class="form-control"></textarea>
												<span id="msg_error" class="text-danger"></span>
											</div>
										</div>
										<div class="form-group required">
										<div class="pull-right">
											<div class="g-recaptcha" data-sitekey="6Lcmj_UbAAAAAIoUhn8fBBYLX0ZdBszd5r1GqFuU"></div>
											<span id="captcha_error" class="text-danger"></span>
											</div>
										</div>
										</fieldset>
										<div class="buttons">
											<div class="pull-right">
												<button class="btn btn-default buttonGray" type="submit" name="register" id="register">
														<span>Envoyer votre message</span>
													</button>
													</div>
										</div>
							</form>
						</div>
					</div>
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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script>
		$(document).ready(function(){

		$('#captcha_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
		url:"process_data.php",
		method:"POST",
		data:$(this).serialize(),
		dataType:"json",
		beforeSend:function()
		{
			$('#register').attr('disabled','disabled');
		},
		success:function(data)
		{
			$('#register').attr('disabled', false);
			if(data.success)
			{
			$('#captcha_form')[0].reset();
			$('#first_name_error').text('');
			$('#last_name_error').text('');
			$('#email_error').text('');
			$('#tel_error').text('');
			$('#msg_error').text('');
			$('#captcha_error').text('');
			grecaptcha.reset();
			document.getElementById('#ok').style.display = block;
			}
			else
			{
			$('#first_name_error').text(data.first_name_error);
			$('#last_name_error').text(data.last_name_error);
			$('#email_error').text(data.email_error);
			$('#tel_error').text(data.tel_error);
			$('#msg_error').text(data.tel_error);
			$('#captcha_error').text(data.captcha_error);
			}
		}
		})
		});

		});
	</script>


</body>

</html>