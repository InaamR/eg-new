<div class="products-slider-bottom mt-40">
						<div class="row">

							<div class="module so-extraslider--new titleLine col-sm-6 col-xs-12">
								<h3 class="modtitle modtitle--small">Nouveau produit</h3>
								<div id="so_extraslider1__home8">
									
									<!-- Begin extraslider-inner -->
									<div class="so-extraslider products-list grid product-style__8"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="3" data-items_column1="2" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
										
										
										
										<!--Begin Nouveau produit-->

                                    <?php

                                        $PDO_query_new_produit_promo = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_date >= '2021-06-04' ORDER BY RAND() LIMIT 4");
                                        $PDO_query_new_produit_promo->execute();

                                        while ($new_produit_promo = $PDO_query_new_produit_promo->fetch()){

                                        echo'
                                        
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container">
													';


													$PDO_query_new_produit_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
													$PDO_query_new_produit_image->bindParam(":eg_produit_id", $new_produit_promo['eg_produit_id']);
													$PDO_query_new_produit_image->execute();

													while ($new_produit_image = $PDO_query_new_produit_image->fetch()){

													echo'
														<img src="https://betatest.expert-gaming.tn' . $new_produit_image['eg_image_produit_nom'] . '" alt="' . $new_produit_image['eg_image_produit_title'] . '" class="img-responsive" />
														';

													}

													$PDO_query_new_produit_image->closeCursor();


													echo'
													</div>
													<!--Sale Label-->
													<span class="label label-new">Nouveau produit</span>
													
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="pages/quickview.php?produit_id='.$new_produit_promo['eg_produit_id'].'">Aperçu rapide</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$new_produit_promo['eg_produit_id'].'">' . $new_produit_promo['eg_produit_nom'] . '</a></h4>
                                                        <h5>Référence: ' . $new_produit_promo['eg_produit_reference'] . '</h5>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
                                                            <span class="price">' . $new_produit_promo['eg_produit_prix'] . ' TND</span><br>
                                                            <span class="price">&nbsp</span>
                                                        </div>
													</div>
													
													<div class="button-group">
														<button class="addToCart addToCart--notext" type="button" onclick="cart.add(\'42\', \'1\');"><i class="fas fa-cart-plus"></i> <span class="button-group__text">Add to Cart</span></button>
														<button class="wishlist" type="button" onclick="wishlist.add(\'42\');"><i class="fa fa-heart"></i>  </button>
														<button class="compare" type="button" onclick="compare.add(\'42\');"><i class="fa fa-exchange-alt"></i>  </button>
													</div>
												</div><!-- right block -->
											</div>
										</div>
										

                                        ';

                                        }

                                        $PDO_query_new_produit_promo->closeCursor();
									
                                    ?>
                                        <!--End Nouveau produit-->




									</div>
									<!--End extraslider-inner -->
								</div>
							</div>

							<div class="module so-extraslider--new titleLine col-sm-6 col-xs-12">
								<h3 class="modtitle modtitle--small">Produit en promo</h3>
								<div id="so_extraslider1__home8">
									
									<!-- Begin extraslider-inner -->
									<div class="so-extraslider products-list grid product-style__8"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="3" data-items_column1="2" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
									
									
										<!--Begin Produit Promo-->

                                    <?php

                                        $PDO_query_produit_promo = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_promo > '0' ORDER BY RAND() LIMIT 4");
                                        $PDO_query_produit_promo->execute();

                                        while ($produit_promo = $PDO_query_produit_promo->fetch()){

                                        echo'
                                        
										<div class="ltabs-item product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container">
													';


													$PDO_query_produit_promo_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
													$PDO_query_produit_promo_image->bindParam(":eg_produit_id", $produit_promo['eg_produit_id']);
													$PDO_query_produit_promo_image->execute();

													while ($produit_promo_image = $PDO_query_produit_promo_image->fetch()){

													echo'
														<img src="https://betatest.expert-gaming.tn' . $produit_promo_image['eg_image_produit_nom'] . '" alt="' . $produit_promo_image['eg_image_produit_title'] . '" class="img-responsive" />
														';

													}

													$PDO_query_produit_promo_image->closeCursor();


													echo'
													</div>
													<!--Sale Label-->
													<span class="label label-sale">Produit en promo</span>
													
													<!--full quick view block-->
													<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="pages/quickview.php?produit_id='.$produit_promo['eg_produit_id'].'">Aperçu rapide</a>
													<!--end full quick view block-->
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$produit_promo['eg_produit_id'].'">' . $produit_promo['eg_produit_nom'] . '</a></h4>
                                                        <h5>Référence: ' . $produit_promo['eg_produit_reference'] . '</h5>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
                                                        <span class="price-new">' . $produit_promo['eg_produit_promo'] . ' TND</span><br>
                                                        <span class="price-old">' . $produit_promo['eg_produit_prix'] . ' TND</span>
                                                        </div>
													</div>
													
													<div class="button-group">
														<button class="addToCart addToCart--notext" type="button" onclick="cart.add(\'42\', \'1\');"><i class="fas fa-cart-plus"></i> <span class="button-group__text">Add to Cart</span></button>
														<button class="wishlist" type="button" onclick="wishlist.add(\'42\');"><i class="fa fa-heart"></i>  </button>
														<button class="compare" type="button" onclick="compare.add(\'42\');"><i class="fa fa-exchange-alt"></i>  </button>
													</div>
												</div><!-- right block -->
											</div>
										</div>
										

                                        ';

                                        }

                                        $PDO_query_produit_promo->closeCursor();
									
                                    ?>

                                        <!--End Produit Promo-->



										
									</div>
									<!--End extraslider-inner -->
								</div>
							</div>
								
						</div>
					</div>