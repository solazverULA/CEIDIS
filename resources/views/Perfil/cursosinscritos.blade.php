<!doctype html>

<html lang="en">
  <head>

    <title>Listado de Cursos</title>

  </head>

   <body>


		<h1>{{$titulo}}</h1>
				<ul>
					@foreach ($courses as $course)
						<li>
                            {{$course->name}}

                        </li>
					@endforeach
				</ul>
	</body>
</html>
