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

        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('subcategories');
        //Aca le indicamos que cree la carpeta products
        //llamamos al facade Storage y accedemos al metodo makeDirectory
        Storage::makeDirectory('categories');//como anterior mente ya habiamos modificado el fileSystem a Public ayi es donde se creara esta carpeta
        Storage::makeDirectory('subcategories');


        //llamamos al metodo call
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);

        //Luego corremos las migraciones junto con los Seeders
        #php artisan migrate:fresh --seed
    }
}
