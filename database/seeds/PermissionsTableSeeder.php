<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //usuarios
         Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de Usuarios',
            'slug' => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Crear un nuevo Usuario',
            'slug' => 'users.create',
            'description'  => 'Crear un nuevo Usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Usuarios',
            'slug' => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description'  => 'Eliminar cualquier dato de un usuario del sistema',

        ]);
        //usuarios

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name' => 'Crear un nuevo Rol',
            'slug' => 'roles.create',
            'description'  => 'Crear un nuevo rol del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description'  => 'Eliminar cualquier dato de un rol del sistema',

        ]);
        //roles

        //Products
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description'  => 'Lista y navega todos los products del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de products',
            'slug' => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Producto',
            'slug' => 'products.create',
            'description'  => 'Crear un nuevo producto del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de products',
            'slug' => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',
            'description'  => 'Eliminar cualquier dato de un producto del sistema',

        ]);
        //Products

        //permisos para editables.

        Permission::create([
            'name' => 'Edicion de masters',
            'slug' => 'masters.edit',
            'description'  => 'Editar cualquier dato de un Master del sistema',

        ]);
        //edición de textos

        //Sección uno
        Permission::create([
            'name' => 'Navegar Seeciónuno',
            'slug' => 'seccion_unos.index',
            'description'  => 'Lista y navega todos los products del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de Sección uno',
            'slug' => 'seccion_unos.show',
            'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Sección uno',
            'slug' => 'seccion_unos.create',
            'description'  => 'Crear un nuevo producto del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Sección uno',
            'slug' => 'seccion_unos.edit',
            'description'  => 'Editar cualquier dato de un Sección uno del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Sección uno',
            'slug' => 'seccion_unos.destroy',
            'description'  => 'Eliminar cualquier dato de un Sección uno del sistema',

        ]);
        //Sección uno

         //CATEGORIAS
         Permission::create([
            'name' => 'Navegar por las Categorias',
            'slug' => 'categories.index',
            'description'  => 'Lista y navega todos los categories del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de categories',
            'slug' => 'categories.show',
            'description'  => 'Ver en detalle de cada Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Crea una nueva Categoria',
            'slug' => 'categories.create',
            'description'  => 'Crear una nueva Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de categories',
            'slug' => 'categories.edit',
            'description'  => 'Editar cualquier Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Categoria',
            'slug' => 'categories.destroy',
            'description'  => 'Eliminar cualquier Categoria del sistema',

        ]);
        //CATEGORIAS


         //persona
         Permission::create([
            'name' => 'Navegar por las Personas',
            'slug' => 'personas.index',
            'description'  => 'Lista y navega todos los personas del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de personas',
            'slug' => 'personas.show',
            'description'  => 'Ver en detalle de cada Persona del sistema',

        ]);

        Permission::create([
            'name' => 'Crea una nueva Persona',
            'slug' => 'personas.create',
            'description'  => 'Crear una nueva Persona del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de personas',
            'slug' => 'personas.edit',
            'description'  => 'Editar cualquier Persona del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Persona',
            'slug' => 'personas.destroy',
            'description'  => 'Eliminar cualquier Persona del sistema',

        ]);
        //persona

       
        
    }
}
