<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>CURSOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="CURSOS del estudiante" />
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
<!-- //Default-JavaScript-File --><!--/ Cursos -->
</head>
<body>
<div class="w3-banner-top">
	<div class="agileinfo-dot">
			
		<div class="w3-banner-grids">
		<div class="w3-edu-top" id="experiences">
		<div class="container">
	
		<div class="w3-edu-grids">
			<div class="col-md-6 w3-edu-grid-left">
				<div class="w3-edu-grid-header">
					<h3>CURSOS</h3>
				</div>
				
				<form>
				@foreach ($courses as $course)
                {{ csrf_field() }}
                <div class="col-md-6 w3-edu-info2">
                	<h3><br><input type="checkbox" name="courses[]"  value="{{ $course->id }}">{{ $course->name }}&nbsp; &nbsp; &nbsp; &nbsp;</br></h3>
                </div>

                @endforeach
                <div class="w3_submit">
                  <input type="submit" name="save" value="Inscribir"></a> 
                </div>
                </form>

			</div>
			
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="copyright">
		<p>&copy; 2018. OP Registration Form . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
	<!--//copyright-->
</body>
</html>