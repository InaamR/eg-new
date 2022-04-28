<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
	<button class="offcanvas-close"></button>
	<div class="user-panel">
		<ul>
			<li><a href="tel:58554255"><i class="fa fa-phone"></i> 58 554 255</a></li>
			<li><a href="mailto:contact@expert-gaming.tn"><i class="fa fa-envelope-o"></i> contact@expert-gaming.tn</a></li>
			<li><a href="#"><i class="fa fa-user"></i> Compte</a></li>
		</ul>
	</div>
	<div class="inner customScroll">
		<div class="offcanvas-menu mb-4">
			<ul>
				<li><a href="<?php echo $url?>"><span class="menu-text">Accueil</span></a></li>
				<?php

					$PDO_query_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 ORDER BY eg_menu_ordre ASC");
					$PDO_query_menu->execute();													
					while ($menu = $PDO_query_menu->fetch()){
											
							$PDO_query_count_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_categorie_id ASC");
							$PDO_query_count_menu->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

							$PDO_query_count_menu->execute();

							$count_menu = $PDO_query_count_menu->fetchColumn();
							$PDO_query_count_menu->closeCursor();

							if($count_menu == 0){

								if($menu['eg_menu_id'] == 227){

									echo '
									<a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'"><span class="menu-text">' . $menu['eg_menu_titre'] . '</span></a>';

								}else{
									
									echo '
									<a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'"><span class="menu-text">' . $menu['eg_menu_titre'] . '</span></a>';

								}

							}else{
											
								echo '
								
								<li>
									<a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/'.$menu['eg_menu_id'].'"><span class="menu-text">' . $menu['eg_menu_titre'] . '</span></a>
									<ul class="sub-menu">
										<li>';

											$PDO_query_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id
											ORDER BY eg_categorie_id ASC");

											$PDO_query_categorie->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

											$PDO_query_categorie->execute();
										
											while ($categorie = $PDO_query_categorie->fetch()){

												echo '
												<a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/cat/'.$categorie['eg_categorie_id'].'"><span class="menu-text">'.$categorie['eg_categorie_nom'].'</span></a>
												<ul class="sub-menu">';



												$PDO_query_sous_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_sous_categorie_id_categorie
												ORDER BY eg_sous_categorie_id ASC");

												$PDO_query_sous_categorie->bindParam(":eg_sous_categorie_id_categorie", $categorie['eg_categorie_id'], PDO::PARAM_INT);

												$PDO_query_sous_categorie->execute();
											
												while ($sous_categorie = $PDO_query_sous_categorie->fetch()){

													echo '
													<li><a href="https://'.$_SERVER['SERVER_NAME'].'/Produit/scat/'.$sous_categorie['eg_sous_categorie_id'].'">'.$sous_categorie['eg_sous_categorie_nom'].'</a></li>';

												}

												$PDO_query_sous_categorie->closeCursor();
												echo '</ul>';
												
											}

											$PDO_query_categorie->closeCursor();
								echo '</li>
								</ul></li>';

							}
					}
					$PDO_query_menu->closeCursor();

				?>
				<li><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Promotions">Promotions</a></li>
			</ul>
		</div>
		<!-- OffCanvas Menu End -->
		<div class="offcanvas-social mt-auto">
			<ul>
				<li>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>