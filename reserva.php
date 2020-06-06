<?php
	session_start();
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
					<div class="container-fluid vertical-middle divcenter clearfix">

						<div class="center">
							<a href="index.html"><img src="demos/barber/images/slider-logo.png" style="width:110px; height:100px;" alt="Canvas Logo"></a>
						</div>

						<div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
							<div class="card-body input-daterange travel-date-group" style="padding: 40px;">

								<form id="login-form" name="login-form" class="nobottommargin" action="buscar.php" method="post">
									<center><h3>Revisar reserva</h3>

									<label for="">Fecha</label>
									<input type="text" value="" class="form-control default" name="fecha" placeholder="MM/DD/YYYY">
									
									<br>	

									<button class="button button-3d button-black nomargin" name="" type="submit" value="login">Buscar</button>
									
									</center>
									
								</form>
								<br>

								<?php if(isset($_SESSION['error'])): ?>
									
									<center>
										<h5>El día <?=$_SESSION['fecha'];?> <?=$_SESSION['error'];?> se encuentra disponible</h5>
										<?php 
											$_SESSION['fecha'] = null;
											$_SESSION['error'] = null;
										?>
									</center>
								<?php endif; ?>

								<br>

								<form id="login-form" name="login-form" class="nobottommargin" action="insertar.php" method="post">
									<center><h3>Realizar reserva</h3>

									<label for="">Fecha</label>
									<input type="text" value="" class="form-control default" name="fecha" placeholder="MM/DD/YYYY">
									
									<br>	

									<label for="">Nombre</label>
									<input type="text" value="" class="form-control" name="nombreUsuario" placeholder="Nombre completo">

									<br>	

									<label for="">Teléfono contacto</label>
									<input type="text" value="" class="form-control" name="telefono" placeholder="Teléfono de contacto">

									<br>	

									<label for="">Correo</label>
									<input type="text" value="" class="form-control" name="correo" placeholder="Correo electrónico">

									<br>	

									<button class="button button-3d button-black nomargin" name="" type="submit" value="login">Buscar</button>
									
									</center>
									
								</form>

								<br>

								<?php if(isset($_SESSION['mensaje'])): ?>
									
									<center>
										<h5> <?=$_SESSION['mensaje'];?> el día <?=$_SESSION['fecha'];?></h5>
										<?php 
											$_SESSION['mensaje'] = null;
											$_SESSION['fecha'] = null;
										?>
									</center>
								<?php endif; ?>

								
						
								
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
	
	
	
	<script>
		$(function() {
			$('.travel-date-group .default').datepicker({
				autoclose: true,
				startDate: "today",
			});

			$('.travel-date-group .today').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});

			$('.travel-date-group .past-enabled').datepicker({
				autoclose: true,
			});

			$('.travel-date-group .format').datepicker({
				autoclose: true,
				format: "dd-mm-yyyy",
			});

			$('.travel-date-group .autoclose').datepicker();

			$('.travel-date-group .disabled-week').datepicker({
				autoclose: true,
				daysOfWeekDisabled: "0"
			});

			$('.travel-date-group .highlighted-week').datepicker({
				autoclose: true,
				daysOfWeekHighlighted: "0"
			});

			$('.travel-date-group .mnth').datepicker({
				autoclose: true,
				minViewMode: 1,
				format: "mm/yy"
			});

			$('.travel-date-group .multidate').datepicker({
				multidate: true,
				multidateSeparator: " , "
			});

			$('.travel-date-group .input-daterange').datepicker({
				autoclose: true
			});

			$('.travel-date-group .inline-calendar').datepicker();

			$('.datetimepicker').datetimepicker({
				showClose: true
			});

			$('.datetimepicker1').datetimepicker({
				format: 'LT',
				showClose: true
			});

			$('.datetimepicker2').datetimepicker({
				inline: true,
				sideBySide: true
			});

			$('.datetimepicker3').datetimepicker();

		});

		$(function() {
			// .daterange1
			$(".daterange1").daterangepicker({
				"buttonClasses": "button button-rounded button-mini nomargin",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			// .daterange2
			$(".daterange2").daterangepicker({
				"opens": "center",
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'MM/DD/YYYY h:mm A'
				},
				"buttonClasses": "button button-rounded button-mini nomargin",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			// .daterange3
			$(".daterange3").daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			},
			function(start, end, label) {
				var years = moment().diff(start, 'years');
				alert("You are " + years + " years old.");
			});

			// reportrange
			function cb(start, end) {
				$(".reportrange span").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			cb(moment().subtract(29, 'days'), moment());

			$(".reportrange").daterangepicker({
				"buttonClasses": "button button-rounded button-mini nomargin",
				"applyClass": "button-color",
				"cancelClass": "button-light",
				ranges: {
				   'Today': [moment(), moment()],
				   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				   'This Month': [moment().startOf('month'), moment().endOf('month')],
				   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				}
			}, cb);

			// .daterange4
			$(".daterange4").daterangepicker({
				autoUpdateInput: false,
				locale: {
					cancelLabel: 'Clear'
				},
				"buttonClasses": "button button-rounded button-mini nomargin",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			$(".daterange4").on('apply.daterangepicker', function(ev, picker) {
				$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
			});

			$(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
				$(this).val('');
			});

		});

	</script>

</body>
</html>