<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Student_makes_curso;
use App\Student;
use App\Course;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Perfil.indexPerfil');
    }

    //Muestra datos del perfil del usuario
	public function show_perfil_user($id)
    {
        $user = User::findOrFail($id);
        $student = Student::findOrFail($id);
        //dd($user);
        return view('Perfil.indexPerfil', compact('user','student'));
       
    }

    
    //Muestra los cursos registrados
    public function show_courses()
    {
        $courses = Course::all();
        return view('Perfil.indexCursos', compact('courses'));
       
    }
    //Guarda curso para el estudiante
    public function registro_curso(Request $request,$id)
  	{

        $date = new DateTime();

        $makes_curso=new Student_makes_curso;
        $makes_curso->student_id=$student->student_id;
        $makes_curso->course_id=$request->input('course_id');
        $makes_curso->status=$request->input('status');
        $makes_curso->inscription_date= $date->format();

        $makes_curso->save();

    Student_makes_curso::create($request->all());

    return "Inscripcion completada";
    }


    public function cursos_inscritos()
    {

    $titulo='Listado de Cursos';
    $courses=DB::table('student_makes_cursos')->get();

      return view('Perfil.cursosinscritos',compact('courses','titulo'));
    }

    
		
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
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
		$users = User::find($id);

        dd($users);

    	return view('Perfil.indexPerfil', compact('users'));
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
