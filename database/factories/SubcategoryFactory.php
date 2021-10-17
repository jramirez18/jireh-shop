<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Desde este factory nosotros vamos a indicarle a Facade que queremos que nos descargue una imagen para una categoria
            'image'=>'subcategories/'.$this->faker->image('public/storage/subcategories',640,480,null, false)//aca especificamos la direccion de donde queremos que se almacenen las imagenes y los parametros de alto, ancho,
        ];//Y AHORA NOS DIRIGIMOS AL DATABASE SEEDER
    }
}
