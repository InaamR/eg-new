<?php

//fetch_cart.php



$total_price = 0;
$total_item = 0;
$output = '

	<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
	<div class="inner">
	<div class="head">
	<span class="title">Panier</span>
	<button class="offcanvas-close">×</button>
	</div>
	<div class="body customScroll">
	

';




?>
<?php

if(!empty($_SESSION["shopping_cart"]))
{
	echo '<ul class="minicart-product-list">';
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<li>
			<a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
			<div class="content">
				<a href="single-product.html" class="title">'.$values["product_name"].'</a>
				<span class="quantity-price">'.$values["product_quantity"].' x <span class="amount">'.number_format($values["product_quantity"] * $values["product_price"], 3).' TND</span></span>
				<button name="delete" class="remove" id="'. $values["product_id"].'">X</button>
			</div>
		</li>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

		$total_item = $total_item + 1;
		//number_format($total_price, 3)
	}
	echo '</ul>';
}
else
{
 $output .= '
 	<div class="alert alert-dark text-center">Votre panier est vide !</div>
    ';
}



?>		

<?php
if(!empty($_SESSION["shopping_cart"]))
{
$output .= '


</div>
<div class="foot">
<div class="buttons mt-30px">
<a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">Mon panier</a>
<a href="checkout.html" class="btn btn-outline-dark current-btn">Commander</a>
</div>
</div>
</div>
</div>

';
}
else
{
	$output .= '


	</div>
	</div>
	</div>
	
	';
}
echo $output;

?>