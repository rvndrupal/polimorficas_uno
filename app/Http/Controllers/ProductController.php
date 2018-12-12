<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with(['fotos'])->orderBy('id','DESC')->get();
        //$todos=Product::with(['category','fotos'])->orderBy('category_id','DESC')->take(20)->get();
        //dd($products);

        return view('admin.products.index', compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::orderBy('nombre','ASC')->pluck('nombre','id');//paso solo el nombre y el id
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);



        // $product=Product::create($request->all());
        // $product->url=str_slug($request-get('name'));

        $product=Product::create($request->all());
        
        return redirect()->route('products.index')
        ->with('info','Producto guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product->id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories=Category::orderBy('nombre','ASC')->pluck('nombre','id');//paso solo el nombre y el id
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('info','Producto actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('info','Eliminado Correctamente');
    }

    public function pdf(Request $request, Product $product ){
        
        // $nombre=$request->get('nombre');
 
         $productos=Product::with(['category','fotos'])->orderBy('id','DESC')->get();
         //dd($productos);
 
         $pdf = \PDF::loadView('pdf.productos', compact('productos') );
         return $pdf->download('productos.pdf');
         
         
        
     }
}
