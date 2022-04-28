<?php
session_start();
    include("../config/fonction.php");	
	
	
	$total_price = 0;
	
	$item_details = '';
	
	$order_details = '
	<div class="table-responsive" id="order_table">
	 <table class="table table-bordered table-striped">
	  	<tr>  
			<th>Nom du produit</th>  
			<th>Quantité</th>  
			<th>Prix</th>  
			<th>Total</th>  
		</tr>
	';
	if(!empty($_SESSION["shopping_cart"]))
	{
	 foreach($_SESSION["shopping_cart"] as $keys => $values)
	 {
	  $order_details .= '
	  <tr>
	   <td>'.$values["product_name"].'</td>
	   <td>'.$values["product_quantity"].'</td>
	   <td align="right" style="white-space: nowrap;">'.$values["product_price"].' TND</td>
	   <td align="right" style="white-space: nowrap;">'.number_format($values["product_quantity"] * $values["product_price"], 3).' TND</td>
	  </tr>
	  ';
	  $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
	
	  $item_details .= $values["product_name"] . ', ';
	 }
	 $item_details = substr($item_details, 0, -2);
	 $order_details .= '
	 <tr>  
			<td colspan="3" align="right;">Total</td>  
			<td align="right" style="white-space: nowrap;">'.number_format($total_price, 3).' TND</td>
		</tr>
	 ';
	}else{
		$order_details .= '
		<tr>  
			   <td colspan="4" align="center">Votre panier est vide</td>  
		   </tr>
		';

	}
	$order_details .= '</table></div>';
	
	?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Confirmation de la commande</title>
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
	<style>
	.require
	{
	border:1px solid #FF0000;
	background-color: #cbd9ed;
	}
  	</style>

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
				<li>Votre panier</li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
						<?php 
						if(!empty($_SESSION["success_message"])){
						?>
							<div class="alert alert-success"><?php echo $_SESSION["success_message"]; ?></div>
						<?php
						}
						?>
						<?php 
						if(!empty($_SESSION["erreur_message"])){
						?>
							<div class="alert alert-danger"><?php echo $_SESSION["erreur_message"]; ?></div>
						<?php
						}
						?>

						  

						<div class="panel panel-default">
							<div class="panel-heading">Validation de la commande</div>
							<div class="panel-body">
								<form method="post" id="order_process_form" action="confirme">
									<div class="row">
										<div class="col-md-6" style="border-right:1px solid #ddd;">
											<div class="row">
												<div class="col-sm-12">
													<label><b>Nom et Prénom * :</b></label>
													<input type="text" name="client" id="client" class="form-control" value="" required/>
													<span id="error_client" class="text-danger"></span>
												</div>
												<div class="col-sm-12">
													<label><b>Adresse email * :</b></label>
													<input type="email" name="email" id="email" class="form-control" value="" required />
													<span id="error_email_address" class="text-danger"></span>
												</div>
												<div class="col-sm-12">
													<label><b>Adresse postale * :</b></label>
													<textarea name="adresse" id="adresse" class="form-control"></textarea>
													<span id="error_adresse" class="text-danger"></span>
												</div>
												
												<div class="col-sm-6">
													<label><b>Gouvernorat * :</b></label>
													<input type="text" name="gouvernorat" id="gouvernorat" class="form-control" value="" required/>
													<span id="error_gouvernorat" class="text-danger"></span>
												</div>
												<div class="col-sm-6">
													<label><b>Code postal * :</b></label>
													<input type="number" onKeyPress="if(this.value.length==4) return false;" onkeydown="return event.keyCode !== 69" name="postal" id="postal" class="form-control" value="" required/>
													<span id="error_postal" class="text-danger"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><b>Téléphone * :</b></label>
													<input type="number" name="tel" id="tel" onKeyPress="if(this.value.length==8) return false;" onkeydown="return event.keyCode !== 69" class="form-control" value="" required/>
													<span id="error_tel" class="text-danger"></span>
												</div>
											</div>
											<hr />
											<h4>Détails du paiement</h4>
											<div class="row">
												<div class="col-md-12">
													<label>Choisissez votre mode de paiement * :</label>
													<select name="commande" class="form-control"  required>
														<option value="">Sélectionnez votre mode de paiement</option>
														<option value="En espèce (dans la boutique)">En espèce (dans la boutique)</option>
														<option value="En espèce (lors de la livraison)">En espèce (lors de la livraison)</option>
														<option value="Par chèque (dans la boutique)">Par chèque (dans la boutique)</option>
													</select>
												</div>
											</div>
											
										</div>
										<div class="col-md-6">
											<h4>Détails de la commande</h4>
											<div class="row">
											<div class="col-md-12">
											<?php
											echo $order_details;
											?>
											</div>
											</div>
											<div class="row">
											<div class="col-md-12">
												<input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
												<input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
												<?php 
												if(!empty($_SESSION["shopping_cart"])){
												?>
													<button type="submit" name="button_action" id="button_action" class="btn btn-success btn-lg" value="Valider votre commande">Valider votre commande</button>
												<?php
												}else{
												?>
												<button type="submit" name="button_action" id="button_action" class="btn btn-success btn-lg" value="Valider votre commande" disabled>Valider votre commande</button>
												<?php
												}
												?>
											
											<hr />
											<small>Informations : <br> Une fois votre commande est validée, un commercial vous contactera pour la suite.</small>
											</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
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
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>

</html>