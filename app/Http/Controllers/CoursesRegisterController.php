<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;

class CoursesRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

		public function create_course()
     {
       return view('Courses.form_register_course');
     }

     public function store_form_register(Request $request)
     {
       //dd($request->all());

       //PRIMER METODO:
       /*
           $cursos=new Course;
           $cursos->name=$request->input('name');
           $cursos->description=$request->input('description');
           $cursos->summary=$request->input('summary');
           $cursos->hours=$request->input('hours');
           $cursos->uc=$request->input('uc');
           $cursos->id=$request->input('id');
           $cursos->type=$request->input('type');
           $cursos->min_capacity=$request->input('min_capacity');
           $cursos->max_capacity=$request->input('max_capacity');

           $cursos->save();
        */

        //SEGUNDO METODO:
        //Debe existir dentro del modelo el fillable (para que acepte asignacion
        //masiva)

            Course::create($request->all());
            
       return "Registro del Curso completado";
     }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
