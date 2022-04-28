<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Expert-Gaming | 404</title>
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
    <link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
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
    <link href="../css/404.css" rel="stylesheet">

</head>

<body>
<div id="wrapper" class="wrapper-full">

  <!-- Header Container  -->
  <?php
      include("../include/top.php");
    ?>

    <!-- Main container begin-->
    <div class="container-fluid"> 
                        <?php
                        switch($_GET['erreur'])
                        {
                            case '400':
                            echo 'Échec de l\'analyse HTTP.';
                            break;
                            case '401':
                            echo 'Le pseudo ou le mot de passe n\'est pas correct !';
                            break;
                            case '402':
                            echo 'Le client doit reformuler sa demande avec les bonnes données de paiement.';
                            break;
                            case '403':
                            echo 'Requête interdite !';
                            break;


                            case '404':
                            echo '<div class="content-error">

                                    <p class="error">4</p>
                                    <div class="logo">
                                    <img src="../EXPERT_LOGO/EXPERT/PNG FILES/Expert1.png" alt="">
                                    </div>
                                    <p class="error">4</p>
                            
                                </div>
                                <div class="error-message">Oops Page not found!!!</div>';
                            break;



                            case '405':
                            echo 'Méthode non autorisée.';
                            break;
                            case '500':
                            echo 'Erreur interne au serveur ou serveur saturé.';
                            break;
                            case '501':
                            echo 'Le serveur ne supporte pas le service demandé.';
                            break;
                            case '502':
                            echo 'Mauvaise passerelle.';
                            break;
                            case '503':
                            echo ' Service indisponible.';
                            break;
                            case '504':
                            echo 'Trop de temps à la réponse.';
                            break;
                            case '505':
                            echo 'Version HTTP non supportée.';
                            break;
                            default:
                            echo 'Erreur !';
                        }
                        ?>




                                    
</div>
    <!-- Main container end -->

  <!-- Footer Container -->
  <?php
      include("../include/footer.php");
    ?>
  <!-- //end Footer Container -->

  <!-- Include Libs & Plugins
============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
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

  </body>

</html>