<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine=Medicine::latest()->paginate(5);
        return view('medicine.index',compact('medicine'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('medicine.create');

       
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
        
        
      $roles=[
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'precio' => 'required',
        'stock' => 'required'


    ];
    $mensajes=[
        'title.required' => 'El campo nombre es obligatorio ingresar',
        'title.max' => 'El campo nombre debe tener como maximo 255 caracteres',
        'description.riquired' => 'El campo descripcion es requerido',
        'precio.required' => 'El campo precio es requerido',
        'stock.required' => 'El campo stock es requerido'
        
    ];

    $validatedData = $request->validate($roles, $mensajes);
    
    Medicine::create(
        $request->only('title','description','precio','stock') 
       
    );

    $notification='La medicina se ha registrado correctamente';
    return redirect('/medicines')->with(compact('notification'));
    //return back()->with('notification', 'El medico se ha registrado correctamente');
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        
        return view('medicine.edit',compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {


        $roles=[
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'precio' => 'required',
            'stock' => 'required'
    
    
        ];
        $mensajes=[
            'title.required' => 'El campo nombre es obligatorio ingresar',
            'title.max' => 'El campo nombre debe tener como maximo 255 caracteres',
            'description.riquired' => 'El campo descripcion es requerido',
            'precio.required' => 'El campo precio es requerido',
            'stock.required' => 'El campo stock es requerido'
            
        ];
                $validatedData = $request->validate($roles, $mensajes);
                $medicine->update($request->all());

        
        $notification='La informacion del paciente se ha actualizado correctamente';
        return redirect('/medicines')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
    
         $notification="la medicina se ha eliminado correctamente";
        return redirect('/medicines')->with(compact('notification'));
//
    }
}
