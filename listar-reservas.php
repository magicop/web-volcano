<?php
	include 'helpers.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/components/daterangepicker.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Volcano Domes - Reservas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('demos/barber/images/bannerdomos/bannerdomo4.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container-fluid vertical-middle clearfix">

						<div class="center">
							<a href="index.html"><img src="demos/barber/images/slider-logo.png" style="width:110px; height:100px;" alt="Canvas Logo"></a>
						</div>

						<div class="card divcenter noradius noborder" style="max-width: 1000px; background-color: rgba(255,255,255,0.93);">
							<div class="card-body" style="padding: 40px;">

								<table class="table">
								  <thead>
									<tr>
									  <th>Nombre Usuario</th>
									  <th>Fecha Reserva</th>
									  <th>Teléfono</th>
									  <th>Correo</th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php
								  		$reservas = getReservas();
								  		if(!empty($reservas)):
								  			while($reserva = mysqli_fetch_assoc($reservas)):
								  	?>
											<tr>
											  <td><?=$reserva['nombreusuario']?></td>
											  <td><?=$reserva['fechareserva']?></td>
											  <td><?=$reserva['telefono']?></td>
											  <td><?=$reserva['correo']?></td>
											</tr>
									<?php						
									
											endwhile;
										endif;

									?>
								  </tbody>
								</table>
								
							</div>
						</div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Date & Time Picker JS -->
	<script src="js/components/moment.js"></script>
	<script src="js/components/datepicker.js"></script>
	<script src="js/components/timepicker.js"></script>

	<!-- Include Date Range Picker -->
	<script src="js/components/daterangepicker.js"></script>
	
	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
	
	
	
	

</body>
</html>