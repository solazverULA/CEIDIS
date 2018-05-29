<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = User::all();
        return view('User', compact('estudiante'));
       
    }

		public function create_perfil()
    {
       return view('Perfil.indexPerfil');
    }

		/*public function mostrar_cursos()
		{
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "CEIDIS_DB";

			$conexion = mysql_connect($host, $user, $pw) or die ("No se pudo conectar")
			mysql_select_db($db, $conexion)
			$query = "SELECT * FROM course";
			$resultado = mysql_query($query);

			while($fila = mysql_fetch_array($resultado)){
				echo "$fila[name]" <br>;
				echo "$fila[description]" <br>;

			}
		}*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //
				$this->validate($request, [
        'name' => 'required',
        'description' => 'required' , 
				'summary' => 'required', 
				'type'  => 'required' , 
				'uc'  => 'required' , 
				'hours'  => 'required', 
				'max_capacity' => 'required', 
				'min_capacity' => 'required'
    ]);

 
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show_estudiante($id)
    {
    
		$name = User::find($id);
    	if (!is_null($name))
        	return view('name.mostrar', ['name' => $name->toArray()]);
   		else
        	return response('No encontrado', 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
