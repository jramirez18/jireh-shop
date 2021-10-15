<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

//importamos la clase str para lo del slug
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //definimos un array
        $categories=[
            [
                'name'=>'Ropa para caballero',
                'slug'=>Str::slug('Ropa'),
                'icon'=>'<i class="fas fa-tshirt"></i>'
            ],
            [
                'name'=>'Calzado para caballero',
                'slug'=>Str::slug('Calzado para caballero'),
                'icon'=>'<i class="fas fa-shoe-prints"></i>'
            ],
            [
                'name'=>'Accesorios',
                'slug'=>Str::slug('Accesorios'),
                'icon'=>'<i class="fas fa-shopping-bag"></i>'
                ]
        ];

        //no creamos el registro de categorias con CREATE si no que lo hacemos con el metodo Factory
        foreach ($categories as $category) {
            # code...
            Category::factory(1)->create($category);//vamos a decirle que me cree un registro por cada vez que se ejecute el metodo factory
        }
    }

    //slug= son url amigable es decir pasar a minuscula el nombre y quitar tildes

    //creamos un Factory para Categorias...php artisan make:factory CategoryFactory

    //Nos vamos al databseSeeder y le indicamos que cree la carpeta Products= public/storage/products'
}
