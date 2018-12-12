<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        factory(App\Category::class, 2)->create();
        factory(App\Product::class, 11)->create();
        factory(App\User::class, 1)->create();        
        factory(App\Master::class, 1)->create();
        factory(App\SeccionUno::class, 1)->create();
        factory(App\Persona::class, 4)->create();

        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('rorro13'),

        ]);

        App\Category::create([
            'nombre'=>'seguridad',
        ]);
        App\Category::create([
            'nombre'=>'alarmas',
        ]);
        App\Category::create([
            'nombre'=>'hogar',
        ]);
        App\Category::create([
            'nombre'=>'camaras',
        ]);

        
    }
}
