<?php
	session_start();

    include("../config/fonction.php");
	if(!empty($_GET["action"])) {
		switch($_GET["action"]) {
			case "remove":
				if(!empty($_SESSION["cart_item"])) {
					foreach($_SESSION['cart_item'] as $k => $v) {
							if($_GET["code"] == $k)
								unset($_SESSION["cart_item"][$k]);				
							if(empty($_SESSION["cart_item"]))
								unset($_SESSION["cart_item"]);
					}
				}
			break;
			case "empty":
				unset($_SESSION["cart_item"]);
			break;	
			case "edit":
				$total_price = 0;
				foreach ($_SESSION['cart_item'] as $k => $v) {
				  if($_POST["code"] == $k) {
					  if($_POST["quantity"] == '0') {
						  unset($_SESSION["cart_item"][$k]);
					  } else {
						$_SESSION['cart_item'][$k]["quantity"] = $_POST["quantity"];
					  }
				  }
				  $total_price += $_SESSION['cart_item'][$k]["price"] * $_SESSION['cart_item'][$k]["quantity"];	
					  
				}
				if($total_price!=0 && is_numeric($total_price)) {
					print number_format($total_price,2)." TND";
					exit;
				}
			break;	
		}
	}
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Panier</title>
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
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
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
				<li><a href="https://betatestfront.expert-gaming.tn/"><i class="fa fa-home"></i></a></li>
				<li>Panier</li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			<h2 class="title">Panier</h2>
			<div class="table-responsive form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">Image</td>
							<td class="text-left">Nom du Produit</td>
							<td class="text-left">Référence</td>
							<td class="text-left">Quantité</td>
							<td class="text-right">Prix Unitaire</td>
						</tr>
					</thead>
					<tbody>
					<form name="frmCartEdit" id="frmCartEdit"> 
					<?php
					$total_price = 0.00;
					if(isset($_SESSION["cart_item"])){
					?>	
					<?php foreach ($_SESSION["cart_item"] as $item) { 
							$PDO_query_produit_panier = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_id = :code AND eg_produit_statut = 1");
							$PDO_query_produit_panier->bindParam(":code", $item["code"]);
							$PDO_query_produit_panier->execute();					
							while($productByCode_sql = $PDO_query_produit_panier->fetch(PDO::FETCH_ASSOC)) {
								$resultset[] = $productByCode_sql;
							}		
							if(!empty($resultset)){$resultset_final = $resultset;}else{$resultset_final = 0;}
							
							$PDO_query_produit_panier->closeCursor();

							$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
							$PDO_query_verif_product->bindParam(":eg_produit_id", $item["code"]);
							$PDO_query_verif_product->execute();
							$verif_product = $PDO_query_verif_product->fetch();							
							$PDO_query_verif_product->closeCursor();
							$total_price += $item["price"] * $item["quantity"];	
					?>
					<tr>
							<td class="text-center"><a href="#"><img width="70px" src="https://betatest.expert-gaming.tn<?php echo $verif_product['eg_image_produit_nom']; ?>" alt="" title="" class="img-thumbnail"></a></td>
							<td class="text-left"><a href="#"><?php echo $item["nom"]; ?></a><br>
							</td>
							<td class="text-left"><?php echo $item["ref"]; ?></td>
							<td class="text-left" width="200px"><div class="input-group btn-block quantity">
								<input type="number" name="quantity" id="<?php echo $item["code"].'-'.$item["ref"]; ?>" value="<?php echo $item["quantity"]; ?>" size="2" onBlur="saveCart(this);" class="form-control"/>
								<span class="input-group-btn">
								<a href="panier.php?action=remove&code=<?php echo $item["code"].'-'.$item["ref"]; ?>" data-toggle="tooltip" title="Remove from Cart" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
								</span></div></td>

							<td class="text-right"><?php echo number_format($item["price"],3)." TND"; ?></td>

						</tr>
						
						<?php
							}
						}
						?>
						</form>
					</tbody>
				</table>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-offset-8">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td class="text-right">
									<strong>Total TTC:</strong>
								</td>
								<td class="text-right" id="total_price"><?php echo number_format($total_price,3)." TND"; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="buttons">
				<div class="pull-left"><a href="https://betatestfront.expert-gaming.tn/" class="btn btn-primary">Continuer les achats</a><a class="btn btn-danger ml-1" href="panier.php?action=empty">Vider le panier</a></div>
				<div class="pull-right"><a href="#" class="btn btn-primary">Commander</a></div>
			</div>
			</div>
			<!--Middle Part End -->
				
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/themejs/libs.js"></script>
	<script type="text/javascript" src="../js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="../js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="../js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="../js/themejs/application.js"></script>
	<script type="text/javascript" src="../js/themejs/homepage.js"></script>
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
	<script charset="utf-8" >
	function saveCart(obj) {
	var quantity = $(obj).val();
	var code = $(obj).attr("id");
	$.ajax({
		url: "?action=edit",
		type: "POST",
		data: 'code='+code+'&quantity='+quantity,
		success: function(data, status){$("#total_price").html(data)},
		error: function () {alert("Problen in sending reply!")}
	});
}
	</script>	

</body>

</html>