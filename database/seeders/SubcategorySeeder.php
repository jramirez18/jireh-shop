<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
//IMPORTAMOS PARA SLUG
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DEFINIMOS UNA VARIABLE LLAMADA SUBCATEGORIES Y LE ASIGNAMOS UN ARRAY Y DENTRO DEL ARRAY DEFINIMOS OTRO ARRAY CON LOS CAMPOS
        $subcategories=[
            //ropa para caballero
            [
                'category_id'=>1,
                'name'=>'Camisas',
                'slug'=>Str::slug('Camisas'),
                'color'=>true,
            ],

            [
                'category_id'=>1,
                'name'=>'Polos',
                'slug'=>Str::slug('Polos'),
                'color'=>true,
            ],

            [
                'category_id'=>1,
                'name'=>'Sudaderas',
                'slug'=>Str::slug('Sudaderas'),
                'color'=>true,
            ],
            [
                'category_id'=>1,
                'name'=>'Chaquetas',
                'slug'=>Str::slug('Chaquetas'),
                'color'=>true,
            ],

            //CALZADO PARA CABALLERO
            [
                'category_id'=>2,
                'name'=>'Botas',
                'slug'=>Str::slug('Botas'),
                'color'=>true,
            ],
            [
                'category_id'=>1,
                'name'=>'Zapatos',
                'slug'=>Str::slug('Zapatos'),
                'color'=>true,
            ],
            [
                'category_id'=>1,
                'name'=>'Tenis',
                'slug'=>Str::slug('Tenis'),
                'color'=>true,
            ],

            //ACCESORIOS
            [
                'category_id'=>3,
                'name'=>'Mochilas',
                'slug'=>Str::slug('Mochilas'),
            
            ],
            [
                'category_id'=>3,
                'name'=>'Relojes',
                'slug'=>Str::slug('Relojes'),
                
            ],
        ];

        //AL IGUAL QUE CATEGORIAS DEBEMOS DE CREAR IMAGENES PARA LAS SUBCATEGORIAS...ABRIMOS EL FACTORY SUBCATEGORY


        //Ahora este array $subcategories=[ que tenemos aqui lo integramos dentro de un foreach
        foreach ($subcategories as $subcategory) {//y conforme vaya encontrando un nuevo registro, quiero que los almacene temporalmente en una variable llamada subcategory
            
            # vamos a pedir que se cree una nueva subcategoria, para que cree los nuevos registros utilizando faker
            Subcategory::factory(1)->create($subcategory);//al create le pasamos la infomacion que recuperamos con la variable $subcategory

            #Ahora debemos de incluir este Seeder dentro del DatabaSeeder

        }
    }
}
