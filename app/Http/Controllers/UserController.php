<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate();

        return view('admin.users.index', compact('users'));
    }   
   

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //dd($User->id);

        return view('admin.users.show', compact('user'));
    }

    public function create()
    {
        $roles = Role::get(); 
        return view('admin.users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        // $user=User::create($request->all());
        // $user=bcrypt($request['password']);
       $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

         //actualizamos los roles
         $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('users.index')
        ->with('info','Usuario guardado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();  //se descargan todos los roles

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //primero actualizamos el usuario
        $user->update($request->all());

        //actualizamos los roles
        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.index')
        ->with('info','Usuario actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
