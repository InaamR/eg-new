<?php


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
  else
    $url = "http";     
    $url .= "://";     
    $url .= $_SERVER['HTTP_HOST']; 
    $url .= $_SERVER['REQUEST_URI']; 



$PARAM_hote        = 'localhost'; 
$PARAM_nom_bd      = 'expert_gaming'; 
$PARAM_utilisateur = 'root'; 
$PARAM_mot_passe   = ''; 
$PARAM_nom_site    = 'Expert-Gaming'; 
$PARAM_mail_site   = 'contact@expert-gaming.tn'; 
$PARAM_url_site    = 'http://localhost/version_enligne_front/'; 
$PARAM_url_non_doc_site    = 'version_enligne_front/'; 


/*$PARAM_hote        = 'localhost'; 
$PARAM_nom_bd      = 'expertga_expert_gaming'; 
$PARAM_utilisateur = 'expertga_admin'; 
$PARAM_mot_passe   = 'Babnet@2020209999'; 
$PARAM_port   = '3306';
$PARAM_nom_site    = 'Expert-Gaming'; 
$PARAM_mail_site   = 'contact@expert-gaming.tn';  
$PARAM_url_site    = 'https://betatestfront.expert-gaming.tn/'; 
$PARAM_url_non_doc_site    = '';*/

?>