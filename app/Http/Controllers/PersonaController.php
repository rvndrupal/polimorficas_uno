<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::orderBy('id','DESC')->get();

        return view('admin.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona=Persona::create($request->all());

        if($request->file('imguno')){ //i se manda el archivo
            $path=Storage::disk('public')->put('imauno', $request->file('imguno'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $persona->fill(['imguno' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        if($request->file('imgdos')){ //i se manda el archivo
            $path=Storage::disk('public')->put('imados', $request->file('imgdos'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $persona->fill(['imgdos' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('personas.index')
        ->with('info','Persona creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('admin.personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('admin.personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());

        if($request->file('imguno')){ //i se manda el archivo
            $path=Storage::disk('public')->put('imauno', $request->file('imguno'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $persona->fill(['imguno' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        if($request->file('imgdos')){ //i se manda el archivo
            $path=Storage::disk('public')->put('imados', $request->file('imgdos'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $persona->fill(['imgdos' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('personas.index')
        ->with('info','Persona Actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
