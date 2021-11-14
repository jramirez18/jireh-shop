<?php

namespace Database\Seeders;

use App\Models\Brand;
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
            # code...video 10, lo asignamos a una variable antes no estaba asi
           $category= Category::factory(1)->create($category)->first();//vamos a decirle que me cree un registro por cada vez que se ejecute el metodo factory, video 10 5.30 pero esto retorna una coleccion
           //10 si queremes acceder al registro de esta coleccion, le pasamos el metodo FIRST, con este metodo recuperamos el primer registro y ya podriamos acceder a su ID

            //video 10, le decimos que se genere la marca despues de crear la categoria
            //modelo BRAND, y automaticamente me agrega la sig linea de codigo use App\Models\Brand; y una ves importado el modelo le vamos a decir que se genere 4 registros de marcas
            $brands=Brand::factory(4)->create();//video 10 ahora generamos la relacion entre los dos modelos 
            //video 10, luego que hemos recuperado esa coleccion, lo iteramos con un bucle foreach
            foreach ($brands as $brand) {// 10, y conforme vaya encontrando nuevas marcas, los vaya almacenando temporalmente en la variable BRAND
                #10, dentro del foreach accdemos al registro y le decimos que recupere la relacion con categorias
                $brand->categories()->attach($category->id); //con el metodo attach, podemos introducir registros en esta tabla intermedia, y debemmos de pasarle el ID de la categoria con el cual quiero relacionar la marca
                //10 attach, este metodo va a tomar el id de esta marca y el ID de la categoria que le pasemos aca

                //10 $brand->categories()->attach($category->id) con esto logramos que cada categoria que generemos contega 4 marcas distintas

            }

        }
    }

    //slug= son url amigable es decir pasar a minuscula el nombre y quitar tildes

    //creamos un Factory para Categorias...php artisan make:factory CategoryFactory

    //Nos vamos al databseSeeder y le indicamos que cree la carpeta Products= public/storage/products'
}
