<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front.home');
// });

 Route::get('/', 'MasterController@master')->name('master.index');
 Route::get('/detalle/{id}', 'MasterController@detalle')->name('master.detalle');
 Route::get('/todos', 'MasterController@todos')->name('master.todos');
// //->middleware('permission:masters.index');

//exportar PDF
Route::get('pdf', 'ProductController@pdf')->name('products.pdf');

//mailchip
Route::post('subscribete', 'EmailController@email')->name('email.newsletter');
//gmail 
Route::post('mail', 'EmailController@store')->name('mail.store');



//panel de administración
Route::get('/admin', function () {
    return view('admin.panel');
})->middleware('auth')->name('admin');

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Route::..
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Route::..
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//rutas del login

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){

    //rutas roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //rutas productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
    ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');

    Route::get('products/create' , 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');

   


    //rutas usuarios    
    Route::get('users/create' , 'UserController@create')->name('users.create')
    ->middleware('permission:users.create');

    Route::post('users/store', 'UserController@store')->name('users.store')
    ->middleware('permission:users.create');


    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');   

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');


    //master edición de los campos   
    Route::post('editar_master', 'MasterController@update')->name('editar_master')
    ->middleware('permission:masters.edit');

  

    //master edición de los campos  




    //Sección uno  
     Route::post('seccion_unos/store', 'SeccionUnoController@store')->name('seccion_unos.store')
     ->middleware('permission:seccion_unos.create');
 
     Route::get('seccion_unos', 'SeccionUnoController@index')->name('seccion_unos.index')
     ->middleware('permission:seccion_unos.index');

 
     Route::get('seccion_unos/create' , 'SeccionUnoController@create')->name('seccion_unos.create')
     ->middleware('permission:seccion_unos.create');
 
     Route::put('seccion_unos/{seccionUno}', 'SeccionUnoController@update')->name('seccion_unos.update')
     ->middleware('permission:seccion_unos.edit');
 
     Route::get('seccion_unos/{seccionUno}', 'SeccionUnoController@show')->name('seccion_unos.show')
     ->middleware('permission:seccion_unos.show');
 
     Route::delete('seccion_unos/{seccionUno}', 'SeccionUnoController@destroy')->name('seccion_unos.destroy')
     ->middleware('permission:seccion_unos.destroy');
 
     Route::get('seccion_unos/{seccionUno}/edit', 'SeccionUnoController@edit')->name('seccion_unos.edit')
     ->middleware('permission:seccion_unos.edit');


      //rutas categorias
    Route::post('categories/store', 'CategoryController@store')->name('categories.store')
    ->middleware('permission:categories.create');

    Route::get('categories', 'CategoryController@index')->name('categories.index')
    ->middleware('permission:categories.index');

    Route::get('categories/create' , 'CategoryController@create')->name('categories.create')
    ->middleware('permission:categories.create');

    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
    ->middleware('permission:categories.edit');

    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
    ->middleware('permission:categories.show');

    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
    ->middleware('permission:categories.destroy');

    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
    ->middleware('permission:categories.edit');

    //rutas para las fotos multiples.
    Route::post('fotos/add', 'FotoController@store')->name('foto.store')
    ->middleware('permission:fotos.create');

    Route::post('fotos/{id}/edit', 'FotoController@editar')->name('foto.edit')
    ->middleware('permission:fotos.edit');

    Route::delete('fotos/{id}', 'FotoController@destroy')->name('fotos.destroy')
    ->middleware('permission:fotos.destroy');

    //personas
    Route::post('personas/store', 'PersonaController@store')->name('personas.store')
    ->middleware('permission:personas.create');

    Route::get('personas', 'PersonaController@index')->name('personas.index')
    ->middleware('permission:personas.index');

    Route::get('personas/create' , 'PersonaController@create')->name('personas.create')
    ->middleware('permission:personas.create');

    Route::put('personas/{persona}', 'PersonaController@update')->name('personas.update')
    ->middleware('permission:personas.edit');

    Route::get('personas/{persona}', 'PersonaController@show')->name('personas.show')
    ->middleware('permission:personas.show');

    Route::delete('personas/{persona}', 'PersonaController@destroy')->name('personas.destroy')
    ->middleware('permission:personas.destroy');

    Route::get('personas/{persona}/edit', 'PersonaController@edit')->name('personas.edit')
    ->middleware('permission:personas.edit');

    


});