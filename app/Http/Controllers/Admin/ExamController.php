<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $exam=Exam::latest()->paginate(5);
        return view('exam.index',compact('exam'));

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $roles=[
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'precio' => 'required'
           
    
    
        ];
        $mensajes=[
            'title.required' => 'El campo nombre es obligatorio ingresar',
            'title.max' => 'El campo nombre debe tener como maximo 255 caracteres',
            'description.riquired' => 'El campo descripcion es requerido',
            'precio.required' => 'El campo precio es requerido'
            
            
        ];
    
        $validatedData = $request->validate($roles, $mensajes);
        
        Exam::create(
            $request->only('title','description','precio') 
           
        );
    
        $notification='El examen se ha registrado correctamente';
        return redirect('/exams')->with(compact('notification'));
        //return back()->with('notification', 'El medico se ha registrado correctamente');
    //
       
       
       
       
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('exam.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
       
        $roles=[

            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'precio' => 'required'
    
    
        ];
        $mensajes=[
            'title.required' => 'El campo nombre es obligatorio ingresar',
            'title.max' => 'El campo nombre debe tener como maximo 255 caracteres',
            'description.riquired' => 'El campo descripcion es requerido',
            'precio.required' => 'El campo precio es requerido'
            
        ];
                $validatedData = $request->validate($roles, $mensajes);
                $exam->update($request->all());

        
        $notification='La informacion del examen se ha actualizado correctamente';
        return redirect('/exams')->with(compact('notification')); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
    
         $notification="El examen se ha eliminado correctamente";
        return redirect('/exams')->with(compact('notification')); //
    }
}
