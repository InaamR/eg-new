<div class="module titleLine">
						<h3 class="modtitle modtitle--small">Dernières actualités</h3>
						<div class="modcontent clearfix container-full">
							<div class="yt-content-slider slider-blog-post"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">


								<?php

                                        $PDO_query_nouvelle_actualite = Bdd::connectBdd()->prepare("SELECT * FROM eg_comm WHERE eg_comm_statut = 1 ORDER BY eg_comm_date DESC");
                                        $PDO_query_nouvelle_actualite->execute();

                                        while ($nouvelle_actualite = $PDO_query_nouvelle_actualite->fetch()){

                                            $date = date_create($nouvelle_actualite['eg_comm_date']);
								            $date = date_format($date, "d/m/Y");

                                                            echo '

                                                            <div class="item-post">
                                                            <div class="banners image-blog">
                                                                <div>
                                                                    <a title="' . $nouvelle_actualite['eg_comm_titre'] . '" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$nouvelle_actualite['eg_comm_id'].'">
                                                                        <img src="https://betatest.expert-gaming.tn' . $nouvelle_actualite['eg_comm_img'] . '" alt="' . $nouvelle_actualite['eg_comm_titre'] . '">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="info-blog">
                                                                <div class="date-post-title">
                                                                    <div class="date-post">
                                                                        <div class="day">' . $nouvelle_actualite['eg_comm_jour'] . '</div>
                                                                        <div class="month">' . $nouvelle_actualite['eg_comm_mois'] . '</div>
                                                                    </div>
                                                                    <h2 class="postTitle"><a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$nouvelle_actualite['eg_comm_id'].'">' . $nouvelle_actualite['eg_comm_titre'] . '</a></h2>
                                                                </div>
                                                                <div class="postContent">' . $nouvelle_actualite['eg_comm_sous_titre'] . '</div>
                                                            </div>
                                                        </div>
                                                            
                                                            ';

                                        }
                                        $PDO_query_nouvelle_actualite->closeCursor();
                                ?>
								
							</div>
							
						</div>
					</div>		
			
		