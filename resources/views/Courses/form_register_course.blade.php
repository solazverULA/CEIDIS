<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Registro de Cursos</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="{{asset('css/jquery-ui_form.css')}}" />
	<link href="{{asset('css/style_form.css')}}" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1> Registro de Cursos </h1>

	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="/admin/register-completed" method="post">

			{{ csrf_field() }}

			<h3 class="sub-heading-agileits">Datos del curso</h3>
		<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="name" placeholder="Nombre del curso" required="">
				</div>
			</div>
<!--CEDULA Y TELEFONO -->


		<div class="main-flex-w3ls-sectns">

				<textarea name="description" placeholder="Descripcion del curso"></textarea>

		</div>

		<div class="main-flex-w3ls-sectns">


				<textarea name="summary" placeholder="Resumen del curso"></textarea>


		</div>

		<div class="main-flex-w3ls-sectns">

			<!--
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control">
						<option>V/E</option>
						<option value="V">V</option>
						<option value="E">E</option>
					</select>
				</div>
			-->
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="hours" placeholder="Horas" pattern="^([0-9]{1,4})$" title="Horas" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="uc" placeholder="Unidades Credito (UC)" pattern="^([0-9]{1,4})$" title="UC" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="id" placeholder="ID del curso" pattern="^([0-9]{1,4})$" title="id" required="">
				</div>
		</div>



			<div class="radio-section">
				<h6>Tipo</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="type" value="1" required="">
						<label for="a-option">CURSO</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="type" value="2" required="">
						<label for="b-option">TALLER</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>




<!--
<div class="field-agileinfo-spc form-w3-agile-text2">
	<input type="text" name="Phone no" placeholder="Phone Number" required="">
</div>
-->



			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="min_capacity" placeholder="Capacidad Minima" pattern="^([0-9]{1,2})$" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="max_capacity" placeholder="Capacidad Maxima" pattern="^([0-9]{1,3})$" required="">
				</div>
			</div>



			<!--
			<h2 class="sub-heading-agileits">Emergency Contact Details</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="Name" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Name" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="Relationship" placeholder="Relationship" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Phone no" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="radio-section">
				<h6>Taking any medications currently</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="selector1">
						<label for="a-option">Yes</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">No</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		-->

			<input type="submit" value="Registrar">
			<input type="reset" value="Limpiar Formulario">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
		<p>&copy; 2018. OP Registration Form . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>

</html>
