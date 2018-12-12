<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Master;
use App\seccionUno;
use App\Product;
use App\Foto;
use App\Category;
use App\Persona;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function master(Product $product){
        $masters=Master::orderBy('id','DESC')->take(1)->get();
        //dd($masters);
        $secciones=seccionUno::orderBy('id','DESC')->take(1)->get();

        $productos=Product::orderBy('id','DESC')->get();

        $lista=Category::orderBy('id','DESC')->take(4)->get();

        //dd($lista);

        $todos=Product::with(['category','fotos'])->orderBy('category_id','DESC')->take(20)->get();

        //dd($todos);

        $videos=Product::orderBY('id','DESC')->take(3)->get();

        //dd($videos);

        $personas=Persona::orderBy('id','DESC')->take(3)->get();

        return view('front.home', compact('masters','secciones','videos','productos','lista','todos','personas')); 
    }


    public function detalle($id){

        $producto=Product::with(['fotos'])->where('id','=',$id)->get();

       //dd($producto);
        $relacionadas=Product::with(['fotos'])->orderByRaw('RAND()')->take(3)->get();

        return view('front.detalle',compact('producto','relacionadas'));
    }

    public function todos(){

        $products=Product::orderBy('id','DESC')->get();

        $header=Product::with(['fotos'])->orderByRaw('RAND()')->take(1)->get();


        return view('front.todos',compact('header','products'));
    }


    public function index()
    { 
        $masters=Master::all();
      
        return view('admin.masters.index',compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $master=Master::create($request->all());
        
        return redirect()->route('masters.index')
        ->with('info','Dato guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        return view('admin.masters.show', compact('master'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $master=Master::find(1);
        $master->titulo=$request->titulo;
        $master->nosotros=$request->nosotros;
        $master->noso_titulo=$request->noso_titulo;
        $master->noso_descri=$request->noso_descri;
        $master->b1=$request->b1;
        $master->b2=$request->b2;
        $master->b3=$request->b3;
        $master->b4=$request->b4;
        $master->b5=$request->b5;
        $master->b6=$request->b6;
        $master->b7=$request->b7;
        // $master->b8=$request->b8;
        // $master->b9=$request->b9;
        $master->b10=$request->b10;
        $master->b11=$request->b11;
        $master->b12=$request->b12;
        $master->b13=$request->b13;
        

        // if($request->file('banner')){ //si se manda el archivo
        //     $path=Storage::disk('public')->put('image', $request->file('banner'));
        //     //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
        //     $master->fill(['banner' => asset($path)])->save(); //actualizame la ruta en el post
        //     //el asset toma toda la ruta y se genera correctamente toda la ruta
        // }

        $master->save();
            
        
        return response()->json($master);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
