<div class="row">
	<div class="col-12">
		<!-- Tab Start -->
		<div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
			<ul class="product-tab-nav nav justify-content-start align-items-center">
				<?php

					$PDO_query_cat_index = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_hot = 1 ORDER BY eg_menu_ordre DESC");
					$PDO_query_cat_index->execute();

					while ($cat_index = $PDO_query_cat_index->fetch()){
										if($cat_index['eg_menu_ordre'] == 8){
											echo '

											<li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#' . $cat_index['eg_menu_titre'] . '">' . $cat_index['eg_menu_titre'] . '</button></li>
											
											';
										}else{
										echo '

										<li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#' . $cat_index['eg_menu_titre'] . '">' . $cat_index['eg_menu_titre'] . '</button></li>
										
										';
										}

					}
					$PDO_query_cat_index->closeCursor();
				?>

			</ul>
		</div>
		<!-- Tab End -->
	</div>
</div>