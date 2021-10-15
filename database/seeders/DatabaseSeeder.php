<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('products');
        //Aca le indicamos que cree la carpeta products
        //llamamos al facade Storage y accedemos al metodo makeDirectory
        Storage::makeDirectory('products');//como anterior mente ya habiamos modificado el fileSystem a Public ayi es donde se creara esta carpeta


        //llamamos al metodo call
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);

        //Luego corremos las migraciones junto con los Seeders
    }
}
