<?php

namespace App\Http\Controllers;

use App\SeccionUno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeccionUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $secciones=seccionUno::all();
        //dd($secciones);

        return view('admin.seccionUno.index', compact('secciones')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seccionUno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccion=SeccionUno::create($request->all());

        if($request->file('banner')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('banner'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $seccion->fill(['banner' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        if($request->file('imguno')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('imguno'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $seccion->fill(['imguno' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('seccion_unos.index')
        ->with('info','Imagenes guardadas con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeccionUno  $seccionUno
     * @return \Illuminate\Http\Response
     */
    public function show(SeccionUno $seccionUno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeccionUno  $seccionUno
     * @return \Illuminate\Http\Response
     */
    public function edit(SeccionUno $seccionUno)
    {
        return view('admin.seccionUno.edit', compact('seccionUno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeccionUno  $seccionUno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeccionUno $seccionUno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeccionUno  $seccionUno
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeccionUno $seccionUno)
    {
        $seccionUno->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
