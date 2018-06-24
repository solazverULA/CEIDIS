
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
				@forelse ($users as $user)
					
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

				@empty
					<li><span>:</span> No posee registro </li>
				@endforelse
				@forelse ($students as $student)
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
				@empty
					<li><span>:</span> No posee registro </li>
				@endforelse
									

									</ul>
								</li>
								
							</ul> 

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>

	</div>
<!-- banner -->

<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="about">
		<div class="w3-gallery-head">
			<h3>MIS CURSOS</h3>
		</div>
	<div class="container">
		<div class="gallery_gds">
			
            <div class="filtr-container " style="padding: 0px; position: relative; height: 858px;">
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 5" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="{{('images/g11.jpg')}}" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal1">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 5" data-sort="Luminous night" style="opacity: 1; transform: scale(1) translate3d(380px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g21.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal2">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 4" data-sort="City wonders" style="opacity: 1; transform: scale(1) translate3d(760px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g31.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal3">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="In production" style="opacity: 1; transform: scale(1) translate3d(0px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g41.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal4">VER DETALLES</a></div>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="3, 4" data-sort="Industrial site" style="opacity: 1; transform: scale(1) translate3d(380px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g51.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal5">VER DETALLES</a></div>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="3, 4" data-sort="Industrial site" style="opacity: 1; transform: scale(1) translate3d(380px, 286px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g61.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal5">VER DETALLES</a></div>
						</div>
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3" data-sort="City lights" style="opacity: 1; transform: scale(1) translate3d(0px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g71.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal7">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="2, 4" data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(380px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g81.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal8">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="1, 3, 4" data-sort="Dreamhouse" style="opacity: 1; transform: scale(1) translate3d(760px, 572px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g91.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal9">VER DETALLES</a></div>
						</div>	
						
					</div>
				</div>
               <div class="clearfix"> </div>
            </div>
		</div>
	</div>	
	</div>
	<!--//gallery-->
	</div>
<!-- //main-content -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="w3ls-property-images w3-pop1-img">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>CURSO 1</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="w3ls-property-images">
								<img src="images/gal11.jpg" alt="image">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>CURSO 2</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img2">
							<img src="images/gal22.jpg" alt="image">
							</div>
					
						<div class=" ins-details">
							<div class="ins-name">
								<h3>CURSO 3</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="w3ls-property-images w3-pop1-img3">
							<img src="images/gal33.jpg" alt="image">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>CURSO 4</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img4">
							<img src="images/gal44.jpg" alt="image">
							</div>
					
						<div class=" ins-details">
							<div class="ins-name">
								<h3>CURSO 5</h3>
								<p>SBreve descripcion del curso</p>
								<button type="submit"> Inscribir </button>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img5">
							<img src="images/gal66.jpg" alt="image">
							</div>
					
						<div class=" ins-details">
							<div class="ins-name">
								<h3>CURSO 6</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>

							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img6">
								<img src="images/gal61.jpg" alt="image">
							</div>
					
						<div class=" ins-details">
							<div class="ins-name">
								<h3>CURSO 7</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>

							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
					 
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img7">
								<img src="images/gal77.jpg" alt="image">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>CURSO 8</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>

							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img8">
								<img src="images/gal88.jpg" alt="image">
							</div>
					
						<div class=" ins-details">
							<div class="ins-name">
								<h3>CURSO 9</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>

							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class=" w3ls-property-images w3-pop1-img9">
							<img src="images/gal99.jpg" alt="image">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>CURSO 10</h3>
								<p>Breve descripcion del curso</p>
								<button type="submit"> Inscribir </button>

							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>				 				


				 					
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
