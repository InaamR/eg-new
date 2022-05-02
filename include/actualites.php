<?php
try {
$PDO_query_comm = Bdd::connectBdd()->prepare("SELECT * FROM eg_comm WHERE eg_comm_statut = 1 ORDER BY RAND() LIMIT 2");
$PDO_query_comm->execute();
$nb_comm = $PDO_query_comm->rowCount();

if($nb_comm == 0){


}else{
	
					while ($comm = $PDO_query_comm->fetch()){

						$date = date_create($comm['eg_comm_date']);
						$date = date_format($date, "d/m/Y");
						echo '
						<div class="col-lg-6 col-sm-6 mb-xs-30px">
							<div class="single-blog">
								<div class="blog-image">
									<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'"><img src="https://betatest.expert-gaming.tn' . $comm['eg_comm_img'] . '" class="img-responsive w-100" alt="' . $comm['eg_comm_titre'] . '"></a>
								</div>
								<div class="blog-text">
									<div class="blog-athor-date line-height-1">
										<span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> '.$date.'</span>
										<span><a class="blog-author" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'"><i class="fa fa-user" aria-hidden="true"></i>'.Membre::info($comm['eg_comm_user'], 'prenom').'</a></span>
									</div>
									<h5 class="blog-heading"><a class="blog-heading-link" href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'">' . $comm['eg_comm_titre'] . '</a></h5>
									<a href="https://'.$_SERVER['SERVER_NAME'].'/'.$PARAM_url_non_doc_site.'Actualites/'.$comm['eg_comm_id'].'" class="btn btn-primary blog-btn"> Lire plus</a>
								</div>
							</div>
						</div>


						';
					}

}

$PDO_query_comm->closeCursor();
} catch (PDOException $x) {
	die("Secured");
}
?>		
			
		