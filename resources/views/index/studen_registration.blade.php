<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Registro de estudiante</title>
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
	<link rel="stylesheet" href="css/jquery-ui_form.css" />
	<link href="css/style_form.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1> Registro de estudiante </h1>

	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post">
			<h3 class="sub-heading-agileits">Datos Personales</h3>
		<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="Name" placeholder="Nombres" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Apellido" placeholder="Apellidos" required="">
				</div>
			</div>
<!--CEDULA Y TELEFONO -->

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
					<input type="text" name="cedula" placeholder="Cédula" pattern="^((V|E)0{1,3}[0-9]{6,8})$" title="Debe ser de la forma V0XXXXXXXX / E00XXXXXX" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="telefono" placeholder="Teléfono" pattern="^(\+{0,1}[0-9]+\(-[0-9]+))$" title="Télefono" required="">
				</div>
		</div>

		<div class="main-flex-w3ls-sectns">
				<input type="text" name="direccion" placeholder="Dirección">
		</div>


		<div class="main-flex-w3ls-sectns">
			<div class="field-agileinfo-spc form-w3-agile-text1">
				<select class="form-control">
					<option>Genero</option>
					<option value="Male">Masculino</option>
					<option value="Female">Femenino</option>
				</select>
			</div>
		</div>


			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="Email" placeholder="Correo" pattern="^([A-Za-z0-9._%-]+)@(ula|yahoo|gmail)\.com$" title="Debe ser @ula, @gmail o @yahoo" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Email" placeholder="Confirma tu correo" required="">
				</div>
			</div>

			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="password" name="contrasena" placeholder="Contraseña" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="password" name="contrasenav" placeholder="Confirma tu Contraseña" required="">
				</div>
			</div>




			<div class="radio-section">
				<h6>Tipo de estudiante</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="selector1" required="">
						<label for="a-option">PAD</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1" required="">
						<label for="b-option">Normal</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>


						<div class="radio-section">
							<h6>Institución o empresa a la que pertenece</h6>
							<ul class="radio-buttons-w3-agileits">
								<li>
									<input type="radio" id="a-option" name="selector2" required="">
									<label for="a-option">ULA</label>
									<div class="check"></div>
								</li>
								<li>
									<input type="radio" id="b-option" name="selector2" required="">
									<label for="b-option">Otra</label>
									<div class="check">
										<div class="inside"></div>
									</div>
								</li>
								<li>
									<input type="radio" id="c-option" name="selector2" required="">
									<label for="c-option">Ninguna</label>
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

			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
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
