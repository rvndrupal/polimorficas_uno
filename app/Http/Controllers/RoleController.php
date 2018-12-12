<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::paginate();

        return view('admin.roles.index', compact('roles'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();  //se descargan todos los permisos
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=Role::create($request->all());

        //actualizamos los permisos
        $role->permissions()->sync($request->get('permissions'));
        
        return redirect()->route('roles.index')
        ->with('info','Role guardado con exito');
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //dd($role->id);

        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get();  //se descargan todos los permisos

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //actualizamos los roles
        $role->update($request->all());

        //actualizamos los permisos
        $role->permissions()->sync($request->get('permissions'));


        return redirect()->route('roles.edit', $role->id)
        ->with('info','Role actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        $role->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
