<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Desde este factory nosotros vamos a indicarle a Facade que queremos que nos descargue una imagen para una categoria
            'image'=>'categories/'.$this->faker->image('public/storage/categories',640,480,null, false)//aca especificamos la direccion de donde queremos que se almacenen las imagenes y los parametros de alto, ancho,
        ];
    }

    //NOTA: Antes de indicarle que guarde la imagen debemos de tener de presente lo sig. Nosotros a la unica carpeta que podemos ingresar por medio del navegador es a la carpeta 
    //public y si o si nuestras imagenes deben de ser almacenadas en esta carpeta jireh-shop/storage/app/public

    //Dentro de la carpeta Jireh-Shop/public encotramos un acceso directo llamado Storage creado por jetstream y esta acceso directo hace referencia a jireh-shop/storage/app/public
}
