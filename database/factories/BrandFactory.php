<?php
//FACTORY PARA INTRODUCIR REGISTROS DE LAS MARCAS
namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //le indicamos que el campo name lo complete con una palabra
            'name'=>$this->faker->word()
        ];
    }
}
