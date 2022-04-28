<!DOCTYPE html>
 <html lang="fr">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
     <!-- Basic page needs
	============================================ -->
	 <title>Modal configurateur</title>
	 <meta charset="utf-8" />
     <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
     <meta name="author" content="Magentech" />
     <meta name="robots" content="index, follow" />
   
	 <!-- Mobile specific metas
	============================================ -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	 <!-- Favicon
	============================================ -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
     <link rel="shortcut icon" href="ico/favicon.png" />
	
	 <!-- Google web fonts
	============================================ -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
     <!-- Libs CSS
	============================================ -->
     <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	 <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	 <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" />
	 <link href="css/themecss/lib.css" rel="stylesheet" />
	 <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	
	 <!-- Theme CSS
	============================================ -->
	 <link href="datatables/Responsive-2.2.9/css/responsive.bootstrap.css" rel="stylesheet">
	 <link href="css/configurateur.css" rel="stylesheet">
	 <link href="css/product-list.css" rel="stylesheet">
	 <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
   
 </head>

 <body class="res layout-subpage">
     <div id="wrapper" class="wrapper-full ">
	<!-- Main Container  -->
		<div class="main-container container-fluid">
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">
					
					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="accordion-heading">
									<span class="ico-1"></span>
									<h3 class="title">Processeurs</h3>
								</div>

								<div class="content-product col-sm-12 col-xs-12 ">
								<table id="example" class="display" style="width:100%">
									<thead>
										<tr>
											<th>Détails</th>
											<th>Désignation</th>
											<th>Prix</th>
											<th>Disponibilité</th>
											<th>Evaluation</th>
											<th></th>
										</tr>
									</thead>

								</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Middle Part End-->
		</div>
	 <!-- //Main Container -->
	</div>

 <!-- Include Libs & Plugins
	============================================ -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
 <script type="text/javascript" src="js/themejs/libs.js"></script>
 <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
 <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
 <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
 <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
 <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	
	<script>
		/* Formatting function for row details - modify as you need */
		function format ( d ) {
			// `d` is the original data object for the row
			return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
				'<tr>'+
					'<td rowspan="2">'+d.img+'</td>'+
					'<td>'+d.title+'</td>'+
				'</tr>'+
				'<tr>'+
					'<td>'+d.desc+'</td>'+
				'</tr>'+	
			'</table>';
		}
		
		$(document).ready(function() {
			var table = $('#example').DataTable( {
				"ajax": "pages/objects.txt",
				"columns": [
					{
						"className":      'details-control',
						"orderable":      false,
						"data":           null,
						"defaultContent": ''
					},
					{ "data": "name" },
					{ "data": "prix" },
					{ "data": "dispo" },
					{ "data": "action" },
					{ "data": "select" }
				],
				"order": [[1, 'asc']]
			} );
			
			// Add event listener for opening and closing details
			$('#example tbody').on('click', 'td.details-control', function () {
				var tr = $(this).closest('tr');
				var row = table.row( tr );
		
				if ( row.child.isShown() ) {
					// This row is already open - close it
					row.child.hide();
					tr.removeClass('shown');
				}
				else {
					// Open this row
					row.child( format(row.data()) ).show();
					tr.addClass('shown');
				}
			} );
		} );
	</script>

 <!-- Theme files
============================================ -->
 <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
 <script type="text/javascript" src="js/themejs/addtocart.js"></script>
 <script type="text/javascript" src="js/themejs/application.js"></script>
</body>

</html>