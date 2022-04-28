<?php
try {
$PDO_query_comm = Bdd::connectBdd()->prepare("SELECT * FROM eg_comm WHERE eg_comm_statut = 1 ORDER BY eg_comm_date ASC");
$PDO_query_comm->execute();
$nb_comm = $PDO_query_comm->rowCount();

if($nb_comm == 0){


}else{
	echo '<div class="module container-full home8--banner3">
			<div class="container titleLine">
				<h3 class="modtitle modtitle--small">Actualités</h3>
			</div>
				<div class="owl-banner__slider">';
					while ($comm = $PDO_query_comm->fetch()){

						$date = date_create($comm['eg_comm_date']);
						$date = date_format($date, "d/m/Y");
						echo '

							<div class="banner__item">
								<div class="banners banner__img">
									<div>
										<a title="' . $comm['eg_comm_titre'] . '" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'">
											<img src="https://betatest.expert-gaming.tn' . $comm['eg_comm_img'] . '" alt="' . $comm['eg_comm_titre'] . '">
										</a>
									</div>
								</div>
								
								<div class="banner__info">	
									<h3>' . $comm['eg_comm_sous_titre'] . '</h3>
									';
									// <span class="article-author">Posté par : <a href="#">'.Membre::info($comm['eg_comm_user'], 'nom').' '.Membre::info($comm['eg_comm_user'], 'prenom').'</a></span> | <span class="article-date">Le : '.$date.'</span>
									echo'
								</div>
								
							</div>


						';
					}
	echo '</div>

		</div>';
}

$PDO_query_comm->closeCursor();
} catch (PDOException $x) {
	die("Secured");
}
?>		
			
		