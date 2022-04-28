<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<li>
<div class="table-responsive" id="order_table">
<table class="table table-bordered table-striped">
<tr>  
	  <td class="text-left">Nom</td>
	  <td class="text-center">Qte</td>
	  <td class="text-right">Total</td>
	  <td class="text-right"></td> 
	</tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td class="text-left"><a class="cart_product_name" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'ProduitDetails/'.$values["product_name"].'">'.$values["product_name"].'</a></td>
			<td class="text-center">'.$values["product_quantity"].'</td>
			<td class="text-right">'.number_format($values["product_quantity"] * $values["product_price"], 3).' TND</td>
			<td class="text-right"><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">X</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

		$total_item = $total_item + 1;
	}
	$output .= '
	</table>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td class="text-left"><strong>Total</strong>
					</td>
					<td class="text-right">'.number_format($total_price, 3).' TND</td>
				</tr>
			</tbody>
		</table>
	';
}
else
{
 $output .= '
 	<tr>  
	  <td class="text-center" colspan="4">Votre panier est vide</td> 
	</tr>
 </table>
 <table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-left"><strong>Total</strong>
				</td>
				<td class="text-right">0</td>
			</tr>
		</tbody>
	</table>
    ';
}
$output .= '</div></li>';
$data = array(
 'cart_details'  => $output,
 'total_price'  => '$' . number_format($total_price, 2),
 'total_item'  => $total_item
);

echo json_encode($data);

?>