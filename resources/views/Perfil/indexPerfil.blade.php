
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>ESTUDIANTE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Perfil del estudiante" />


<!-- css -->
<!-- font-awesome icons -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />

<link href="{{asset('css/stylePerfil.css')}}" rel='stylesheet' type='text/css' media='all'/>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type='text/css' media='all' />

<!-- //font-awesome icons -->

<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">



<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

</head>
<body>

<!-- banner -->
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			
		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
				
					<h3 class="test"> {{ $user->name}} {{$user->last_name }}</h3>
					
					<p class="test" >{{ $user->address }} </p>
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				<h3>PERFIL DEL ESTUDIANTE</h3>
			
				<p>Descripcion.</p>
			</div>
				<div class=" w3-right-addres-1">
				<ul class="address">
								<li>
									<ul class="agileits-address-text ">

									
										<li class="agile-it-adress-left"><b>NOMBRE</b></li>
											<li><span>:</span> {{ $user->name }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>APELLIDO</b></li>
											<li><span>:</span> {{ $user->last_name }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left">
										<b> TIPO DE USUARIO </b></li>
										<li><span>:</span>
										@if ($user->type == 1 )
											Profesor
										@elseif ($user->type == 2 )
											Estudiante PAD
										@elseif ($user->type == 3 )
											Estudiante CEIDIS
										@elseif ($user->type == 4 )
											Administrador
										@elseif ($user->type == 5 )
											Autoridad ULA
										@elseif ($user->type == 6 )
											Secretaria
										@else
											No posee tipo de usuario
										@endif
										</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
											<li><span>:</span>  {{ $user->email }}</li>
									</ul>
								</li>

								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>INSTITUCION</b></li>
											<li><span>:</span> {{ $student->institution}}</li>
									</ul>
								</li>
								<li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>DEPENDENCIA</b></li>
											<li><span>:</span> {{ $student->department_origin}}</li>
									</ul>
								</li>
								<li>
			
									</ul>
								</li>
								
							</ul> 

				</div>
			</div>
			
		</div>
		</div>
		<div class="w3-banner-text"><a href="{{route('inscribir.curso')}}"><h3><center>Inscribir Cursos</center></h3></a></div>
	</div>

				 

	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
<!-- //education -->					
 <script src="{{('js/jquery.filterizr.js')}}"></script>
    
    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>



<script src="{{('js/bars.js')}}"></script>
<!-- start-smoth-scrolling -->
<script src="{{('js/SmoothScroll.min.js')}}"></script>
<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu-js --> 	
	<script src="{{('js/modernizr.js')}}"></script>	
	<script src="{{('js/menu.js')}}"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>


</body>
</html>
